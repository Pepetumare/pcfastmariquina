@extends('layouts.app')
@section('title', 'Mis pedidos')

@section('content')
    <h2 class="fw-bold mb-4">📦 Mis pedidos</h2>

    @forelse ($orders as $order)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="mb-2">Pedido #{{ $order->id }} – {{ ucfirst($order->status) }}</h5>
                <p>Total: ${{ number_format($order->total, 0, ',', '.') }}</p>
                <p>Fecha: {{ $order->created_at->format('d/m/Y H:i') }}</p>
            </div>
        </div>
    @empty
        <p>No tienes pedidos aún.</p>
    @endforelse
@endsection
