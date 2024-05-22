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
        return [
//            'teacher_id' => $this->faker->numberBetween(2, 11),
            'student_id' => User::factory(),
            'subject_id' => Subject::factory(),
            'comment' => $this->faker->realText(),
            'points' => $this->faker->numberBetween(0, 100),
        ];
    }
}
