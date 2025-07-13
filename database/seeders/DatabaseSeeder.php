<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $password = "password"; // Default password for the user

        User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'super-admin@gmails.com',
            'password' => bcrypt($password), // Encrypt the password
        ]);
    }
}
