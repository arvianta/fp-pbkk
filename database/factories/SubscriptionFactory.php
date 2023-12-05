<?php

namespace Database\Factories;

use App\Models\Subscription;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubscriptionFactory extends Factory
{
    protected $model = Subscription::class;

    public function definition()
    {
        $membershipIds = \App\Models\Membership::pluck('id')->toArray();
        $personalTrainerIds = \App\Models\PersonalTrainer::pluck('id')->toArray();
        $userIds = \App\Models\User::pluck('id')->toArray();
        $paymentIds = \App\Models\Payment::pluck('id')->toArray();

        $randomField = $this->faker->randomElement(['personal_trainer_id', 'membership_id']);
        $personalTrainerId = null;
        $membershipId = null;

        if ($randomField === 'personal_trainer_id') {
            $personalTrainerId = $this->faker->randomElement($personalTrainerIds);
        } else {
            $membershipId = $this->faker->randomElement($membershipIds);
        }

        return [
            'user_id' => $this->faker->randomElement($userIds),
            'personal_trainer_id' => $personalTrainerId,
            'membership_id' => $membershipId,
            'payment_id' => $this->faker->randomElement($paymentIds),
            'created_at' => $this->faker->dateTimeThisYear(),
            'updated_at' => $this->faker->dateTimeThisYear(),
        ];
    }
}

