@extends('layouts.app')
@section('title', 'Seguimiento de Pedido')

@section('content')
    <h2 class="mb-4 fw-bold text-center">📦 Seguimiento de Pedido</h2>

    <form action="{{ route('tracking.check') }}" method="POST" class="w-100" style="max-width: 500px; margin: 0 auto;">
        @csrf
        <div class="mb-3">
            <label>Correo electrónico</label>
            <input type="email" name="email" class="form-control" required placeholder="ejemplo@mail.com">
        </div>
        <button class="btn btn-primary w-100">Ver mis pedidos</button>
    </form>
@endsection
