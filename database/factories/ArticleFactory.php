<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(),
            'slug' => $this->faker->slug,
            'short_description' => $this->faker->paragraph(5),
            'description' => $this->faker->text(3000),
            'image' => $this->faker->imageUrl,
            'published' => $this->faker->numberBetween(0, 1),
        ];
    }
}
