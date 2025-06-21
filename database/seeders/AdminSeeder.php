<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['name' => 'admin'], // login with this username 
            [
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'), // still required by default, but unused
                'email_verified_at' => now(),
                'role' => 'admin',
            ]
        );
    }
}
