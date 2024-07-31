<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        User::create(
            [
                'fullname' => 'Đỗ Hồng Quân',
                'username' => 'quandohong28',
                'email' => 'quandohong28@gmail.com',
                'password' => Hash::make('12345678'),
                'created_at' => $now,
                'updated_at' => $now
            ]
        );
        User::create(
            [
                'fullname' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'is_admin' => 1,
                'password' => Hash::make('12345678'),
                'created_at' => $now,
                'updated_at' => $now
            ],
        );
    }
}
