<?php

namespace Database\Seeders\Application;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Group;
use App\Models\Lab;
use App\Models\ScheduleGroup;
use App\Models\Student;
use App\Models\TimeLesson;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class LabSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Lab::factory(40)->create();
    }
}
