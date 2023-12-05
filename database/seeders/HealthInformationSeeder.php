<?php

namespace Database\Seeders;

use App\Models\HealthInformation;
use Illuminate\Database\Seeder;

class HealthInformationSeeder extends Seeder
{
    public function run()
    {
        HealthInformation::factory()->count(10)->create();
    }
}

