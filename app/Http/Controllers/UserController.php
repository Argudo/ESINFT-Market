<?php
    namespace App\Http\Controllers;
    use App\Models\Users;
    use DB;

    use Illuminate\Http\Request;
    use App\Http\Requests\NuevoUsersRequest;


    class UserController extends Controller
    {
        public function login()
        {
            return view("welcome");
        }

        public function home(){
            return view("home");
        }

        public function añadirUser(){
            $_SESSION['account'] = $_POST['account'];
            if (Users::where('idMeta', '=', $_SESSION['account'])->count() == 0) {
                $user = new Users;
                $user->idMeta = $_SESSION['account'];
                $user->save();
             }
          
            return view("home");
        }

        public function perfil(){
            return view("perfil");
        }

        public function actualizar(Request $request){
            $user = Users::findOrFail($_POST['account']);
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