<?php

namespace Database\Factories;
use App\Models\Product;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(3, true), // Generate a random name
            'price' => $this->faker->randomFloat(2, 10, 1000), // Generate a random price
            'description' => $this->faker->paragraph, // Generate a random description
        ];
    }
}
