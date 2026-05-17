<?php

namespace Database\Factories;

use App\Models\listjob;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<listjob>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
  'title' => fake()->jobTitle(),
            'salary' => '$' . fake()->numberBetween(40000, 100000),
            'description' => fake()->paragraph(),
        ];
    }
}
