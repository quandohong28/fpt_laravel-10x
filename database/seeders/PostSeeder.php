<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            DB::table('posts')->insert([
                'title' => $faker->title,
                'content' => $faker->paragraph,
                'imageUrl' => $faker->imageUrl,
                'description' => $faker->sentence,
                'view_count' => rand(1, 1000),
                'category_id' => rand(1, 4),
            ]);
        }
    }
}
