<?php

namespace Database\Seeders;

use App\Models\AttributeValue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Color attribute values
        AttributeValue::create(['attribute_id' => 1, 'value_name' => 'Red']);
        AttributeValue::create(['attribute_id' => 1, 'value_name' => 'Green']);
        AttributeValue::create(['attribute_id' => 1, 'value_name' => 'Blue']);

        // Size attribute values
        AttributeValue::create(['attribute_id' => 2, 'value_name' => 'XS']);
        AttributeValue::create(['attribute_id' => 2, 'value_name' => 'S']);
        AttributeValue::create(['attribute_id' => 2, 'value_name' => 'M']);
        AttributeValue::create(['attribute_id' => 2, 'value_name' => 'L']);
        AttributeValue::create(['attribute_id' => 2, 'value_name' => 'XL']);

        // Cover Type attribute values
        AttributeValue::create(['attribute_id' => 3, 'value_name' => 'Digital']);
        AttributeValue::create(['attribute_id' => 3, 'value_name' => 'Physical']);
    }
}
