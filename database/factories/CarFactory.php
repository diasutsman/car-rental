<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Car ' . $this->faker->unique()->numberBetween(1, 100),
            'description' => $this->faker->text(),
            'category_id' => $this->faker->numberBetween(1, Category::count()),
            'color' => $this->faker->colorName(),
            'license_plate' => strtoupper($this->faker->bothify('?? #### ??')),
            'year' => $this->faker->year(),
            'tariff' => $this->faker->numberBetween(100000, 1000000),
            'doors' => $this->faker->randomElement([2, 4]),
            'luggages' => $this->faker->numberBetween(1, 5),
            'seats' => $this->faker->numberBetween(2, 4),
            'transmission' => $this->faker->randomElement(['manual', 'automatic']),
            'size' => $this->faker->randomElement(['small', 'medium', 'large']),
        ];
    }
}
