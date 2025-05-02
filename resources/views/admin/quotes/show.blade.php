@extends('layouts.admin')
@section('title', 'Cotización')

@section('content')
    <h2 class="fw-bold mb-4">Detalle de Cotización</h2>

    <div class="card shadow-sm">
        <div class="card-body">
            <p><strong>Nombre:</strong> Cliente Ejemplo</p>
            <p><strong>Email:</strong> cliente@mail.com</p>
            <p><strong>Servicio:</strong> Instalación de cámaras</p>
            <p><strong>Mensaje:</strong> Hola, necesito una cotización para instalar cámaras en mi negocio.</p>
            <a href="{{ route('admin.quotes.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
@endsection
