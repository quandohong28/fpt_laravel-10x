<?php

namespace Database\Seeders;

use App\Models\Hastag;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HastagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        for ($i = 1; $i <= 10; $i++) {
            Hastag::create([
                'name' => $faker->word,
                'slug' => $faker->slug,
            ]);
        }
    }
}
