<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Referencce'=>$this->faker->randomNumber(),
            'Designation'=>$this->faker->sentence(),
            'PrixUnitaire'=>$this->faker->randomNumber(2),
            'Stock'=>$this->faker->randomNumber(),
        ];
    }
}
