<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call(CategorySeeder::class);
        Category::factory()->count(02)->create();
        Product::factory()->count(10)->create();
        // Product::factory()->create();
        // $this->call(CategorySeeder::class);

        

    }
}
