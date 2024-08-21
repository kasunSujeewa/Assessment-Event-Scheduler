<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lecturer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all course IDs
        $courseIds = Course::pluck('id')->toArray();

        Lecturer::factory()->count(20)->make()->each(function ($lecturer) use ($courseIds) {
            $lecturer->course_id = collect($courseIds)->random();
            $lecturer->save();
        });
    }
}
