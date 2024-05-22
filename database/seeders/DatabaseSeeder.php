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
            'role' => 'admin',
        ]);

        User::factory(10)->create()->each(function ($user) {
            $user->role = 'teacher';
            $user->save();
        });

        $students = User::factory(40)->create();

        $subjects = Subject::factory(15)->create();

        Report::factory(100)->create();

        $students->each(function ($student) use ($subjects) {
            $student->subjects()->attach(
                $subjects->random(rand(1, 7))->pluck('id')->toArray()
            );
        });
    }
}
