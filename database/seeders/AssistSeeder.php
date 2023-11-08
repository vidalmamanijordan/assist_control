<?php

namespace Database\Seeders;

use App\Models\Assist;
use Database\Factories\AssistFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssistSeeder extends Seeder
{
    public function run(): void
    {
        Assist::factory(10)->create();
    }
}
