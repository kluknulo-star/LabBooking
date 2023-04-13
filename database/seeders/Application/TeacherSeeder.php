<?php

namespace Database\Seeders\Application;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Group;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $teacher = [
            [
                'fio' => 'Жуковский В.Е.',
            ],
            [
                'fio' => 'Соколов О.Б.',
            ],
        ];

        Teacher::insert($teacher);
    }
}
