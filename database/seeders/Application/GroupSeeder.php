<?php

namespace Database\Seeders\Application;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Group;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Group::insert([
            [
                'title' => 'ИАС-19'
            ],
            [
                'title' => 'ИCT-19'
            ],
            [
                'title' => 'ИАС-20'
            ],
            [
                'title' => 'ИСТ-20'
            ],
        ]);


    }
}
