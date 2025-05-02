@extends('layouts.admin')
@section('title', 'Productos')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fw-bold">Productos</h2>
        <a href="{{ route('admin.products.create') }}" class="btn btn-primary">+ Nuevo Producto</a>
    </div>

    <table class="table table-hover table-bordered align-middle">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 1; $i <= 5; $i++)
                <tr>
                    <td>Producto #{{ $i }}</td>
                    <td>Audio</td>
                    <td>${{ number_format(14990 + $i * 2000, 0, ',', '.') }}</td>
                    <td>{{ 10 + $i }}</td>
                    <td>
                        <a href="{{ route('admin.products.edit', $i) }}" class="btn btn-sm btn-warning">Editar</a>
                        <button class="btn btn-sm btn-danger">Eliminar</button>
                    </td>
                </tr>
            @endfor
        </tbody>
    </table>
@endsection
