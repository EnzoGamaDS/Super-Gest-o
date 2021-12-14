<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //instanciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'fornecedor100.com.br';
        $fornecedor->uf = 'BA';
        $fornecedor->email= 'fornecedor100@contato.com.br';
        $fornecedor->save();

        //utilizando o metodo create -- atenção ao atributo fillable da classe
        Fornecedor::create([                                //melhor pra se usar
            'nome' => 'Fornecedor 200',
            'site' => 'fornecedor200.com.br',
            'uf' => 'CE',
            'email' => 'fornecedor200@outlook.com',
        ]);

        //insert
        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor 300',
            'site' => 'fornecedor300.com.br',
            'uf' => 'RS',
            'email' => 'fornecedor300@outlook.com',
        ]);
    }
}
