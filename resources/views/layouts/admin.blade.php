<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin - PC Fast Mariquina')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark px-4">
        <a href="{{ route('admin.dashboard') }}" class="navbar-brand text-white">Admin - PC Fast Mariquina</a>
        <form method="POST" action="{{ route('logout') }}" class="d-flex ms-auto">
            @csrf
            <button class="btn btn-sm btn-outline-light">Cerrar sesión</button>
        </form>
    </nav>

    <div class="container py-4">
        @yield('content')
    </div>
</body>
</html>
