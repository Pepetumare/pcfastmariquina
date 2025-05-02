<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'PC Fast Mariquina')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilo personalizado (puedes crear tu propio archivo si deseas) -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar-brand {
            font-weight: bold;
            color: #96B1C0;
        }

        .nav-link {
            color: #333 !important;
        }

        .footer {
            background-color: #222;
            color: white;
            padding: 20px;
            margin-top: 60px;
            text-align: center;
        }

        .object-fit-cover {
            object-fit: cover;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white border-bottom shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('logo/logo-light-transparent.png') }}" alt="Logo PC Fast Mariquina"
                    style="height: 50px; width: auto;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Inicio</a></li>
                    <li class="nav-item"><a href="{{ route('tienda.index') }}" class="nav-link">Tienda</a></li>
                    <li class="nav-item"><a href="{{ route('servicios') }}" class="nav-link">Servicios</a></li>
                    <li class="nav-item"><a href="{{ route('nosotros') }}" class="nav-link">Nosotros</a></li>
                    <li class="nav-item"><a href="{{ route('contacto') }}" class="nav-link">Contacto</a></li>
                    <li class="nav-item"><a href="{{ route('carrito') }}" class="nav-link">🛒 Carrito</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-4">
        @yield('content')
    </div>

    <footer class="footer">
        <p>© {{ date('Y') }} PC Fast Mariquina - Todos los derechos reservados</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
