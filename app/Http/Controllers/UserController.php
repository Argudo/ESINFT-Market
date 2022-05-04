<?php
    namespace App\Http\Controllers;
    use App\Models\Users;
    use Illuminate\Support\Str;
    use App\Models\nft;
    use DB;

    use Illuminate\Http\Request;
    use App\Http\Requests\NuevoUsersRequest;

    class UserController extends Controller
    {
        static public $id;
        public function login()
        {
            return view("welcome");
        }

        public function home(){
            return view("home",['id' =>  UserController::$id]);
        }

        public function añadirUser(){

            $_SESSION['account'] = $_POST['account'];
            UserController::$id =  $_SESSION['account'];
            if (Users::where('idMeta', '=', $_SESSION['account'])->count() == 0) {
                $user = new Users;
                $user->idMeta = $_SESSION['account'];
                $user->save();
             }
          
             return view("home",['id' =>  UserController::$id]);
        }

        public function perfil(){
            return view("perfil");
        }

        public function NFT(){
            return view("NFT");
        }

        public function myNFTs(){
            return view("NFT");
        }

        public function saveNFT(Request $request){
            $nft = new nft();
            $nft->nombre = $request->nombre;
            //$nft->idMeta = $id;
            $nft->idMeta = "0xb8b572e5c7f7df8fe083d8644908e174fc113d77";
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

            return view("home",['id' =>  UserController::$id]);
            
        }

        public function actualizar(Request $request){
            $user = Users::findOrFail(UserController::$id);
            if ($request->input('email') != NULL ) $user->email = $request->input('email');
            if ($request->input('nombre') != NULL ) $user->nombre = $request->input('nombre');
            $user->save();
            return redirect()->route("home");
        }

        public function mercado(){
            $art = Articulo::create($request->only("titulo", "descripcion", "cuerpo"));
            return redirect()->route("un_articulo", ["art" =>$art->id]);
        }
    }