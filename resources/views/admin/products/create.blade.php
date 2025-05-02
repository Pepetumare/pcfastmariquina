@extends('layouts.admin')
@section('title', 'Crear Producto')

@section('content')
    <h2 class="fw-bold mb-4">Nuevo Producto</h2>
    @include('admin.products.form')
@endsection
