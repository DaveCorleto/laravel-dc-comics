<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CartoonsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'years' => $this->faker->dateTimeBetween('-50 years', 'now'),
            'author' => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'illustrator' => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'publisher' => $this->faker->company(),
            'genre' => $this->faker->word(),
            'edition_number' => $this->faker->numberBetween(1, 10),
            'value' => $this->faker->randomFloat(2, 1, 100), 
        
        ];
    }
}
