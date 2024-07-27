<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $now  = now();
        return [
            'title' => $this->faker->sentence(3),
            'poster' => $this->faker->name,
            'intro' => $this->faker->imageUrl(),
            'release_date' => $this->faker->date(),
            'genre_id' => rand(1, 5),
            'created_at' => $now,
            'updated_at' => $now,

        ];
    }
}
