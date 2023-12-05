<?php

namespace Database\Factories;

use App\Models\InstructorExpertise;
use Illuminate\Database\Eloquent\Factories\Factory;

class InstructorExpertiseFactory extends Factory
{
    protected $model = InstructorExpertise::class;

    public function definition()
    {
        $instructorIds = \App\Models\Instructor::pluck('id')->toArray();
        $expertiseIds = \App\Models\Expertise::pluck('id')->toArray();

        return [
            'instructor_id' => $this->faker->randomElement($instructorIds),
            'expertise_id' => $this->faker->randomElement($expertiseIds),
        ];
    }
}

