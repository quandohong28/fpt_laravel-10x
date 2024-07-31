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
        User::create([
            'fullname' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
            'avatar' => 'admin.jpg',
            'is_admin' => 1,
            'is_active' => 0,
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        User::create([
            'fullname' => 'Đỗ Hồng Quân',
            'username' => 'quandohong28',
            'email' => 'quandohong28@gmail.com',
            'password' => Hash::make('12345678'),
            'avatar' => 'quandohong28.jpg',
            'is_admin' => 0,
            'is_active' => 0,
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
}
