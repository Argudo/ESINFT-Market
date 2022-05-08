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
            return view("home",["nombre" => $_COOKIE["nombre"], "saldo" => $_COOKIE["saldo"]]);
        }

        public function añadirUser(){

            $_SESSION['account'] = $_POST['account'];
            setcookie("id", $_POST['account']);

    
            if (Users::where('id', '=', $_SESSION['account'])->count() == 0) {
                $user = new Users;
                $user->id = $_SESSION['account'];
                $user->save();
             }
            
             $user = Users::findOrFail( $_SESSION['account']);
               
             
             setcookie("saldo", $user->saldo);
             setcookie("nombre", $user->nombre);
             return view("home",["nombre" => $_COOKIE["nombre"], "saldo" => $_COOKIE["saldo"]]);
        }

        public function perfil(){
            return view("perfil",["nombre" => $_COOKIE["nombre"], "saldo" => $_COOKIE["saldo"]]);
        }

        public function NFT(){
            return view("NFT",['nombre' => $_COOKIE["nombre"], 'saldo' => $_COOKIE["saldo"]]);
        }

        public function myNFTs(){
            $nfts = nft::where('idMeta', '=', $_COOKIE["id"])->paginate(8);
        
            return view("myNfts")->with(["nfts" => $nfts]);
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

            return view("home",["nombre" => $_COOKIE["nombre"], "saldo" => $_COOKIE["saldo"]]);
            
        }

        public function actualizar(Request $request){
            $user = Users::findOrFail($_COOKIE["id"]);
            if ($request->input('email') != NULL ) $user->email = $request->input('email');
            if ($request->input('nombre') != NULL ) $user->nombre = $request->input('nombre');
            $user->saldo += $request->input('saldo');
            $user->save();
            return view("home",["nombre" => $_COOKIE["nombre"], "saldo" => $_COOKIE["saldo"]]);
        }
        //preguntar a kevin como sacar los datos de aqui
        public function mercado(){
            $mercado=DB::select('SELECT nfts.nombreNFT, nfts.id, nfts.imagen, mercado.valor, usuarios.nombre FROM nfts,mercado, usuarios where nfts.id = mercado.id_nft and nfts.idMeta = usuarios.id ');
        
            return view("mercado")->with(["nfts" => $mercado]);
        }


        public function vender($id){
            $id =  Crypt::decrypt($id);
            $nft = nft::where('id', '=', $id)->paginate(2); //preguntar a kevin lo que hace paginate
            return view("vender")->with(["nfts" => $nft]);
        }

        public function venta(Request $request){
            $mercado= new mercado;
            $mercado->id_nft = $request->id;
            $mercado->valor = $request->precio;
            $mercado->fecha_public = now();
            $mercado->save();

            return view("home",["nombre" => $_COOKIE["nombre"], "saldo" => $_COOKIE["saldo"]]);
        
            //return view("mercado")->with(["nfts" => $mercado]);
        }

        public function buscar(Request $request){

            $mercado=DB::select("SELECT nfts.nombreNFT, nfts.id, nfts.imagen, mercado.valor, usuarios.nombre
            FROM nfts,mercado, usuarios
            where nfts.id = mercado.id_nft  and nfts.idMeta = usuarios.id  and nfts.nombreNFT like '"."$request->name"."'  ");
        
            return view("mercado")->with(["nfts" => $mercado]);
        }

        static public function datosNFT($request){
            $nft = nft::where('id', '=', $nfts->id_nft);

            return $nft;
        }

        public function comprar($id){
            $id =  Crypt::decrypt($id);
            $nft = nft::where('id', '=', $id)->paginate(2); 
            return view("comprar")->with(["nfts" => $nft]);
        }

        public function compra(Request $request){
            $user = Users::findOrFail($_COOKIE["id"]);

            if( $user->saldo >= $request->precio){
                $user->saldo -= $request->precio;
                $mercado= mercado::where('id_nft', '=', $request->id);
                $mercado->delete();

                $nft = nft::findOrFail($request->id);
                $userVendedor = Users::findOrFail( $nft->idMeta);
                $user->saldo += $request->precio;

                $transaccion = new transaccion;
                $transaccion->id_vendedor =  $nft->idMeta;
                $transaccion->id_comprador = $_COOKIE["id"];
                $transaccion->id_nft = $request->id;
                $transaccion->fecha_compra = now();
                $transaccion->precio = $request->precio;
                $transaccion->save();


                $nft->idMeta =  $_COOKIE["id"];
                $nft->save();
                return view("home",["nombre" => $_COOKIE["nombre"], "saldo" => $_COOKIE["saldo"]]);
            }else{
                return view("home",["nombre" => $_COOKIE["nombre"], "saldo" => $_COOKIE["saldo"]]); // aqui hay que poner una vista que te diga oye error no pues comprarlo
            }
            //return view("mercado")->with(["nfts" => $mercado]);
        }

        public function transacciones(){
            $id = $_COOKIE["id"];
            $id = "'".$_COOKIE['id']."'";
            $trans = DB::select("SELECT *
            FROM transacciones
            where  id_vendedor = $id  or id_comprador =  $id ");
        
            return view("transaccion")->with(["nfts" => $trans]);
        }
    }


