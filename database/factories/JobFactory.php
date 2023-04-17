<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\job>
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
            'fname' => fake()->name(),
            'lname' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => bcrypt('password'),
            'age' => fake()->age(),
            'phone' => fake()->number(),
            'address' => fake()->address(),
            'city' => fake()->city(),
            'state' => fake()->state(),
            'country' => fake()->country(),
            'job_title' => fake()->job(),
            'job_location' => fake()->place(),
            'job_start_date' => fake()->date(),
            'job_end_date' => fake()->date(),
            'job_salary_($)_per hour' => fake()->rand(1, 999),
            'job_hours' => fake()->rand(1,24),
        ];
    }
}
