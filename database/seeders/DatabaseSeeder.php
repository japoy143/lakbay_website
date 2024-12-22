<?php

namespace Database\Seeders;

use App\Models\Hotels;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Hotels::factory()
            ->count(20)
            ->state(new Sequence(
                ['hotel_img' => 'Hotels/iphone1.jpg'],
                ['hotel_img' => 'Hotels/realme1.jpg'],
            ))
            ->create();
    }
}
