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
            'heading' => $this->faker->sentence(4),
            'subheading' => $this->faker->sentence(10),
            'cover_img' => $this->faker->imageUrl($width = 200, $height = 200),
            'price' => $this->faker->numberBetween(25, 499),
            'description' => $this->faker->paragraph(),
        ];
    }
}
