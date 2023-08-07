<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudentProfile>
 */
class StudentProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => function () {
                return Student::factory()->create()->id;
            },
            'birth' => fake()->date(),
            'phone_number' => fake()->phoneNumber(),
            'parent_name' => fake()->firstName(),
            'parent_phone' => fake()->phoneNumber(),
            'guardian_name' => fake()->optional()->name(),
            'guardian_phone' => fake()->optional()->phoneNumber(),
            'hobbies' => fake()->words(),
            'achievements' => fake()->optional()->paragraph(),
            'notes' => fake()->optional()->paragraph(1),
        ];
    }
}
