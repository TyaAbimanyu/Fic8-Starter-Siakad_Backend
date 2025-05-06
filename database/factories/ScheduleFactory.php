<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "student_id" => fake()->numberBetween(1, 46),
            'subject_id' => fake()->numberBetween(1, 25),
            'schedule_time' => fake()->dateTime(),
            'schedule_type' => $this->faker->randomElement(['online', 'offline']),
        ];
    }
}
