<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato (Request $request){

        echo '<pre>';
        print_r($request->all());
        echo '</pre>';
        echo $request->input('nome');
        echo '<br>';
        echo $request->input('email');
       return view('site.contato', ['contato'=> 'contato']);
    }
}
