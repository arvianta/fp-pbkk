<?php

namespace Database\Factories;

use App\Models\InstructorExpertise;
use Illuminate\Database\Eloquent\Factories\Factory;

class InstructorExpertiseFactory extends Factory
{
    protected $model = InstructorExpertise::class;

    public function definition()
    {
        return [
            'instructor_id' => function () {
                return \App\Models\Instructor::factory()->create()->id;
            },
            'expertise_id' => function () {
                return \App\Models\Expertise::factory()->create()->id;
            },
        ];
    }
}

