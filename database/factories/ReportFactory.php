<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Report>
 */
class ReportFactory extends Factory
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
            'semester' => fake()->numberBetween(1, 8),
            'school_year' => fake()->year() . '/' . fake()->year(),
        ];
    }
}
