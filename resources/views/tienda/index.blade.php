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

                    <form>
                        <div class="mb-3">
                            <label class="form-label">Categoría</label>
                            <select class="form-select">
                                <option>Todos</option>
                                <option>Audio</option>
                                <option>Accesorios</option>
                                <option>Componentes</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Precio máximo</label>
                            <input type="range" class="form-range" min="10000" max="200000" step="5000">
                        </div>

                        <button class="btn btn-primary w-100">Aplicar</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Productos -->
        <div class="col-md-9">
            <div class="row">
                @for ($i = 0; $i < 9; $i++)
                    @include('components.producto', [
                        'id' => $i,
                        'nombre' => 'Producto #' . ($i + 1),
                        'descripcion' => 'Este es un excelente producto para ti.',
                        'precio' => number_format(19990 + rand(0, 20000), 0, ',', '.'),
                        'imagen' => 'https://via.placeholder.com/400x300?text=Producto+' . ($i + 1),
                    ])
                @endfor
            </div>
        </div>
    </div>
@endsection
