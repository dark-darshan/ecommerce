<h4>Products</h4>
@if ($filteredProducts->isEmpty())
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">No products match the selected filters.</h5>
        </div>
    </div>
@else
    <ul>
        @foreach ($filteredProducts as $product)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->product_name }}</h5>
                </div>
            </div>
        @endforeach
    </ul>
@endif
