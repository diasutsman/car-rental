<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('password'),
        ]);

        $carTypes = [
            'SUV', 'Sedan', 'Hatchback', 'Sports car', 'Coupe', 'Convertible', 'Crossover', 'Minivan', 'Luxury car', 'Station Wagon', 'Roadster', 'Full-size car', 'Executive car', 'Compact MPV', 'Pony car', 'Microcar'
    ];

        foreach ($carTypes as $carType) {
            Category::create([
                'name' => $carType,
            ]);
        }

        \App\Models\Car::factory(10)->create();
    }
}
