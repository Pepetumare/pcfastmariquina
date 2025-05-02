
@extends('layouts.app')
@section('title', 'Iniciar sesión')

@section('content')
<div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg p-4" style="max-width: 420px; width: 100%; animation: fadeIn 0.4s ease-in;">
        <h4 class="mb-4 text-center">🔐 Iniciar sesión</h4>

        @if (session('status'))
            <div class="alert alert-info">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input id="password" type="password" class="form-control" name="password" required>
                @error('password') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3 form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                <label class="form-check-label" for="remember">Recuérdame</label>
            </div>

            <button type="submit" class="btn btn-primary w-100">Ingresar</button>

            <div class="text-center mt-3">
                <a href="{{ route('register') }}">¿No tienes cuenta? Regístrate</a>
            </div>
        </form>
    </div>
</div>

<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
@endsection
