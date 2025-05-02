@extends('layouts.app')
@section('title', 'Carrito de Compras')

@section('content')
    <h2 class="text-center fw-bold mb-4">🛒 Carrito de Compras</h2>

    <div class="table-responsive mb-4">
        <table class="table align-middle shadow-sm">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Producto</th>
                    <th scope="col">Precio unitario</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 1; $i <= 3; $i++)
                    @php
                        $precio = 19990 + ($i * 3000);
                        $cantidad = rand(1, 2);
                        $subtotal = $precio * $cantidad;
                    @endphp
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://via.placeholder.com/80x80?text=Producto+{{ $i }}" class="me-3 rounded" alt="Producto {{ $i }}">
                                <div>
                                    <strong>Producto #{{ $i }}</strong>
                                    <p class="mb-0 text-muted small">Descripción breve</p>
                                </div>
                            </div>
                        </td>
                        <td>${{ number_format($precio, 0, ',', '.') }}</td>
                        <td>
                            <input type="number" class="form-control form-control-sm w-50" value="{{ $cantidad }}" min="1">
                        </td>
                        <td>${{ number_format($subtotal, 0, ',', '.') }}</td>
                        <td>
                            <button class="btn btn-sm btn-outline-danger">Eliminar</button>
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>

    <div class="card shadow-sm">
        <div class="card-body d-flex justify-content-between align-items-center">
            <h4 class="fw-bold">Total: ${{ number_format(82970, 0, ',', '.') }}</h4>
            <a href="#" class="btn btn-success btn-lg">Finalizar Compra</a>
        </div>
    </div>
@endsection
