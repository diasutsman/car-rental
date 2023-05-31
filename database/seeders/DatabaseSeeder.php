<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Exception;
use App\Models\Car;
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

        \App\Models\User::create([
            'username' => 'user1',
            'email' => 'user1@gmail.com',
            'role' => 'customer',
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

        try {
            $path = "storage/app/public/car-images/";
            $images = collect();
            if ($handle = opendir($path)) {
                while (false !== ($file = readdir($handle))) {
                    if ('.' === $file) continue;
                    if ('..' === $file) continue;
                    $filename = 'car-images/' . $file;
                    $images->push($file);

                    Car::factory(1)->create([
                        'photo' => $filename,
                    ]);
                    
                }
                closedir($handle);
            }
        } catch (Exception $e) {
            Car::factory(10)->create();
        }
    }
}
