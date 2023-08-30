<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shayan Solutions</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Include any additional CSS or meta tags you need -->
</head>
<body>

<header>
    <nav class="navbar">
        <div class="container">
            <a href="{{ route('products.index') }}" class="navbar-logo">Shayan Solutions</a>
            <ul class="navbar-menu">
                <li><a href="{{ route('products.index') }}">Products</a></li>
                <li><a href="{{ route('products.create') }}">Add Products</a></li>
                <!-- Add more navigation links as needed -->
            </ul>
        </div>
    </nav>
</header>

<main class="container">
    @yield('content')
</main>

<footer class="footer">
    <div class="container">
        &copy; {{ date('Y') }} Shayan Solutions. All rights reserved.
    </div>
</footer>

<!-- Include any JavaScript or footer content you need -->

</body>
</html>
