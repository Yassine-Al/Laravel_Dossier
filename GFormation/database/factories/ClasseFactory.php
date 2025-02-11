<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classe>
 */
class ClasseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Libelle' => fake()->realTextBetween(5,10),
            'NombreMax' => fake()->numberBetween(10 , 25),
            'idFormation' => fake()->numberBetween(1 , 10)
        ];
    }
}
