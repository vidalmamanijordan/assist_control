<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\Participant;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AssistFactory extends Factory
{
    public function definition(): array
    {
        return [
            /* 'date' => $this->faker->dateTime(), */
            /* 'hour' => $this->faker->time(), */
            'user_id' => User::all()->random()->id,
            'event_id' => Event::all()->random()->id,
            'participant_id' => Participant::all()->random()->id
        ];
    }
}
