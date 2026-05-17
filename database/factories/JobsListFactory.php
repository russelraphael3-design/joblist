<?php

namespace Database\Factories;

use App\Models\Listjobs;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<JobsList>
 */
class JobsListFactory extends Factory
{
    protected $model = JobsList::class;

    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'salary' => fake()->randomFloat(2, 5000, 100000),
        ];
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
