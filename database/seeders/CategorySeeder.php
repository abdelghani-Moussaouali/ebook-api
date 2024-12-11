<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'id'=>1,
                'name' => 'category1',
                'description' => 'this the description of our first category',
            ],
            [
                'id'=>2,
                'name' => 'category2',
                'description' => 'this the description of our second category',
            ],


        ];
        foreach ($categories as $key => $value) {
            Category::create($value);
        }
    }
}
