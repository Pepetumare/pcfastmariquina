
@extends('layouts.app')
@section('title', 'Tienda')

@section('content')
    <h2 class="text-center fw-bold mb-4 fade-in">🛍️ Catálogo de Productos</h2>

    <div class="row">
        <!-- Filtros laterales -->
        <div class="col-md-3 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">🔎 Filtrar productos</h5>

                    <form method="GET" action="{{ route('tienda.index') }}">
                        <div class="mb-3">
                            <label class="form-label">Categoría</label>
                            <select class="form-select" name="categoria" disabled>
                                <option value="">Todos</option>
                                <option>Audio</option>
                                <option>Accesorios</option>
                                <option>Componentes</option>
                                {{-- Conectar a tabla real de categorías en el futuro --}}
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Precio máximo</label>
                            <input type="number" class="form-control" name="precio_max" placeholder="$50.000" disabled>
                        </div>

                        <button class="btn btn-outline-secondary w-100" disabled>Aplicar filtros</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Productos -->
        <div class="col-md-9">
            @php
                $productos = \App\Models\Product::paginate(9);
            @endphp

            <div class="row">
                @forelse ($productos as $producto)
                    @include('components.producto', [
                        'id' => $producto->id,
                        'nombre' => $producto->name,
                        'descripcion' => $producto->description ?? 'Producto sin descripción',
                        'precio' => number_format($producto->price, 0, ',', '.'),
                        'imagen' => $producto->image ?? 'https://via.placeholder.com/400x300?text=Producto'
                    ])
                @empty
                    <div class="col-12">
                        <div class="alert alert-warning text-center">No hay productos disponibles.</div>
                    </div>
                @endforelse
            </div>

            <div class="mt-4">
                {{ $productos->links() }}
            </div>
        </div>
    </div>

    <style>
        .fade-in {
            animation: fadeIn 0.6s ease-out both;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
@endsection
