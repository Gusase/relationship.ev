<?php

namespace Database\Factories;

use App\Models\StudentClass;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'username' => fake()->unique()->userName(),
            'email' => fake()->safeEmail(),
            'age' => fake()->numberBetween(14, 17),
            'class_id' => function () {
                return StudentClass::factory()->create()->id;
            },
        ];
    }
}
