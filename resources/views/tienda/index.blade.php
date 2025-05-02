@extends('layouts.app')
@section('title', 'Tienda')

@section('content')
    <h2 class="text-center mb-4 fw-bold">Catálogo de Productos</h2>

    <div class="row">
        <!-- Filtros laterales -->
        <div class="col-md-3 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Filtros</h5>

                    <form method="GET" action="{{ route('tienda.index') }}">
                        <div class="mb-3">
                            <label class="form-label">Categoría</label>
                            <select class="form-select" name="categoria" disabled>
                                <option value="">Todos</option>
                                <option>Audio</option>
                                <option>Accesorios</option>
                                <option>Componentes</option>
                                {{-- Opcional: conectar con la tabla de categorías --}}
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Precio máximo</label>
                            <input type="range" class="form-range" name="precio" min="10000" max="200000" step="5000" disabled>
                        </div>

                        <button class="btn btn-primary w-100" disabled>Aplicar</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Productos reales -->
        <div class="col-md-9">
            @php
                $productos = \App\Models\Product::paginate(9);
            @endphp

            <div class="row">
                @forelse ($productos as $producto)
                    @include('components.producto', [
                        'id' => $producto->id,
                        'nombre' => $producto->name,
                        'descripcion' => $producto->description ?? 'Descripción no disponible.',
                        'precio' => number_format($producto->price, 0, ',', '.'),
                        'imagen' => $producto->image ?? 'https://via.placeholder.com/400x300?text=Producto'
                    ])
                @empty
                    <div class="col-12">
                        <div class="alert alert-info text-center">No hay productos disponibles.</div>
                    </div>
                @endforelse
            </div>

            <div class="mt-4 d-flex justify-content-center">
                {{ $productos->links('vendor.pagination.bootstrap-5') }}
            </div>
        </div>
    </div>
@endsection
