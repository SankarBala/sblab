<?php

namespace Database\Seeders;

use App\Models\Division;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $divisions = [
            ['name' =>  "S.B. Laboratories (Ayurvedic) Ltd.", 'slug' => 'ayurvedic', 'image' => "assets/images/sbl/divisions/ayurveda.jpg", "description" => "This is demo description just for placeholder. When you create create new division this will be replaced automitically."],
            ['name' =>  "S.B. Herbal & Nutraceuticals.", 'slug' => 'herbal', 'image' => "assets/images/sbl/divisions/herbal.png", "description" => "This is demo description just for placeholder. When you create create new division this will be replaced automitically."],
            ['name' =>  "S.B. Pharmaceuticals.", 'slug' => 'pharmaceuticals', 'image' => "assets/images/sbl/divisions/pharmaceuticals.jpg", "description" => "This is demo description just for placeholder. When you create create new division this will be replaced automitically."],
            ['name' =>  "S.B. Pharmaceuticals (Veterinary).", 'slug' => 'veterinary', 'image' => "assets/images/sbl/divisions/veterinary.jpg", "description" => "This is demo description just for placeholder. When you create create new division this will be replaced automitically."],
        ];

        foreach ($divisions as $division) {
            $newDivision = new Division();
            $newDivision->name = $division['name'];
            $newDivision->slug = Str::slug($division['slug']);
            $newDivision->image = $division['image'];
            $newDivision->description = $division['description'];
            $newDivision->save();
        }
    }
}
