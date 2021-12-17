<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(){
        return view('site.login', ['titulo' => 'login']);
    }
    public function autenticar(){
        return 'Chegamos até aqui !';
    }
}

