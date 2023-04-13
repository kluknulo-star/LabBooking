<?php

namespace Database\Seeders\Application;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Group;
use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $students = [
            [
                'student_code' => 191308,
                'fio' => 'Киляков Кирилл',
                'group_id' => 1,
            ],
            [
                'student_code' => 191000,
                'fio' => 'Ибрагимов Александр',
                'group_id' => 1,
            ],
            [
                'student_code' => 191001,
                'fio' => 'Хрящева Екатерина',
                'group_id' => 1,
            ],
            [
                'student_code' => 191004,
                'fio' => 'Потный ИСТшник',
                'group_id' => 2,
            ],
            [
                'student_code' => 191005,
                'fio' => 'Потный ИСТшник2',
                'group_id' => 2,
            ],
            [
                'student_code' => 191006,
                'fio' => 'Потный ИСТшник3',
                'group_id' => 2,
            ],
        ];

        Student::insert($students);
    }
}
