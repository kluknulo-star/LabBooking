<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Record;
use Database\Seeders\Application\CabinetSeeder;
use Database\Seeders\Application\DaySeeder;
use Database\Seeders\Application\DisciplineSeeder;
use Database\Seeders\Application\GroupSeeder;
use Database\Seeders\Application\LabLessonSeeder;
use Database\Seeders\Application\LabSeeder;
use Database\Seeders\Application\RecordSeeder;
use Database\Seeders\Application\ScheduleGroupSeeder;
use Database\Seeders\Application\StudentSeeder;
use Database\Seeders\Application\TeacherSeeder;
use Database\Seeders\Application\TimeLessonSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            GroupSeeder::class,
            StudentSeeder::class,
            TimeLessonSeeder::class,
            DaySeeder::class,
            TeacherSeeder::class,
            CabinetSeeder::class,
            DisciplineSeeder::class,
            ScheduleGroupSeeder::class,
            LabSeeder::class,
            LabLessonSeeder::class,
            RecordSeeder::class,

        ]);
    }
}
