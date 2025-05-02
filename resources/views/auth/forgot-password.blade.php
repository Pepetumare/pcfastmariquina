
@extends('layouts.app')
@section('title', 'Recuperar contraseña')

@section('content')
<div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow p-4" style="max-width: 500px; width: 100%; animation: fadeIn 0.4s ease-in;">
        <h4 class="mb-3 text-center">🔑 Recuperar contraseña</h4>

        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" name="email" id="email" class="form-control" required autofocus value="{{ old('email') }}">
                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <button type="submit" class="btn btn-primary w-100">Enviar enlace</button>

            <div class="text-center mt-3">
                <a href="{{ route('login') }}">Volver al inicio de sesión</a>
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
