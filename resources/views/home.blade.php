@extends('layouts.app')
@section('title', 'Inicio')

@section('content')

    {{-- Componente del carrusel de banners --}}
    @include('components.banner')

    {{-- Productos destacados desde la base de datos --}}
    <h3 class="mb-4 fw-bold text-center">Productos Destacados</h3>
    <div class="row">
        @php $productos = \App\Models\Product::latest()->take(6)->get(); @endphp
        @foreach ($productos as $producto)
            @include('components.producto', [
                'id' => $producto->id,
                'nombre' => $producto->name,
                'descripcion' => $producto->description ?? 'Producto sin descripción',
                'precio' => number_format($producto->price, 0, ',', '.'),
                'imagen' => $producto->image ?? 'https://via.placeholder.com/400x300?text=Producto'
            ])
        @endforeach
    </div>

    {{-- Servicios técnicos reales --}}
    <h3 class="mt-5 mb-4 fw-bold text-center">Servicios Técnicos</h3>
    <div class="row">
        @php $servicios = \App\Models\Service::all(); @endphp
        @foreach ($servicios as $servicio)
            @include('components.servicio', [
                'titulo' => $servicio->name,
                'detalle' => $servicio->description ?? 'Solicita cotización en minutos.'
            ])
        @endforeach
    </div>

@endsection
