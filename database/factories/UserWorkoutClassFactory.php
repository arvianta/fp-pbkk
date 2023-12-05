<?php

namespace Database\Factories;

use App\Models\UserWorkoutClass;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserWorkoutClassFactory extends Factory
{
    protected $model = UserWorkoutClass::class;

    public function definition()
    {
        $userIds = \App\Models\User::pluck('id')->toArray();
        $workoutClassIds = \App\Models\WorkoutClass::pluck('id')->toArray();
        return [
            'user_id' => $this->faker->randomElement($userIds),
            'workout_class_id' => $this->faker->randomElement($workoutClassIds),
        ];
    }
}

