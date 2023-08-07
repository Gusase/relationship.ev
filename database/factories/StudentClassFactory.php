<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudentClass>
 */
class StudentClassFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'class' => fake()->randomElement(['X', 'XI', 'XII'      ]),
            'room_class' => fake()->randomElement(['A1', 'A2', 'B1', 'B2', 'C1', 'C2']),
        ];
    }
}
