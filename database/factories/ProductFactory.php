<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name"=> $this->faker->name(),
            "price"=> $this->faker->randomFloat(2,0,15),
            "description"=> $this->faker->text(20),
            "category_id"=> $this->faker->numberBetween(Category::min('id'), Category::max('id')),
        ];
    }
}
