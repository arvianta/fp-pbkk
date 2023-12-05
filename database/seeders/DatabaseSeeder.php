<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,

            HealthInformationSeeder::class,
            PaymentSeeder::class,
            MembershipSeeder::class,
            PersonalTrainerSeeder::class,
            InstructorSeeder::class,

            ExpertiseSeeder::class,
            TrainerExpertiseSeeder::class,
            InstructorExpertiseSeeder::class,

            WorkoutClassSeeder::class,
            UserWorkoutClassSeeder::class,
            SubscriptionSeeder::class,
        ]);
    }
}
