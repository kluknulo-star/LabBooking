<?php

namespace Database\Seeders\Application;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Group;
use App\Models\ScheduleGroup;
use App\Models\Student;
use App\Models\TimeLesson;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ScheduleGroupSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $schedule_group = [
            [
                'title' => 'БД',
                'group_id' => 1,
                'day_id' => 1,
                'time_lesson_id' => 1,
            ],
            [
                'title' => 'БД',
                'group_id' => 1,
                'day_id' => 1,
                'time_lesson_id' => 2,
            ],
            [
                'title' => 'ИС',
                'group_id' => 1,
                'day_id' => 2,
                'time_lesson_id' => 2,
            ],
            [
                'title' => 'Авт.Упр.',
                'group_id' => 1,
                'day_id' => 2,
                'time_lesson_id' => 3,
            ],
            [
                'title' => 'БД',
                'group_id' => 1,
                'day_id' => 3,
                'time_lesson_id' => 1,
            ],
            [
                'title' => 'АСОИУ',
                'group_id' => 1,
                'day_id' => 3,
                'time_lesson_id' => 2,
            ],
            [
                'title' => 'АСОИУ',
                'group_id' => 1,
                'day_id' => 3,
                'time_lesson_id' => 3,
            ],
            [
                'title' => 'Авт.Упр.',
                'group_id' => 1,
                'day_id' => 4,
                'time_lesson_id' => 1,
            ],
            [
                'title' => 'Сети',
                'group_id' => 1,
                'day_id' => 4,
                'time_lesson_id' => 2,
            ],
            [
                'title' => 'БД',
                'group_id' => 1,
                'day_id' => 4,
                'time_lesson_id' => 3,
            ],
            [
                'title' => 'АСОИУ',
                'group_id' => 1,
                'day_id' => 5,
                'time_lesson_id' => 1,
            ],
            [
                'title' => 'Авт.Упр.',
                'group_id' => 1,
                'day_id' => 5,
                'time_lesson_id' => 2,
            ],
            [
                'title' => 'ИС',
                'group_id' => 1,
                'day_id' => 5,
                'time_lesson_id' => 3,
            ],
            [
                'title' => 'БД',
                'group_id' => 1,
                'day_id' => 6,
                'time_lesson_id' => 1,
            ],
            [
                'title' => 'БД',
                'group_id' => 1,
                'day_id' => 6,
                'time_lesson_id' => 2,
            ],
            [
                'title' => 'Авт.Упр.',
                'group_id' => 1,
                'day_id' => 7,
                'time_lesson_id' => 1,
            ],
            [
                'title' => 'АСОИУ',
                'group_id' => 1,
                'day_id' => 7,
                'time_lesson_id' => 2,
            ],
            [
                'title' => 'Авт.Упр.',
                'group_id' => 1,
                'day_id' => 7,
                'time_lesson_id' => 3,
            ],
            [
                'title' => 'БД',
                'group_id' => 1,
                'day_id' => 8,
                'time_lesson_id' => 1,
            ],
            [
                'title' => 'АСОИУ',
                'group_id' => 1,
                'day_id' => 8,
                'time_lesson_id' => 2,
            ],
            [
                'title' => 'АСОИУ',
                'group_id' => 1,
                'day_id' => 8,
                'time_lesson_id' => 3,
            ],
            [
                'title' => 'Авт.Упр.',
                'group_id' => 1,
                'day_id' => 9,
                'time_lesson_id' => 1,
            ],
            [
                'title' => 'Сети',
                'group_id' => 1,
                'day_id' => 9,
                'time_lesson_id' => 2,
            ],
            [
                'title' => 'БД',
                'group_id' => 1,
                'day_id' => 9,
                'time_lesson_id' => 3,
            ],
            [
                'title' => 'АСОИУ',
                'group_id' => 1,
                'day_id' => 10,
                'time_lesson_id' => 1,
            ],
            [
                'title' => 'ИС',
                'group_id' => 1,
                'day_id' => 10,
                'time_lesson_id' => 2,
            ],
            [
                'title' => 'ИС',
                'group_id' => 1,
                'day_id' => 10,
                'time_lesson_id' => 3,
            ],

            [
                'title' => 'БД',
                'group_id' => 2,
                'day_id' => 1,
                'time_lesson_id' => 3,
            ],
            [
                'title' => 'БД',
                'group_id' => 2,
                'day_id' => 1,
                'time_lesson_id' => 4,
            ],
            [
                'title' => 'ИС',
                'group_id' => 2,
                'day_id' => 2,
                'time_lesson_id' => 4,
            ],
            [
                'title' => 'Авт.Упр.',
                'group_id' => 2,
                'day_id' => 2,
                'time_lesson_id' => 5,
            ],
            [
                'title' => 'БД',
                'group_id' => 2,
                'day_id' => 3,
                'time_lesson_id' => 3,
            ],
            [
                'title' => 'АСОИУ',
                'group_id' => 2,
                'day_id' => 3,
                'time_lesson_id' => 4,
            ],
            [
                'title' => 'АСОИУ',
                'group_id' => 2,
                'day_id' => 3,
                'time_lesson_id' => 5,
            ],
            [
                'title' => 'Авт.Упр.',
                'group_id' => 2,
                'day_id' => 4,
                'time_lesson_id' => 3,
            ],
            [
                'title' => 'Сети',
                'group_id' => 2,
                'day_id' => 4,
                'time_lesson_id' => 4,
            ],
            [
                'title' => 'БД',
                'group_id' => 2,
                'day_id' => 4,
                'time_lesson_id' => 5,
            ],
            [
                'title' => 'АСОИУ',
                'group_id' => 2,
                'day_id' => 5,
                'time_lesson_id' => 3,
            ],
            [
                'title' => 'Авт.Упр.',
                'group_id' => 2,
                'day_id' => 5,
                'time_lesson_id' => 4,
            ],
            [
                'title' => 'ИС',
                'group_id' => 2,
                'day_id' => 5,
                'time_lesson_id' => 5,
            ],
            [
                'title' => 'БД',
                'group_id' => 2,
                'day_id' => 6,
                'time_lesson_id' => 3,
            ],
            [
                'title' => 'БД',
                'group_id' => 2,
                'day_id' => 6,
                'time_lesson_id' => 5,
            ],
            [
                'title' => 'Авт.Упр.',
                'group_id' => 2,
                'day_id' => 7,
                'time_lesson_id' => 3,
            ],
            [
                'title' => 'АСОИУ',
                'group_id' => 2,
                'day_id' => 7,
                'time_lesson_id' => 4,
            ],
            [
                'title' => 'Авт.Упр.',
                'group_id' => 2,
                'day_id' => 7,
                'time_lesson_id' => 5,
            ],
            [
                'title' => 'БД',
                'group_id' => 2,
                'day_id' => 8,
                'time_lesson_id' => 3,
            ],
            [
                'title' => 'АСОИУ',
                'group_id' => 2,
                'day_id' => 8,
                'time_lesson_id' => 4,
            ],
            [
                'title' => 'АСОИУ',
                'group_id' => 2,
                'day_id' => 8,
                'time_lesson_id' => 5,
            ],
            [
                'title' => 'Авт.Упр.',
                'group_id' => 2,
                'day_id' => 9,
                'time_lesson_id' => 3,
            ],
            [
                'title' => 'Сети',
                'group_id' => 2,
                'day_id' => 9,
                'time_lesson_id' => 4,
            ],
            [
                'title' => 'БД',
                'group_id' => 2,
                'day_id' => 9,
                'time_lesson_id' => 5,
            ],
            [
                'title' => 'АСОИУ',
                'group_id' => 2,
                'day_id' => 10,
                'time_lesson_id' => 3,
            ],
            [
                'title' => 'ИС',
                'group_id' => 2,
                'day_id' => 10,
                'time_lesson_id' => 4,
            ],
            [
                'title' => 'ИС',
                'group_id' => 2,
                'day_id' => 10,
                'time_lesson_id' => 5,
            ],
        ];

        ScheduleGroup::insert($schedule_group);

    }
}
