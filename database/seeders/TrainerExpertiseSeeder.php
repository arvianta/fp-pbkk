<?php

namespace Database\Seeders;

use App\Models\TrainerExpertise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainerExpertiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TrainerExpertise::factory()->count(50)->create();
    }
}
