<?php

namespace Database\Factories;

use App\Models\UserWorkoutClass;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserWorkoutClassFactory extends Factory
{
    protected $model = UserWorkoutClass::class;

    public function definition()
    {
        return [
            'user_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
            'workout_class_id' => function () {
                return \App\Models\WorkoutClass::factory()->create()->id;
            },
        ];
    }
}

