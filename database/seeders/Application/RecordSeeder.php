<?php

namespace Database\Seeders\Application;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Group;
use App\Models\Record;
use App\Models\Student;
use Illuminate\Database\Seeder;

class RecordSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $records = [
            [
                'student_id' => 2,
                'day_id' => 1,
                'time_lesson_id' => 1,
                'cabinet_id' => 1,
                'teacher_id' => 1,
                'lab_id' => 1,
            ],
            [
                'student_id' => 3,
                'day_id' => 1,
                'time_lesson_id' => 1,
                'cabinet_id' => 1,
                'teacher_id' => 1,
                'lab_id' => 1,
            ],
            [
                'student_id' => 1,
                'day_id' => 1,
                'time_lesson_id' => 4,
                'cabinet_id' => 1,
                'teacher_id' => 1,
                'lab_id' => 1,
            ],

        ];

        Record::insert($records);
    }
}
