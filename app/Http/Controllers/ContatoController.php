<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MotivoContato;
use App\Models\SiteContato;

class ContatoController extends Controller
{
    public function contato (Request $request){
        $motivo_contatos = MotivoContato::all();
        
       return view('site.contato', ['contato'=> 'contato', 'motivo_contatos'=> $motivo_contatos]);
    }

    public function salvar (Request $request){

        //realizar a validação dos dados recebidos no request
        $request->validate([
            'nome' => 'required|min:3|max:40|unique:site_contatos', // nomes com no minimo 3 caracteres e no maximo 40
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required'
        ]);

        SiteContato::create($request->all());
        return redirect()->route('site.index'); 
    }
}
