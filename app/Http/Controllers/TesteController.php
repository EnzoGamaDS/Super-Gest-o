<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1,int $p2){

        //echo "A soma de $p1 + $p2 é: ".($p1+$p2);

        //return view('site.teste', ['x'=>$p1, 'y'=>$p2]); - Array associativos

        //return view('site.teste', compact('p1', 'p2')); - compact

        return view('site.teste')->with('x', $p1)->with('y', $p2);
    }
}
