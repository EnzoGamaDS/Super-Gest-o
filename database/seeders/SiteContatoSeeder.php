<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Database\Factories\SiteContatoFactory;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /*
        $contato = new SiteContato();
        $contato->nome = 'Sistema SG';
        $contato->telefone = '88883333';
        $contato->email = 'contato@sg.com.br';
        $contato->motivo_contato = 1;
        $contato->mensagem = 'seja bem vindo ao sg';
        $contato->save();
        */
        //definição de quantas seeds criar
        \App\Models\SiteContato::factory()->count(100)->create();
    }
}
