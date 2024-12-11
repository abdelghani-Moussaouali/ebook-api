<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $products = [
            [
                'categories_id' => 1,
                'name' => 'abdelghani',
                'description' => 'this the description of our products',
                'price' => 456,
                'stock' => 45,
                'image_url' => 'empty'
            ],
            [
                'categories_id' => 1,
                'name' => 'bakirmoussouali',
                'description' => 'this the description of our second products',
                'price' => 456,
                'stock' => 45,
                'image_url' => 'not empty'
            ],
        ];

     
          foreach ($products as $key => $value) {
            Product::create($value);
          }
        
    }
}
