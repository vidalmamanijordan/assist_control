<?php

namespace Database\Seeders;

use App\Models\Participant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call(UserSeeder::class);
        /*$this->call(EventSeeder::class);
        $this->call(SedeSeeder::class);
        $this->call(FacultySeeder::class);
        $this->call(CareerSeeder::class);
        $this->call(ParticipantSeeder::class);
        $this->call(AssistSeeder::class);*/
    }
}
