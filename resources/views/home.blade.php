@extends('layouts.app')
@section('title', 'Inicio')

@section('content')

    @include('components.banner')

    <h3 class="mb-4 fw-bold text-center">Productos Destacados</h3>
    <div class="row">
        @for ($i = 0; $i < 3; $i++)
            @include('components.producto', [
                'nombre' => 'Audífonos Gamer X' . $i,
                'descripcion' => 'Calidad superior, bajos potentes.',
                'precio' => number_format(24990 + ($i * 5000), 0, ',', '.'),
                'imagen' => 'https://via.placeholder.com/400x300?text=Producto+' . ($i+1)
            ])
        @endfor
    </div>

    <h3 class="mt-5 mb-4 fw-bold text-center">Servicios Técnicos</h3>
    <div class="row">
        @foreach ([
            'Formateo e instalación de Windows',
            'Reparación de notebooks y PC',
            'Instalación de cámaras de seguridad'
        ] as $servicio)
            @include('components.servicio', ['titulo' => $servicio, 'detalle' => 'Solicita cotización en minutos.'])
        @endforeach
    </div>

@endsection
