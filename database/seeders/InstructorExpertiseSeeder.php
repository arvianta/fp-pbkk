<?php

namespace Database\Seeders;

use App\Models\InstructorExpertise;
use Illuminate\Database\Seeder;

class InstructorExpertiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InstructorExpertise::factory()->count(50)->create();
    }
}
