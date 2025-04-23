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
            "student_id" => 41,
            'subject_id' => 6,
            'schedule_time' => fake()->dateTime(),
            'schedule_type' => $this->faker->randomElement(['online', 'offline']),
        ];
    }
}
