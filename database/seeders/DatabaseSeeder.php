<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(FornecedorSeeder::class); //runar a classe seeder
        $this->call(SiteContatoSeeder::class); //Chama as seeds
        $this->call(MotivoContatoSeeder::class); 
    }
}
