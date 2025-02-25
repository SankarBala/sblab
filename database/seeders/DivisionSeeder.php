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
            ['name' =>  "S.B. Laboratories (Ayurvedic) Ltd.", 'slug' => 'ayurvedic', 'image' => "assets/images/sbl/divisions/ayurveda.jpg"],
            ['name' =>  "S.B. Herbal & Nutraceuticals.", 'slug' => 'herbal', 'image' => "assets/images/sbl/divisions/herbal.png"],
            ['name' =>  "S.B. Pharmaceuticals.", 'slug' => 'pharmaceuticals', 'image' => "assets/images/sbl/divisions/pharmaceuticals.jpg"],
            ['name' =>  "S.B. Pharmaceuticals (Veterinary).", 'slug' => 'veterinary', 'image' => "assets/images/sbl/divisions/veterinary.jpg"],
        ];

        foreach ($divisions as $division) {
            $newDivision = new Division();
            $newDivision->name = $division['name'];
            $newDivision->slug = Str::slug($division['slug']);
            $newDivision->image = $division['image'];
            $newDivision->save();
        }
    }
}
