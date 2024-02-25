<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Test User',
            'email' => 'user@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Test Admin',
            'email' => 'admin@example.com',
            'admin' => true,
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);
    }
}
