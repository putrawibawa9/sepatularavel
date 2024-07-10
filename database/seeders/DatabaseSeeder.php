<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Sepatu;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Sepatu::factory(25)->create();

    
    }
}
