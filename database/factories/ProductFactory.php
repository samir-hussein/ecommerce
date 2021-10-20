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
            'name' => $this->faker->sentence(2),
            'desc' => $this->faker->sentence(10),
            'unit_price' => $this->faker->randomFloat(2, 20, 40),
            'sale_price' => $this->faker->randomFloat(2, 40, 60),
            'stock_status' => $this->faker->randomElement(['available','out of stock']),
            'quantity' => $this->faker->numberBetween(0,30),
            'rating' => $this->faker->randomFloat(2,0,5),
            'category_id' => $this->faker->randomElement(['1','2','3']),
            'subcategory_id' => $this->faker->randomElement([NULL,'2','3']),
            'seller_id' => $this->faker->randomElement(['1','2','3']),
        ];
    }
}
