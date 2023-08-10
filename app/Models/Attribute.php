<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

    protected $fillable = ['attribute_name'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_attributes')->withPivot('value_id');
    }

    public function attributeValues()
    {
        return $this->hasMany(AttributeValue::class);
    }
}
