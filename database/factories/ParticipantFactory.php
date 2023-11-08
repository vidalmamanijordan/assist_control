<?php

namespace Database\Factories;

use App\Models\Career;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParticipantFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word(20),
            'dni' => $this->faker->unique()->randomNumber(8, true),
            'code' => $this->faker->unique()->randomNumber(9, true),
            'phone' => $this->faker->unique()->randomNumber(9, true),
            'email' => $this->faker->unique()->safeEmail(),
            'status' => $this->faker->randomElement([0, 1]),
            'career_id' => Career::all()->random()->id
        ];
    }
}
