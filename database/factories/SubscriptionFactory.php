<?php

namespace Database\Factories;

use App\Models\Subscription;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubscriptionFactory extends Factory
{
    protected $model = Subscription::class;

    public function definition()
    {
        $randomField = $this->faker->randomElement(['personal_trainer_id', 'membership_id']);
        $personalTrainerId = null;
        $membershipId = null;

        if ($randomField === 'personal_trainer_id') {
            $personalTrainerId = \App\Models\PersonalTrainer::factory()->create()->id;
        } else {
            $membershipId = \App\Models\Membership::factory()->create()->id;
        }

        return [
            'user_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
            'payment_id' => function () {
                return \App\Models\Payment::factory()->create()->id;
            },
            'personal_trainer_id' => $personalTrainerId,
            'membership_id' => $membershipId,
        ];
    }
}

