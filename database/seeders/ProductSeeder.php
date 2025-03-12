<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Product::factory()->count(30)->create();

        $this->insertProducts();
    }



    public function insertProducts()
    {
        $file = database_path('seeders/data/products.csv');
        $handle = fopen($file, "r");
        $header = fgetcsv($handle);
        $header[0] = preg_replace('/\x{FEFF}/u', '', $header[0]);

        $faker = Faker::create();

        while (($row = fgetcsv($handle)) !== false) {
            $data = array_combine($header, $row);

            $product = new Product();
            $product->name = $data['name'];
            $product->slug = $this->generateSlug($data['name']);
            $product->short_description = $data['short_description'];
            $product->description = $faker->sentence(300);
            $product->image = $data['images'];
            $categories = explode(',', $data['categories']);
            $categoryIds = [];
            $product->save();

            foreach ($categories as $categoryName) {
                $category = \App\Models\Category::firstOrCreate(['name' => trim($categoryName), 'slug' => $this->generateSlug($categoryName)]);
                $categoryIds[] = $category->id;
            }

            $product->categories()->attach($categoryIds);
            $product->save();
        }

        fclose($handle);
    }

    public function generateSlug(string $name): string
    {
        $words = explode(' ', $name);
        $limitedWords = array_slice($words, 0, 10); // Keep only the first 8 words
        $slug = Str::slug(implode(' ', $limitedWords));

        $count = Product::where('slug', $slug)->count();
        if ($count > 0) {
            $slug .= '-' . ($count + 1);
        }
        return $slug;
    }
}
