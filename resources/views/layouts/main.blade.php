<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Menggunakan Bootstrap versi 4.5.2 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <header>
        <!-- Memanggil header layout -->
        @include('layouts.header')
    </header>
    <!-- Memanggil navigation layout -->
    @include('layouts.nav')

    <div class="container mt-4">
        <!-- Tempat konten dinamis -->
        @yield('content')
    </div>

    <footer class="mt-4">
        <!-- Memanggil footer layout -->
        @include('layouts.footer')
    </footer>

    <!-- Script untuk Bootstrap versi 5.2.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"></script>
</body>
</html>
