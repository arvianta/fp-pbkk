<?php

namespace Database\Seeders;

use App\Models\Expertise;
use Illuminate\Database\Seeder;

class ExpertiseSeeder extends Seeder
{
    public function run()
    {
        Expertise::factory()->count(20)->create();
    }
}

