<?php

namespace Database\Factories;

use App\Models\PersonalTrainer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PersonalTrainer>
 */
class PersonalTrainerFactory extends Factory
{
    protected $model = PersonalTrainer::class;

    public function definition()
    {
        return [
            'name' =>$this->faker->name,
            'certification' =>$this->faker->text,
            'session_cost' =>$this->faker->randomFloat(2, 10, 100),
            'created_at' => $this->faker->dateTimeThisYear(),
            'updated_at' => $this->faker->dateTimeThisYear(),
        ];
    }
}
