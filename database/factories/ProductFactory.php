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
    public function definition()
    {
        return [
            'product_name' => $this->faker->name(),
            'description' => $this->faker->paragraphs(3, true),
            'price' => $this->faker->randomNumber(4, false),
            'quantity' => $this->faker->randomNumber(2, true)
        ];
    }
}
