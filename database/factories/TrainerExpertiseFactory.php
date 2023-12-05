<?php

namespace Database\Factories;

use App\Models\TrainerExpertise;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrainerExpertiseFactory extends Factory
{
    protected $model = TrainerExpertise::class;

    public function definition()
    {
        return [
            'trainer_id' => function () {
                return \App\Models\PersonalTrainer::factory()->create()->id;
            },
            'expertise_id' => function () {
                return \App\Models\Expertise::factory()->create()->id;
            },
        ];
    }
}

