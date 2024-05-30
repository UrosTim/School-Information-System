<?php

namespace Database\Seeders;

use App\Models\Report;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => User::ROLE_ADMIN,
        ]);

        User::factory(13)->create()->each(function ($user) {
            $user->role = User::ROLE_TEACHER;
            $user->save();
        });

        $students = User::factory(200)->create();

        $subjects = Subject::factory(33)->create();

        Report::factory(500)->create();

        $students->each(function ($student) use ($subjects) {
            $student->subjects()->attach(
                $subjects->random(rand(2, 7))->pluck('id')->toArray()
            );
        });
    }
}
