@extends('layouts.admin')
@section('title', 'Nuevo Banner')

@section('content')
    <h2 class="fw-bold mb-4">Agregar Banner</h2>
    @include('admin.banners.form')
@endsection
