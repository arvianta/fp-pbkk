<?php

namespace Database\Factories;

use App\Models\WorkoutClass;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkoutClassFactory extends Factory
{
    protected $model = WorkoutClass::class;

    public function definition()
    {
        $instructorIds = \App\Models\Instructor::pluck('id')->toArray();
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'day' => $this->faker->dayOfWeek,
            'time' => $this->faker->time,
            'duration' => $this->faker->time,
            'capacity' => $this->faker->numberBetween(5, 30),
            'instructor_id' => $this->faker->randomElement($instructorIds),
        ];
    }
}

