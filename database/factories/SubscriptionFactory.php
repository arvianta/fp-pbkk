<?php

namespace Database\Factories;

use App\Models\Subscription;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubscriptionFactory extends Factory
{
    protected $model = Subscription::class;

    public function definition()
    {
        return [
            'user_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
            'payment_id' => function () {
                return \App\Models\Payment::factory()->create()->id;
            },
            'personal_trainer_id' => function () {
                return \App\Models\PersonalTrainer::factory()->create()->id;
            },
            'membership_id' => function () {
                return \App\Models\Membership::factory()->create()->id;
            },
        ];
    }
}

