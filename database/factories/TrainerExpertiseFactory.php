<?php

namespace Database\Factories;

use App\Models\TrainerExpertise;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrainerExpertiseFactory extends Factory
{
    protected $model = TrainerExpertise::class;

    public function definition()
    {
        $trainerIds = \App\Models\PersonalTrainer::pluck('id')->toArray();
        $expertiseIds = \App\Models\Expertise::pluck('id')->toArray();
        return [
            'trainer_id' => $this->faker->randomElement($trainerIds),
            'expertise_id' => $this->faker->randomElement($expertiseIds),
        ];
    }
}

