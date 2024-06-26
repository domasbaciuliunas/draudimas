<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'reg_number'=> $this->faker->regexify('^[A-Z]{3}\d{3}$'),
            'brand'=>fake()->company,
            'model'=>fake()->title
        ];
    }
}
