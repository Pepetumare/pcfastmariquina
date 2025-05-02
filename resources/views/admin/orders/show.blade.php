@extends('layouts.admin')
@section('title', 'Detalle de Orden')

@section('content')
    <h2 class="fw-bold mb-4">🧾 Detalle de la Orden #{{ $order->id }}</h2>

    <div class="mb-4">
        <p><strong>Nombre:</strong> {{ $order->customer_name }}</p>
        <p><strong>Email:</strong> {{ $order->customer_email }}</p>
        <p><strong>Teléfono:</strong> {{ $order->customer_phone }}</p>
        <p><strong>Dirección:</strong> {{ $order->address }}</p>
        <p><strong>Comuna:</strong> {{ $order->commune }}</p>
    </div>

    <h5>🛒 Productos Comprados:</h5>
    <table class="table table-sm table-bordered">
        <thead class="table-secondary">
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->items as $item)
                <tr>
                    <td>{{ $item->product_name }}</td>
                    <td>${{ number_format($item->price, 0, ',', '.') }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>${{ number_format($item->price * $item->quantity, 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-end fw-bold mt-3">
        Total: ${{ number_format($order->total, 0, ',', '.') }}
    </div>
@endsection
