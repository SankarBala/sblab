<?php

namespace Database\Seeders;

use App\Models\Option;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $options = [
            ["key" => "phone", "value" => "+880-1855000777"],
            ["key" => "email", "value" => "sblabbd@yahoo.com"],
            ["key" => "address", "value" => "Rupayan FPAB Tower, 02 Paltan, Dhaka-1000"],
        ];

        Option::insert($options);
    }
}
