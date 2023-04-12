<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class LabFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => rand(1,9) . '.' . rand(0,9) . '.' . rand(1,9) . '. ' . fake()->text(20),
            'discipline_id' => rand(1,4),
            'routers' => rand(1,3),
            'switches' => rand(1,3),
        ];
    }

}
