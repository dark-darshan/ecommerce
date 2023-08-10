<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AttributeValue;
use App\Models\Attribute;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function filterProductsView()
    {
        $attributes = Attribute::with('attributeValues')->get();
        return view('filter_products', compact('attributes'));
    }

    public function filterProducts(Request $request)
    {
        $attributeFilters = $request->except('_token');
        $query = Product::query();

        foreach ($attributeFilters as $attributeId => $values) {
            if (!empty($values)) {
                $query->whereHas('attributes', function ($query) use ($attributeId, $values) {
                    $query->whereIn('value_id', $values);
                });
            }
        }
        $filteredProducts = $query->get();
        return view('filtered_products', compact('filteredProducts')); 
    }
}
