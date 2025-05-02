@extends('layouts.admin')
@section('title', 'Cotizaciones')

@section('content')
    <h2 class="fw-bold mb-3">Cotizaciones Recibidas</h2>

    <table class="table table-bordered align-middle">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Servicio</th>
                <th>Mensaje</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 1; $i <= 3; $i++)
                <tr>
                    <td>Cliente {{ $i }}</td>
                    <td>cliente{{ $i }}@mail.com</td>
                    <td>Servicio #{{ $i }}</td>
                    <td>Mensaje de ejemplo corto...</td>
                    <td>
                        <a href="{{ route('admin.quotes.show', $i) }}" class="btn btn-sm btn-outline-info">Ver</a>
                    </td>
                </tr>
            @endfor
        </tbody>
    </table>
@endsection
