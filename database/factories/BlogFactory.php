<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text(20),
            'slug' => fake()->slug(),
            'author' => fake()->author(),
            'image' => fake()->imageUrl(),
            'category_id' => Category::inRandomOrder()->first()->id,
            'description' => fake()->text(),
        ];
    }
}
