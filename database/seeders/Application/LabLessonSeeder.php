<?php

namespace Database\Seeders\Application;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Group;
use App\Models\Lab;
use App\Models\LabLesson;
use App\Models\ScheduleGroup;
use App\Models\Student;
use App\Models\TimeLesson;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class LabLessonSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        LabLesson::factory(10)->create();

        $labLessons = [];
        for ($i = 1; $i < 6; $i++) {
            for ($j = 1; $j < 7; $j++) {
                $labLesson = [
                    'teacher_id' => rand(1,2),
                    'day_id' => $i,
                    'time_lesson_id' => $j,
                    'cabinet_id' => rand(1,2),
                ];
                $labLessons[] = $labLesson;
            }
        }
        LabLesson::insert($labLessons);
    }
}
