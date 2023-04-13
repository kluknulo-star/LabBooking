<?php

namespace Database\Seeders\Application;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Cabinet;
use App\Models\Discipline;
use App\Models\Group;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class DisciplineSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $disciplins = [
            [
                'title' => 'СиТ',
                'group_id' => 1,
            ],
            [
                'title' => 'Комплексная безопасность информационных систем',
                'group_id' => 2,
            ],

        ];

        Discipline::insert($disciplins);
    }
}
