<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        for ($i = 1; $i <= 10; $i++) {
            Post::create([
                'title' => $faker->sentence,
                'slug' => $faker->slug,
                'image' => $faker->imageUrl(),
                'content' => $faker->paragraph,
                'image_caption' => $faker->sentence,
                'publication' => $faker->date,
                'publisher' => $faker->name,
                'is_active' => rand(0, 1),
                'is_featured' => rand(0, 1),
                'view' => rand(300, 99999),
                'like' => rand(300, 99999),
                'category_id' => rand(1, 10),
                'hastag_id' => rand(1, 10),
            ]);
        }
    }
}
