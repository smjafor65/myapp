<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_name' => $this->faker->name(),
            'total' => $this->faker->randomFloat(2, 50, 5000),
            'payment_method' => $this->faker->randomElement([
                'cash', 'card', 'bkash', 'nagad', 'rocket'
            ]),
            'status' => $this->faker->randomElement([
                'pending', 'processing', 'completed', 'cancelled'
            ]),
            'order_date' => $this->faker->date(),
        ];
    }
}
