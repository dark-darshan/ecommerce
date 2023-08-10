<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>ECOMMERCE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
<style>
    .checkbox label {
        display: block;
        margin-bottom: 5px;
    }
    .container {
        background-color: #f8f9fa;
        padding-top: 20px;
    }

    .filter-container {
        background-color: #bdbdbd;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .filtered-products-container {
        background-color: #bdbdbd;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
</style>
</head>
<body>

@yield('content')

</body>
</html>
