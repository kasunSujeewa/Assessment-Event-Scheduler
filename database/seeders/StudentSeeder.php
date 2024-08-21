<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all course IDs
        $courseIds = Course::pluck('id')->toArray();

        Student::factory()->count(100)->make()->each(function ($student) use ($courseIds) {
            $student->course_id = collect($courseIds)->random();
            $student->save();
        });
    }
}
