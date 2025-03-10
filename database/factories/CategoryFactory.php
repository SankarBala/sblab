<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'slug' => $this->faker->slug,
            'parent_id' => 0,
            'image' => $this->faker->imageUrl,
            'description' => $this->faker->paragraph,
            'order' => $this->faker->numberBetween(1, 5),
            'active' => $this->faker->boolean,
        ];
    }
}
