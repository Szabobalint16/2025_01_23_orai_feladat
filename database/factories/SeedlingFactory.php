<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seedling>
 */
class SeedlingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->firstNameFemale(),
            "type" => fake()->colorName(),
            "old" => fake()->numberBetween(1,5),
            "cotyledonNumber" => fake()->numberBetween(1,12),
            "growing" => fake()->boolean(),
            "height" => fake()->randomFloat(2, 1, 5),
            "wateringRequirement" => fake()->numberBetween(1,5)
        ];
    }
}
