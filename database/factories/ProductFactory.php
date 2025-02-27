<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tags = Tag::all()->pluck('id')->toArray();  // Retrieve all tag IDs

        return [
            'name' => $this->faker->sentence(),
            'slug' => $this->faker->slug,
            'short_description' => $this->faker->paragraph(5),
            'description' => $this->faker->text(3000),
            'price' => $this->faker->randomFloat(2, 20, 400),
            'image' => $this->faker->imageUrl,
            'published' => $this->faker->boolean,
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function ($product) {
            $tags = Tag::inRandomOrder()->take(5)->pluck('id');
            $product->tags()->attach($tags);
        });
    }
}
