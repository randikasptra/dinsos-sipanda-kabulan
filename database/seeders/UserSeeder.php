<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
/*************  ✨ Windsurf Command 🌟  *************/
    public function run(): void
    {
        // Admin
        User::create([
            'name' => 'Admin SIPANDAKABULAN',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // password default
            'role' => 'admin',
        ]);

        // Operator
        User::create([
            'name' => 'Operator Kabupaten Tasikmalaya',
            'email' => 'operator@example.com',
            'password' => Hash::make('password'),
            'role' => 'operator',
        ]);
    }
/*******  0c88fe3b-5498-42d9-b5bf-a2ffeb5866e5  *******/
}
