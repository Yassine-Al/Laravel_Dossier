<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etudiant>
 */
class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nom' => fake()->firstName(),
            'Prenom' => fake()->lastName(),
            'Adresse' => fake()->address(),
            'dateNaissance' => fake()->date(),
            'idClasse' => fake()->numberBetween(1,25)
        ];
    }
}
