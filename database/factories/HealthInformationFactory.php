<?php

namespace Database\Factories;

use App\Models\HealthInformation;
use Illuminate\Database\Eloquent\Factories\Factory;

class HealthInformationFactory extends Factory
{
    protected $model = HealthInformation::class;

    public function definition()
    {
        $userIds = \App\Models\User::pluck('id')->toArray();
        return [
            'bmi' => $this->faker->randomFloat(2, 15, 40),
            'body_fat_percentage' => $this->faker->randomFloat(2, 5, 35),
            'created_at' => $this->faker->dateTimeThisYear(),
            'updated_at' => $this->faker->dateTimeThisYear(),
            'user_id' => $this->faker->randomElement($userIds),
        ];
    }
}
