<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\SiteContato;

class ContatoController extends Controller
{
    public function contato (Request $request){
        
       return view('site.contato', ['contato'=> 'contato']);
    }

    public function salvar (Request $request){

        //realizar a validação dos dados recebidos no request
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required'
        ]);
        
        //SiteContato::create($request->all());

    }
}
