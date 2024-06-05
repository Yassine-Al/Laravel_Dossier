<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Livre>
 */
class LivreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Titre' => fake()->realTextBetween(10 , 15),
            'Anee_Pub' => fake()->numberBetween(2018 , 2024),
            'Nbr_pages' => fake()->numberBetween(100 , 350),
            'Auteur_id' => fake()->numberBetween(1 , 10)
        ];
    }
}
