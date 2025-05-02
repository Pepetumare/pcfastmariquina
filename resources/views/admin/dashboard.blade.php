@extends('layouts.admin')
@section('title', 'Panel de Control')

@section('content')
    <h2 class="mb-4 fw-bold">Panel de Administración</h2>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card border-start border-4 border-primary shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Productos</h5>
                    <p class="card-text">Administra los productos de la tienda.</p>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-outline-primary">Ver productos</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-start border-4 border-success shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Servicios</h5>
                    <p class="card-text">Edita los servicios informáticos ofrecidos.</p>
                    <a href="#" class="btn btn-outline-success">Ver servicios</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-start border-4 border-warning shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Cotizaciones</h5>
                    <p class="card-text">Revisa y responde las solicitudes de los clientes.</p>
                    <a href="#" class="btn btn-outline-warning">Ver cotizaciones</a>
                </div>
            </div>
        </div>
    </div>
@endsection
