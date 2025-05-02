@extends('layouts.app')
@section('title', 'Carrito de Compras')

@section('content')
    <h2 class="text-center fw-bold mb-4">🛒 Carrito de Compras</h2>

    @if(session('cart') && count(session('cart')))
        <div class="table-responsive mb-4">
            <table class="table align-middle shadow-sm">
                <thead class="table-dark">
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0; @endphp
                    @foreach($cart as $item)
                        @php
                            $subtotal = $item['price'] * $item['quantity'];
                            $total += $subtotal;
                        @endphp
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ $item['image'] }}" width="80" class="me-3 rounded">
                                    <div>
                                        <strong>{{ $item['name'] }}</strong>
                                    </div>
                                </div>
                            </td>
                            <td>${{ number_format($item['price'], 0, ',', '.') }}</td>
                            <td>
                                <form action="{{ route('cart.update', $item['id']) }}" method="POST" class="d-flex">
                                    @csrf
                                    <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" class="form-control form-control-sm w-50 me-2">
                                    <button class="btn btn-sm btn-outline-success">Actualizar</button>
                                </form>
                            </td>
                            <td>${{ number_format($subtotal, 0, ',', '.') }}</td>
                            <td>
                                <form action="{{ route('cart.remove', $item['id']) }}" method="POST">
                                    @csrf
                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card shadow-sm">
            <div class="card-body d-flex justify-content-between align-items-center">
                <h4 class="fw-bold">Total: ${{ number_format($total, 0, ',', '.') }}</h4>
                <a href="{{ route('checkout') }}" class="btn btn-success btn-lg">Finalizar Compra</a>
            </div>
        </div>
    @else
        <div class="alert alert-info text-center">
            Tu carrito está vacío. <a href="{{ route('tienda.index') }}">Ver productos</a>
        </div>
    @endif
@endsection
