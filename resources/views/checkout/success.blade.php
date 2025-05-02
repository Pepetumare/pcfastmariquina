@extends('layouts.app')
@section('title', 'Pago Exitoso')

@section('content')
    <div class="alert alert-success text-center my-5">
        <h2 class="fw-bold">✅ ¡Gracias por tu compra!</h2>
        <p>Tu pago fue aprobado y procesado con éxito.</p>
        <a href="{{ route('home') }}" class="btn btn-primary mt-3">Volver al inicio</a>
    </div>
@endsection
