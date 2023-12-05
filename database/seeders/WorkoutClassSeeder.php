<?php

namespace Database\Seeders;

use App\Models\WorkoutClass;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkoutClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WorkoutClass::factory()->count(20)->create();
    }
}
