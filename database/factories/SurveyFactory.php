<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Survey>
 */
class SurveyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => mt_rand(1, 35),
            'date' => fake()->date(),
            'rating' => mt_rand() / mt_getrandmax() * 10,
            'description' => fake()->sentence(mt_rand(10, 15))
        ];
    }
}
