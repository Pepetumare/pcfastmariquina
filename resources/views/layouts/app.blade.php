
<!DOCTYPE html>
<html lang="es" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'PC Fast Mariquina')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        html, body {
            transition: background-color 0.3s, color 0.3s;
        }

        .navbar-brand img {
            height: 45px;
        }

        .nav-link {
            transition: color 0.3s;
        }

        .footer {
            background-color: #222;
            color: white;
            padding: 20px;
            margin-top: 60px;
            text-align: center;
        }

        .theme-toggle {
            cursor: pointer;
        }

        .object-fit-cover {
            object-fit: cover;
        }

        .btn {
            transition: background-color 0.2s, color 0.2s;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body border-bottom shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('logo/logo-light-transparent.png') }}" alt="PC Fast Mariquina">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Inicio</a></li>
                    <li class="nav-item"><a href="{{ route('tienda.index') }}" class="nav-link">Tienda</a></li>
                    <li class="nav-item"><a href="{{ route('servicios') }}" class="nav-link">Servicios</a></li>
                    <li class="nav-item"><a href="{{ route('nosotros') }}" class="nav-link">Nosotros</a></li>
                    <li class="nav-item"><a href="{{ route('contacto') }}" class="nav-link">Contacto</a></li>
                    <li class="nav-item"><a href="{{ route('carrito') }}" class="nav-link">🛒 Carrito</a></li>
                </ul>

                <div class="ms-3 d-flex gap-2 align-items-center">
                    <button class="btn btn-sm btn-outline-secondary theme-toggle" title="Modo oscuro">
                        <i class="bi bi-moon-stars-fill"></i>
                    </button>

                    @auth
                        @if(auth()->user()->role === 'admin')
                            <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-primary">Admin</a>
                        @endif
                        <a href="{{ route('cliente.perfil') }}" class="btn btn-outline-secondary">Mi perfil</a>
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button class="btn btn-danger">Cerrar sesión</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-dark">Iniciar sesión</a>
                        <a href="{{ route('register') }}" class="btn btn-primary">Registrarse</a>
                    @endauth
                </div>
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

    <script>
        const toggleBtn = document.querySelector('.theme-toggle');
        toggleBtn?.addEventListener('click', () => {
            const html = document.documentElement;
            const current = html.getAttribute('data-bs-theme');
            html.setAttribute('data-bs-theme', current === 'dark' ? 'light' : 'dark');
        });
    </script>
</body>

</html>
