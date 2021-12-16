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
        $regras = [
            'nome' => 'required|min:3|max:40|unique:site_contatos', // nomes com no minimo 3 caracteres e no maximo 40
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000'
        ];
        $feedback =         [
            'nome.required' => 'O campo nome precisa ser preenchido',
            'nome.min' => 'O campo nome precisa ter no minimo 3 caracteres',
            'nome.max' => 'O campo nome precisa ter no maximo 40 caracteres',
            'nome.unique' => 'O nome informado já está em uso',
            'telefone.required' => 'O campo telefone precisa ser preenchido',
            'email.email' => 'O campo email precisa ser preenchido com um email',
            'motivo_contatos_id.required' => 'O campo motivo do contato precisa ser preenchido',
            'mensagem.required' => 'O campo mensagem precisa ser preenchido',
            'mensagem.max' => 'A mensagem precisa ter no maximo 2000 caracteres',
            
            
        ];

        $request->validate($regras,$feedback );

        SiteContato::create($request->all());
        return redirect()->route('site.index'); 
    }
}
