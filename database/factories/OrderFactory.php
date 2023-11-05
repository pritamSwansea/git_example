<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'orderDate' => now(),
            'orderAmount' => fake()->numberBetween(99, 999),
            'comments' => fake()->realText(),
            'customer_id' => 1
        ];
    }
}
