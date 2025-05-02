
@extends('layouts.app')
@section('title', 'Inicio')

@section('content')
    {{-- Carrusel de banners --}}
    @include('components.banner')

    {{-- Sección de productos destacados --}}
    <section class="mt-5 mb-4">
        <h2 class="text-center fw-bold mb-4 fade-in">🔥 Productos Destacados</h2>
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
    </section>

    {{-- Sección de servicios técnicos --}}
    <section class="mt-5 mb-4">
        <h2 class="text-center fw-bold mb-4 fade-in">🛠️ Servicios Técnicos</h2>
        <div class="row">
            @php $servicios = \App\Models\Service::latest()->take(6)->get(); @endphp
            @foreach ($servicios as $servicio)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm service-card animate">
                        <div class="card-body">
                            <h5 class="card-title">{{ $servicio->name }}</h5>
                            <p class="card-text">{{ $servicio->description ?? 'Sin descripción' }}</p>
                            @if($servicio->estimated_price)
                                <p class="fw-bold text-primary">Desde ${{ number_format($servicio->estimated_price, 0, ',', '.') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <style>
        .fade-in {
            animation: fadeIn 0.6s ease-out both;
        }

        .animate {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .animate:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
@endsection
