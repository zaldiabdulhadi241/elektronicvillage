<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'nama' => 'Zaldi Abdul Hadi',
            'username' => 'zaldiabdulhadi',
            'email' => 'zaldiabdulhadi12@gmail.com',
            'password' => 'kompos000',
            'role' => 'admin',
        ]);
    }
}
