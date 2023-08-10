<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Attribute::create(['attribute_name' => 'Color']);
        Attribute::create(['attribute_name' => 'Size']);
        Attribute::create(['attribute_name' => 'Cover Type']);
    }
}
