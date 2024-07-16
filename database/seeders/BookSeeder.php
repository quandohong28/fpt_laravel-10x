<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = new Faker();

        for ($i = 0; $i < 10; $i++) {
            DB::table('books')->insert([
                'title' => $faker->create()->name,
                'thumbnail' => $faker->create()->imageUrl(),
                'author' => $faker->create()->name,
                'publisher' => $faker->create()->name,
                'publication' => '12/02/2023',
                'price' => rand(100000, 1000000),
                'quantity' => rand(0, 100),
                'category_id' => rand(0, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
