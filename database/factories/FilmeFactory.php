<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Filme>
 */
class FilmeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->string(),
            'duracao' => fake()->string(),
            'genero' => fake()->string(),
            'classificacao' => fake()->string(),
            'linguagem' => fake()->string(),
            'sinopse' => fake()->string(),
            'dtbirth' => fake()->string(),
            'plataformas' => fake()->string(),
            'direcao' => fake()->string(),
            'premio' => fake()->string(),
        ];
    }
}
