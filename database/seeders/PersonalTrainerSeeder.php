<?php

namespace Database\Seeders;

use App\Models\PersonalTrainer;
use Illuminate\Database\Seeder;

class PersonalTrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PersonalTrainer::factory()->count(10)->create();
    }
}
