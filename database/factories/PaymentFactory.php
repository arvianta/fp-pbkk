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
        return [
            'id' => $this->faker->uuid,
            'method' => $this->faker->randomElement(['Credit Card', 'PayPal', 'Bank Transfer']),
            'total' => $this->faker->randomFloat(2, 1, 10000),
            'date' => $this->faker->date(),
            'status' => $this->faker->randomElement(['Pending', 'Completed', 'Failed']),
            'created_at' => $this->faker->dateTimeThisYear(),
            'updated_at' => $this->faker->dateTimeThisYear(),
        ];
    }
}
