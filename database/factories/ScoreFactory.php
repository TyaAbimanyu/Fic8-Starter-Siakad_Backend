<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Score>
 */
class ScoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => fake()->numberBetween(1, 46),
            'subject_id' => fake()->numberBetween(1, 25),
            'score' => fake()->numberBetween(10,100),
            'information' => fake()->sentence(),
        ];
    }
}
