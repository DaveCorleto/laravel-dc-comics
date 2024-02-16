<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CartoonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake() -> word(),
            'years' => fake()->numberBetween(1920, 2024),
            'author' => fake()->firstName() . ' ' . fake()->lastName(),
            'illustrator' => fake()->firstName() . ' ' . fake()->lastName(),
            'publisher' => fake()->company(),
            'genre' => fake()->word(),
            'edition_number' => fake()->numberBetween(1, 10),
            'value' => fake()->randomFloat(2, 1, 100),        
        ];
    }
}
