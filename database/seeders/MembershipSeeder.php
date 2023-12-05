<?php

namespace Database\Seeders;

use App\Models\Membership;
use Illuminate\Database\Seeder;

class MembershipSeeder extends Seeder
{
    public function run()
    {
        $memberships = [
            ['duration' => '1', 'cost' => 175000],
            ['duration' => '3', 'cost' => 425000],
            ['duration' => '6', 'cost' => 800000],
        ];

        foreach ($memberships as $membership) {
            Membership::create($membership);
        }
    }
}

