<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        Event::create([
            'name' => 'Jornada Académica',
            'description' => 'jornada-academica',
        ]);

        Event::create([
            'name' => 'Simposio Creacionismo',
            'description' => 'simposio-creacionismo',
        ]);
    }
}
