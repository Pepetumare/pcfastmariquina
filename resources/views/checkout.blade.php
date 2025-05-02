@extends('layouts.app')
@section('title', 'Finalizar Compra')

@section('content')
    <h2 class="text-center fw-bold mb-4">🧾 Finalizar Compra</h2>

    <div class="row">
        <!-- Formulario de datos -->
        <div class="col-md-7 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="mb-3">Datos del Cliente</h5>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Nombre completo</label>
                            <input type="text" class="form-control" placeholder="Juan Pérez">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" placeholder="correo@ejemplo.cl">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Teléfono</label>
                            <input type="tel" class="form-control" placeholder="+56 9 1234 5678">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Dirección</label>
                            <input type="text" class="form-control" placeholder="Calle Falsa 123, Villa Esperanza">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Comuna</label>
                            <select class="form-select">
                                <option selected disabled>Selecciona tu comuna</option>
                                <option>San José de la Mariquina</option>
                                <option>Valdivia</option>
                                <option>Temuco</option>
                                <option>Santiago</option>
                                <!-- Aquí se llenará desde BD a futuro -->
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Resumen de compra -->
        <div class="col-md-5 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="mb-3">Resumen del Pedido</h5>

                    @foreach ([1, 2, 3] as $i)
                        <div class="d-flex justify-content-between mb-2">
                            <span>Producto #{{ $i }}</span>
                            <span>${{ number_format(14990 + $i * 3000, 0, ',', '.') }}</span>
                        </div>
                    @endforeach

                    <hr>
                    <div class="d-flex justify-content-between fw-bold mb-3">
                        <span>Total</span>
                        <span>$47.980</span>
                    </div>

                    <a href="#" class="btn btn-success w-100 btn-lg">Pagar con Mercado Pago</a>
                </div>
            </div>
        </div>
    </div>
@endsection
