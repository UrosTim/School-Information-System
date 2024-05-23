<?php

namespace Database\Factories;

use App\Models\Subject;
use App\Models\User;
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
        $user = User::inRandomOrder()->first();
        $subject = Subject::inRandomOrder()->first();

        return [
//            'teacher_id' => $this->faker->numberBetween(2, 11),
            'student_id' => $user->id,
            'subject_id' => $subject->id,
            'comment' => $this->faker->realText(),
            'points' => $this->faker->numberBetween(0, 100),
        ];
    }
}
