<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Selling>
 */
class SellingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $cost = mt_rand(10000000, 20000000);
        $income = mt_rand(8000000, 30000000);
        $surplus = $income - $cost;
        return [
            'date' => fake()->date(),
            'outlet_id' => mt_rand(1, 500),
            'delivery' => mt_rand(500, 1000),
            'dine_in' => mt_rand(500, 1000),
            'cost' => $cost,
            'income' => $income,
            'surplus' => $surplus
        ];
    }
}
