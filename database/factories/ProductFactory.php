<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
  
   
    public function definition()
    {
        return [
            'categories_id' => $this->faker->numberBetween(1,5),
            'name' => $this->faker->unique()->name(),
            'description' => $this->faker->realText(),
            'price' => $this->faker->numberBetween(0,9999),
            'stock' => $this->faker->numberBetween(1,9999),
            'image_url' => $this->faker->imageUrl(640,480)
        ];
    }
}


