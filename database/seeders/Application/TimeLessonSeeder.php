<?php

namespace Database\Seeders\Application;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Group;
use App\Models\Student;
use App\Models\TimeLesson;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TimeLessonSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $timeLessons = [
            [
                'title' => 'I (8:50-10:20)',
            ],
            [
                'title' => 'II (10:35-12:05)',
            ],
            [
                'title' => 'III (12:35-14:05)',
            ],
            [
                'title' => 'IV (14:15-15:45)',
            ],
            [
                'title' => 'V (15:55-17:20)',
            ],
            [
                'title' => 'VI (17:30-19:00)',
            ],
        ];

        TimeLesson::insert($timeLessons);
    }
}
