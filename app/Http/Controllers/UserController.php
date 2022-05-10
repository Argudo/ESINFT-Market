<?php
    namespace App\Http\Controllers;
    use App\Models\Users;
    use Illuminate\Support\Str;
    use App\Models\nft;
    use App\Models\mercado;
    use App\Models\transaccion;
    use DB;

    use Illuminate\Http\Request;
    use App\Http\Requests\NuevoNFTRequest;
    use Illuminate\Support\Facades\Crypt;

    class UserController extends Controller
    {
        public function login()
        {
            return view("welcome");
        }

        public function home(){
            $populares = UserController::masPopulares();
            UserController::actualizarCookies();
            return view("home",["nombre" => $_COOKIE["nombre"], "saldo" => $_COOKIE["saldo"], "populares" => $populares, "x" => "0"]);
        }

        public function añadirUser(){

            $_SESSION['account'] = $_POST['account'];
            setcookie("id", $_POST['account']);

    
            if (Users::where('id', '=', $_SESSION['account'])->count() == 0) {
                $user = new Users;
                $user->id = $_SESSION['account'];
                $user->nombre = "Anonimo";
                setcookie("saldo", "0");
                setcookie("nombre", "Anonimo");
                $user->save();
                UserController::actualizarCookies();

                return view("datos");
             }else{
                $user = Users::findOrFail( $_SESSION['account']);
               
             
                setcookie("saldo", $user->saldo);
                setcookie("nombre", $user->nombre);

                $populares = UserController::masPopulares();

                UserController::actualizarCookies();

                return view("home",["nombre" => $_COOKIE["nombre"], "saldo" => $_COOKIE["saldo"], "populares" => $populares, "x" => "0"]);
             }
        }

        public function perfil(){
            UserController::actualizarCookies();
            return view("perfil",["nombre" => $_COOKIE["nombre"], "saldo" => $_COOKIE["saldo"]]);
        }

        public function NFT(){
            UserController::actualizarCookies();
            return view("NFT",["nombre" => $_COOKIE["nombre"], 'saldo' => $_COOKIE["saldo"]]);
        }

        public function myNFTs(){
            $nfts = nft::where('idMeta', '=', $_COOKIE["id"])->paginate(50);
            UserController::actualizarCookies();
            return view("myNfts")->with(["nfts" => $nfts, "nombre" => $_COOKIE["nombre"], "saldo" => $_COOKIE["saldo"]]);
        }

        public function saveNFT(NuevoNFTRequest $request){
            $nft = new nft();
            $nft->nombreNFT = $request->nombre;
            //$nft->id = $id;
            $nft->idMeta = $_COOKIE["id"];
            // script para subir la imagen
            if($request->hasFile("imagen")){
    
                $imagen = $request->file("imagen");
                $nombreimagen = Str::slug($request->nombre).".".$imagen->guessExtension();
                $ruta = public_path("img/NFTs/");
    
                //$imagen->move($ruta,$nombreimagen);
                copy($imagen->getRealPath(),$ruta.$nombreimagen);
    
                $nft->imagen = $nombreimagen;            
                
            }
            $nft->save();

            $populares = UserController::masPopulares();

            return view("home",["nombre" => $_COOKIE["nombre"], "saldo" => $_COOKIE["saldo"], "populares" => $populares, "x" => "1"]);
            
        }

        public function actualizar(Request $request){
            $user = Users::findOrFail($_COOKIE["id"]);
            if ($request->input('email') != NULL ) $user->email = $request->input('email');
            if ($request->input('nombre') != NULL ) $user->nombre = $request->input('nombre');
            $user->saldo += $request->input('saldo');
            $user->save();
            $populares = UserController::masPopulares();

            UserController::actualizarCookies();

            return view("home",["nombre" => $_COOKIE["nombre"], "saldo" => $_COOKIE["saldo"], "populares" => $populares, "x" => "2"]);
        }
        //preguntar a kevin como sacar los datos de aqui
        public function mercado(){
            $mercado=DB::select('SELECT nfts.nombreNFT, nfts.id, nfts.imagen, mercado.valor, usuarios.nombre FROM nfts,mercado, usuarios where nfts.id = mercado.id_nft and nfts.idMeta = usuarios.id ');
            UserController::actualizarCookies();
            return view("mercado")->with(["nfts" => $mercado, "nombre" => $_COOKIE["nombre"], "saldo" => $_COOKIE["saldo"]]);
        }


        public function vender($id){
            $id =  Crypt::decrypt($id);
            $nft = nft::where('id', '=', $id)->paginate(2); //preguntar a kevin lo que hace paginate
            return view("vender")->with(["nfts" => $nft, "nombre" => $_COOKIE["nombre"], "saldo" => $_COOKIE["saldo"]]);
        }

        public function venta(Request $request){
            $mercado= new mercado;
            if(mercado::where('id_nft', '=', $request->id)->count() == 0){
            $mercado->id_nft = $request->id;
            $mercado->valor = $request->precio;
            $mercado->fecha_public = now();
            $mercado->save();

            $populares = UserController::masPopulares();
            return view("home",["nombre" => $_COOKIE["nombre"], "saldo" => $_COOKIE["saldo"], "populares" => $populares, "x" => "3"]);
            }else{}

            $populares = UserController::masPopulares();

            return view("home",["nombre" => $_COOKIE["nombre"], "saldo" => $_COOKIE["saldo"], "populares" => $populares, "x" => "5"]);
        
            //return view("mercado")->with(["nfts" => $mercado]);
        }

        public function buscar(Request $request){

            $mercado=DB::select("SELECT nfts.nombreNFT, nfts.id, nfts.imagen, mercado.valor, usuarios.nombre
            FROM nfts,mercado, usuarios
            where nfts.id = mercado.id_nft  and nfts.idMeta = usuarios.id  and nfts.nombreNFT like '"."$request->name"."'  ");
        
            return view("mercado")->with(["nfts" => $mercado, "nombre" => $_COOKIE["nombre"], "saldo" => $_COOKIE["saldo"]]);
        }

        static public function datosNFT($request){
            $nft = nft::where('id', '=', $nfts->id_nft);

            return $nft;
        }

        public function comprar($id){
            $id =  Crypt::decrypt($id);

            $nft = DB::select("SELECT *
            FROM nfts,mercado
            where  nfts.id = $id  and mercado.id_nft =  $id ");
        
            return view("comprar")->with(["nfts" => $nft, "nombre" => $_COOKIE["nombre"], "saldo" => $_COOKIE["saldo"]]);
        }

        public function compra(Request $request){
            $user = Users::findOrFail($_COOKIE["id"]);
            $nft = nft::findOrFail($request->id);
               
            $userVendedor = Users::findOrFail( $nft->idMeta);

            if( $user->saldo >= $request->precio){
                $user->saldo -= $request->precio;
               
                $mercado= mercado::where('id_nft', '=', $request->id);
                $mercado->delete();

              
                $userVendedor->saldo += $request->precio;
                $userVendedor->save();

                $transaccion = new transaccion;
                $transaccion->id_vendedor =  $nft->idMeta;
                $transaccion->id_comprador = $_COOKIE["id"];
                $transaccion->id_nft = $request->id;
                $transaccion->fecha_compra = now();
                $transaccion->precio = $request->precio;
               


                $nft->idMeta =  $_COOKIE["id"];
               
                $nft->save(); 
                $user->save();
                $transaccion->save();

                $populares = UserController::masPopulares();

                UserController::actualizarCookies();

                return view("home",["nombre" => $_COOKIE["nombre"], "saldo" => $_COOKIE["saldo"], "populares" => $populares, "x" => "4"]);
            }else {
                $populares = UserController::masPopulares();

                return view("home",["nombre" => $_COOKIE["nombre"], "saldo" => $_COOKIE["saldo"], "populares" => $populares, "x" => "6"]);
           }
         
        }

        public function transacciones(){
            $id = $_COOKIE["id"];
            $id = "'".$_COOKIE['id']."'";
            $trans = DB::select("SELECT *
            FROM transacciones
            where  id_vendedor = $id  or id_comprador =  $id ");

            UserController::actualizarCookies();
            return view("transaccion")->with(["nfts" => $trans, "nombre" => $_COOKIE["nombre"], "saldo" => $_COOKIE["saldo"]]);
        }

        static public function masPopulares(){
            $populares = DB::select("SELECT *
            FROM nfts, mercado, usuarios
            where  nfts.id = mercado.id_nft and nfts.idMeta = usuarios.id ORDER BY mercado.valor DESC");
            return $populares;
        }

        static public function actualizarCookies(){
            $user = Users::findOrFail($_COOKIE["id"]);
            $_COOKIE["nombre"] = $user->nombre;
            $_COOKIE["saldo"] = $user->saldo;
        }
    }

