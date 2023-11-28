<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
 */
class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->text(),
            'phone_number' => fake()->phoneNumber(),
            'image' => null,
            'city' => fake()->city(),
            'policies' => fake()->text(),
            'shipping' => fake()->text(),
            'payment_options' => fake()->randomElement(['visa', 'mastercard', 'paypal']),
            'cancellation' => fake()->text(),
            'returns' => fake()->text(),
        ];
    }
}

