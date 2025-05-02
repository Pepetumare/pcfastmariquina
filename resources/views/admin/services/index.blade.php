@extends('layouts.admin')
@section('title', 'Servicios Informáticos')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fw-bold">Servicios Informáticos</h2>
        <a href="{{ route('admin.services.create') }}" class="btn btn-primary">+ Nuevo Servicio</a>
    </div>

    <table class="table table-bordered align-middle">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio estimado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 1; $i <= 4; $i++)
                <tr>
                    <td>Servicio #{{ $i }}</td>
                    <td>Descripción breve del servicio #{{ $i }}</td>
                    <td>${{ number_format(19990 + $i * 3000, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('admin.services.edit', $i) }}" class="btn btn-sm btn-warning">Editar</a>
                        <button class="btn btn-sm btn-danger">Eliminar</button>
                    </td>
                </tr>
            @endfor
        </tbody>
    </table>
@endsection
