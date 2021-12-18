<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    //
    public function index(){
        return view('site.login', ['titulo' => 'login']);
    }
    public function autenticar(Request $request){

        //regras de validação

        $regras = [
            'usuario' => 'email',
            'senha' => 'required'
        ];

        //mensagens de feedback da validação

        $feedback = [
            'usuario.email' => 'O campo usuario precisa ser um email e é obrigatório',
            'senha.required' => 'O campo senha é obrigatório'
        ];
        
        $request->validate($regras, $feedback); 

        $email = $request->get('usuario');
        $senha = $request->get('senha');

        echo "Usuario : $email <br> Senha:$senha";

        //iniciar o Model User
        $user = new User();
        $existe = $user->where('email', '=', $email)->where('password', '=', $senha)->get()->first();

        if (isset($existe->name)) {
           echo '<br> usuario existe';
        }
        else{
            echo 'usuario nao existe';
        }
    }
}

