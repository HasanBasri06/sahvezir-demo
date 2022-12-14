<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title" => fake()->sentence(),
            "slug" => fake()->unique()->slug(),
            "body" => fake()->text(),
            "references" => fake()->slug(),
            "image" => "images6.jpg",
            "author_id" => "1",
            "hits" => "44",
            "category_id" => fake()->numberBetween(1,7),
        ];
    }
}
