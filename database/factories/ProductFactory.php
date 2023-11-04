<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'productCode' => fake()->unique()->text(5),
            'productName' => fake()->unique()->name(),
            'productDescription' => fake()->text(20),
            'productPrice' => fake()->numberBetween(9, 999)
        ];
    }
}
