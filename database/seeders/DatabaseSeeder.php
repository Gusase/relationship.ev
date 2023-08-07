<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Student;
use App\Models\StudentClass;
use App\Models\StudentProfile;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Student::factory(15)->create();
        // \App\Models\StudentClass::factory(3)->create();
        \App\Models\User::factory()->create([
            'name' => 'Rei',
            'username' => 'rei',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Teacher User',
            'username' => 'tch',
            'password' => Hash::make('password'),
            'role' => 'guru',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Asuka',
            'username' => 'Shikinami',
            'password' => Hash::make('password'),
            'role' => 'siswa',
        ]);

        \App\Models\StudentProfile::factory(15)->create();

        \App\Models\StudentClass::factory()->create([
            'class' => 'X',
            'room_class' => 'A1',
        ]);
        \App\Models\StudentClass::factory()->create([
            'class' => 'XI',
            'room_class' => 'B1',
        ]);
        \App\Models\StudentClass::factory()->create([
            'class' => 'XII',
            'room_class' => 'C1',
        ]);
    }
}
