<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato (){
        $contato = 'Contato';

        var_dump($_POST);
       return view('site.contato', ['contato'=> $contato]);
    }
}
