<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $userData = [
            [
                'username' => 'admin',
                'role' => 'admin',
                'password' => Hash::make('12345678')
            ],

        ];

        foreach ($userData as $user) {
            User::create($user);
        }
    }
}