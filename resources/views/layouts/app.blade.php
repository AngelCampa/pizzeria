<!DOCTYPE html>
<html>
<head>
    <title>Laravel Pizza App</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Pizza App</a>
        <!-- Agrega aquí la barra de navegación si es necesario -->
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
