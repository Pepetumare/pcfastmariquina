@extends('layouts.app')
@section('title', 'Mi perfil')

@section('content')
    <h2 class="fw-bold">👤 Mi perfil</h2>
    <p>Nombre: {{ auth()->user()->name }}</p>
    <p>Correo: {{ auth()->user()->email }}</p>
@endsection
