<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => ['nome' => 'fornecedor 1','status' => 'N', 'cnpj' =>''],
            1 => ['nome' => 'fornecedor 2','status' => 'S', 'cnpj' =>'12321321313'],
            2 => ['nome' => 'fornecedor 3','status' => 'S', 'cnpj' =>'123132131231'],
            3 => ['nome' => 'fornecedor 4','status' => 'N', 'cnpj' =>'312231235555']
        ];

        echo isset($fornecedores[0]['cnpj']) ? 'CNPJ informado':'CNPJ não informado';
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
