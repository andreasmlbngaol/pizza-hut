<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'outlet_id' => mt_rand(1, 600),
            'name' => fake()->sentence(mt_rand(2, 4)),
            'making' => fake()->paragraph(mt_rand(20, 40)),
            'serving' => fake()->paragraph(mt_rand(20, 40))
        ];
    }
}
