<?php
    namespace App\Http\Controllers;
    use App\Models\Users;
    use Illuminate\Support\Str;
    use App\Models\nft;
    use DB;

    use Illuminate\Http\Request;
    use App\Http\Requests\NuevoNFTRequest;

    class UserController extends Controller
    {
        public function login()
        {
            return view("welcome");
        }

        public function home(){
            return view("home",['id' =>$_COOKIE["id"]]);
        }

        public function añadirUser(){

            $_SESSION['account'] = $_POST['account'];
            setcookie("id", $_POST['account']);

    
            if (Users::where('id', '=', $_SESSION['account'])->count() == 0) {
                $user = new Users;
                $user->id = $_SESSION['account'];
                $user->save();
             }
          
             return view("home",['id' => $_COOKIE["id"]]);
        }

        public function perfil(){
            return view("perfil");
        }

        public function NFT(){
            return view("NFT");
        }

        public function myNFTs(){
            $nfts = nft::where('idMeta', '=', $_COOKIE["id"])->paginate(2);
        
            return view("myNfts")->with(["nfts" => $nfts]);
        }

        public function saveNFT(NuevoNFTRequest $request){
            $nft = new nft();
            $nft->nombre = $request->nombre;
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

            return view("home",['id' =>  $_COOKIE["id"]]);
            
        }

        public function actualizar(Request $request){
            $user = Users::findOrFail($_COOKIE["id"]);
            if ($request->input('email') != NULL ) $user->email = $request->input('email');
            if ($request->input('nombre') != NULL ) $user->nombre = $request->input('nombre');
            $user->saldo += $request->input('saldo');
            $user->save();
            return view("home",['id' =>  $_COOKIE["id"]]);
        }

        public function mercado(){
            $art = Articulo::create($request->only("titulo", "descripcion", "cuerpo"));
            return redirect()->route("un_articulo", ["art" =>$art->id]);
        }
    }