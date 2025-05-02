@extends('layouts.admin')
@section('title', 'Órdenes')

@section('content')
    <h2 class="fw-bold mb-4">📋 Órdenes Recientes</h2>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Correo</th>
                <th>Comuna</th>
                <th>Total</th>
                <th>Fecha</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $o)
                <tr>
                    <td>#{{ $o->id }}</td>
                    <td>{{ $o->customer_name }}</td>
                    <td>{{ $o->customer_email }}</td>
                    <td>{{ $o->commune }}</td>
                    <td>${{ number_format($o->total, 0, ',', '.') }}</td>
                    <td>{{ $o->created_at->format('d/m/Y H:i') }}</td>
                    <td>
                        <a href="{{ route('admin.orders.show', $o) }}" class="btn btn-sm btn-info">Ver</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $orders->links() }}
@endsection
