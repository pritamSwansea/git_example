<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customerName' => fake()->name(),
            'customerAddress' => fake()->unique()->address(),
            'taxId' => fake()->unique()->numberBetween(1000, 9999)
        ];
    }
}
