<?php

namespace Database\Factories;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    protected $model = Payment::class;

    public function definition()
    {
        $userIds = \App\Models\User::pluck('id')->toArray();
        $membershipDurationIds = \App\Models\Membership::pluck('duration')->toArray();
        $personalTrainerNames = \App\Models\PersonalTrainer::pluck('name')->toArray();
        $randomField = $this->faker->randomElement(['personal_trainer_name', 'membership_duration']);

        if ($randomField === 'personal_trainer_name') {
            $product = $this->faker->randomElement($personalTrainerNames);
        } else {
            $product = $this->faker->randomElement($membershipDurationIds);
        }
        
        return [
            'id' => $this->faker->uuid,
            'method' => $this->faker->randomElement(['Credit Card', 'PayPal', 'Bank Transfer']),
            'total' => $this->faker->randomFloat(2, 1, 10000),
            'date' => $this->faker->date(),
            'status' => $this->faker->randomElement(['Pending', 'Completed', 'Failed']),
            'created_at' => $this->faker->dateTimeThisYear(),
            'updated_at' => $this->faker->dateTimeThisYear(),
            'user_id' => $this->faker->randomElement($userIds),
            'product'=> $product,
        ];
    }
}
