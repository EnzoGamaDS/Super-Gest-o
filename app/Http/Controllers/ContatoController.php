<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MotivoContato;
class ContatoController extends Controller
{
    public function contato (Request $request){
        $motivo_contatos = MotivoContato::all();
        
       return view('site.contato', ['contato'=> 'contato', 'motivo_contatos'=> $motivo_contatos]);
    }

    public function salvar (Request $request){

        //realizar a validação dos dados recebidos no request
        $request->validate([
            
            'nome' => 'required|min:3|max:40', // nomes com no minimo 3 caracteres e no maximo 40
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required'


        ]);

        //SiteContato::create($request->all());

    }
}
