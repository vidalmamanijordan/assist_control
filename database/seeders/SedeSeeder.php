<?php

namespace Database\Seeders;

use App\Models\Sede;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SedeSeeder extends Seeder
{
    public function run(): void
    {
        Sede::create([
            'name' => 'Lima',
            'description' => 'Sede principal de la Universidad Peruana Unión'
        ]);

        Sede::create([
            'name' => 'Juliaca',
            'description' => 'Sede del sur del Perú de la Universidad Peruana Unión'
        ]);

        Sede::create([
            'name' => 'Tarapoto',
            'description' => 'Sede del oriente del Perú de la Universidad Peruana Unión'
        ]);
    }
}
