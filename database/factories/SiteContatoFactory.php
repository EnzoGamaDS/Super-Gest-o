<?php

namespace Database\Factories;

use App\Models\SiteContato;
use Illuminate\Database\Eloquent\Factories\Factory;

class SiteContatoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //Modelo de inserção de dados
            return [
                'nome' => $this->faker->name(),
                'telefone' => $this->faker->unique()->tollFreePhoneNumber(),
                'email' =>$this->faker->unique()->email(),
                'motivo_contato' =>$this->faker->numberBetween(1,3),
                'mensagem' =>$this->faker->text(200)
            ];
    }
}
