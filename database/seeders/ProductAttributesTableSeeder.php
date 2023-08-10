<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductAttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Product 1
         $product1 = Product::find(1);
         $product1->attributes()->attach([
             1 => ['value_id' => 1], // Color: Red
             2 => ['value_id' => 4], // Size: XS
             3 => ['value_id' => 9], // Cover Type: Digital
         ]);
 
         // Product 2
         $product2 = Product::find(2);
         $product2->attributes()->attach([
             1 => ['value_id' => 2], // Color: Green
             2 => ['value_id' => 5], // Size: S
             3 => ['value_id' => 9], // Cover Type: Digital
         ]);
 
         // Product 3
         $product3 = Product::find(3);
         $product3->attributes()->attach([
             1 => ['value_id' => 3], // Color: Blue
             2 => ['value_id' => 6], // Size: M
             3 => ['value_id' => 10], // Cover Type: Physical
         ]);
 
         // Product 4
         $product4 = Product::find(4);
         $product4->attributes()->attach([
             1 => ['value_id' => 1], // Color: Red
             2 => ['value_id' => 7], // Size: S
             3 => ['value_id' => 10], // Cover Type: Physical
         ]);
    }
}
