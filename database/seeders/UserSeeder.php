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
            'dni' => '47349709',
            'phone' => '945257563',
            'email' => 'vidal_mamani@upeu.edu.pe',
            'password' => bcrypt('admin123')
        ]);

        User::factory(10)->create();
    }
}
