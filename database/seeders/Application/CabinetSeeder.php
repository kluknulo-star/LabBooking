<?php

namespace Database\Seeders\Application;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Cabinet;
use App\Models\Group;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class CabinetSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $cabinets = [
            [
                'title' => '345',
                'num_seat' => 10,
                'routers' => 6,
                'switches' => 8,
            ],
            [
                'title' => '345',
                'num_seat' => 10,
                'routers' => 6,
                'switches' => 8,
            ],
        ];

        Cabinet::insert($cabinets);
    }
}
