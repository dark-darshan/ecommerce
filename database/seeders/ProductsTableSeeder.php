<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'product_name' => 'T-Shirt 1',
            'product_description' => 'Description for T-Shirt 1',
        ]);

        Product::create([
            'product_name' => 'T-Shirt 2',
            'product_description' => 'Description for T-Shirt 2',
        ]);

        Product::create([
            'product_name' => 'Jeans',
            'product_description' => 'Description for Jeans',
        ]);

        Product::create([
            'product_name' => 'Hoodie',
            'product_description' => 'Description for Hoodie',
        ]);
    }
}
