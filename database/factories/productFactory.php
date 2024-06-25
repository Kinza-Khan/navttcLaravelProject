<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = [1, 2, 3,4];
        $images = [
            'images/shop/1.jpg',
            'images/shop/2.jpg',
            'images/shop/3.jpg',
            'images/shop/4.jpg',
            'images/shop/5.jpg',
            'images/shop/6.jpg',
        ];
        $randomImages = fake()->randomElements($images, fake()->numberBetween(1, 6));
        return [
            'name' => fake()->name(),
            'description' => fake()->paragraph(),
            'price' => fake()->numberBetween(1000, 9000),
            'quantity' => fake()->numberBetween(50, 500),
            'category' => fake()->randomElement($categories),
            'pictures' => json_encode($randomImages),
        ];
    }
}
