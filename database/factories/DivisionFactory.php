<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Division>
 */
class DivisionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence(6, true);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'image' => $this->faker->optional()->imageUrl(640, 480, 'nature', true),
            'short_description' => $this->faker->optional()->sentence(10),
            'description' => $this->faker->optional()->paragraphs(3, true)
        ];
    }
}
