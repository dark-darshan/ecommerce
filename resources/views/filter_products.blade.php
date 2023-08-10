@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <!-- Filter Checkboxes -->
        <div class="col-md-4 filter-container">
            <form id="filterForm">
                @foreach ($attributes as $attribute)
                    <h4>{{ $attribute->attribute_name }}</h4>
                    @foreach ($attribute->attributeValues as $value)
                        <div class="form-check">
                            <input type="checkbox" name="attribute_{{ $attribute->id }}[]"
                                value="{{ $value->id }}" class="form-check-input attribute-checkbox">
                            <label class="form-check-label">{{ $value->value_name }}</label>
                        </div>
                    @endforeach
                @endforeach
            </form>
        </div>
        
        <!-- Filtered Products -->
        <div class="col-md-8 filtered-products-container">
            <div id="filteredProducts">
                <!-- Filtered products will be displayed here -->
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('.attribute-checkbox').on('change', function () {
            updateFilteredProducts();
        });

        function updateFilteredProducts() {
            var formData = $('#filterForm').serialize();
            $.ajax({
                type: 'GET',
                url: '{{ route("filter.products") }}',
                data: formData,
                success: function (data) {
                    $('#filteredProducts').html(data);
                },
                error: function (error) {
                    console.log('Error:', error);
                }
            });
        }
        updateFilteredProducts();
    });
</script>
@endsection
