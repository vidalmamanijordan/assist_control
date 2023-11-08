<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        User::create([
            'name' => 'Vidal Mamani Jordan',
            'email' => 'vidal_mamani@upeu.edu.pe',
            'password' => bcrypt('admin123')
        ]);

        /*User::factory(10)->create();*/
    }
}
