<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class AppointmentFactory extends Factory
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
            'id' => fake()->unique()->randomNumber(),
            'clientName' => fake()->name(),
            'symptoms' => fake()->sentence(),
            'animalAge' => fake()->numberBetween(1, 15),
            'assigned' => fake()->boolean(),
            'code' => fake()->uuid(),
            'requesterName' => fake()->name(),
            'requesterEmail' => fake()->safeEmail(),
            'animalName' => fake()->firstName(),
            'type' => fake()->randomElement(['dog', 'cat', 'bird', 'other']),
            'date' => fake()->date(),
            'shift' => fake()->randomElement(['morning', 'afternoon', 'evening'])
        ];
    }
}
