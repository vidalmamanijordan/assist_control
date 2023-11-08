<?php

namespace Database\Factories;

use App\Models\Sede;
use Illuminate\Database\Eloquent\Factories\Factory;

class FacultyFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word(20),
            'description' => $this->faker->text(500),
            'sede_id' => Sede::all()->random()->id,
        ];
    }
}
