<?php

namespace Database\Factories;

use App\Models\Faculty;
use Illuminate\Database\Eloquent\Factories\Factory;

class CareerFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word(20),
            'description' => $this->faker->text(300),
            'faculty_id' => Faculty::all()->random()->id
        ];
    }
}
