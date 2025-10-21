<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a default admin user (if not already exists)
        User::updateOrCreate(
            ['email' => 'admin@gmail.com'], // condition
            [
                'name' => 'Admin',
                'password' => Hash::make('12345678'), // default password
            ]
        );
    }
}

