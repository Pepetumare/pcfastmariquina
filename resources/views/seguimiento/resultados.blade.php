@extends('layouts.app')
@section('title', 'Resultados de Seguimiento')

@section('content')
    <h2 class="mb-4 fw-bold text-center">🧾 Tus Pedidos</h2>

    @forelse ($orders as $order)
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Orden #{{ $order->id }}</h5>
                <p><strong>Estado:</strong> {{ ucfirst($order->status) }}</p>
                <p><strong>Dirección:</strong> {{ $order->address }} ({{ $order->commune }})</p>
                <p><strong>Total:</strong> ${{ number_format($order->total, 0, ',', '.') }}</p>
                <p><strong>Fecha:</strong> {{ $order->created_at->format('d/m/Y H:i') }}</p>
            </div>
        </div>
    @empty
        <div class="alert alert-info text-center">No se encontraron pedidos para ese correo.</div>
    @endforelse
@endsection
