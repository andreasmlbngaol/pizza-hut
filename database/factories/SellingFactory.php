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
        $delivery = mt_rand(300, 500);
        $dine_in = mt_rand(300, 500);
        $cost = $delivery * mt_rand(20000, 30000) + $dine_in * mt_rand(20000, 30000);
        $income = $delivery * mt_rand(30000, 50000) + $dine_in * mt_rand(30000, 50000);
        $surplus = $income - $cost;
        return [
            'date' => fake()->dateTimeThisYear('-1 months'),
            'user_id' => mt_rand(1, 35),
            'delivery' => $delivery,
            'dine_in' => $dine_in,
            'cost' => $cost,
            'income' => $income,
            'surplus' => $surplus
        ];
    }
}
