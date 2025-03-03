<?php

namespace Database\Seeders;

use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Administrator',
            'email' => 'admin@sblabbd.com',
            'password' => bcrypt('sblab@bd'),
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'Sankar Bala',
            'email' => 'sankarbala232@gmail.com',
            'password' => bcrypt('sblab@bd'),
            'email_verified_at' => now(),
        ]);

        $this->call([
            // CategorySeeder::class,
            // TagSeeder::class,
            // OptionSeeder::class,
            // FaqSeeder::class,
            // MessageSeeder::class,
            // DivisionSeeder::class,
            // ProductSeeder::class,
            // ArticleSeeder::class,
        ]);
    }
}
