<?php

namespace Database\Seeders;

use App\Models\UserWorkoutClass;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserWorkoutClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserWorkoutClass::factory()->count(20)->create();
    }
}
