<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotels>
 */
class HotelsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hotel_owner_id' => 2,
            'hotel_name' => fake()->name(),
            'location' => fake()->streetName(),
            'pricing' => fake()->numberBetween(200, 100000),
            'is_liked' => false,

        ];
    }
}
