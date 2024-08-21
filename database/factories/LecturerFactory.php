<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Lecturer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lecturer>
 */
class LecturerFactory extends Factory
{
    protected $model = Lecturer::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Get all course IDs
        $courseIds = Course::pluck('id')->toArray();
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail()
        ];
    }
}
