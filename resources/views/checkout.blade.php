@extends('layouts.app')
@section('title', 'Finalizar Compra')

@section('content')
    <h2 class="text-center fw-bold mb-4">🧾 Finalizar Compra</h2>

    @if(session('cart') && count(session('cart')))
    <form action="{{ route('checkout.mp') }}" method="POST">
        @csrf

        <div class="row">
            <!-- Datos del cliente -->
            <div class="col-md-7 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="mb-3">Datos del Cliente</h5>

                        <div class="mb-3">
                            <label>Nombre completo</label>
                            <input type="text" name="customer_name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Correo electrónico</label>
                            <input type="email" name="customer_email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Teléfono</label>
                            <input type="tel" name="customer_phone" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Dirección</label>
                            <input type="text" name="address" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Comuna</label>
                            <input type="text" name="commune" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Resumen del pedido -->
            <div class="col-md-5 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="mb-3">Resumen del Pedido</h5>

                        @php $total = 0; @endphp
                        @foreach ($cart as $item)
                            @php
                                $subtotal = $item['price'] * $item['quantity'];
                                $total += $subtotal;
                            @endphp
                            <div class="d-flex justify-content-between mb-2">
                                <span>{{ $item['name'] }} x {{ $item['quantity'] }}</span>
                                <span>${{ number_format($subtotal, 0, ',', '.') }}</span>
                            </div>
                        @endforeach

                        <hr>
                        <div class="d-flex justify-content-between fw-bold mb-3">
                            <span>Total</span>
                            <span>${{ number_format($total, 0, ',', '.') }}</span>
                        </div>

                        <form action="{{ route('checkout.mp') }}" method="POST">
                            @csrf
                            <button class="btn btn-success w-100 btn-lg">Pagar con Mercado Pago</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </form>
    @else
        <div class="alert alert-info text-center">
            Tu carrito está vacío. <a href="{{ route('tienda.index') }}">Ir a la tienda</a>
        </div>
    @endif
@endsection
