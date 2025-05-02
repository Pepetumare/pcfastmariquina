@extends('layouts.admin')
@section('title', 'Banners')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fw-bold">Banners del Inicio</h2>
        <a href="{{ route('admin.banners.create') }}" class="btn btn-primary">+ Nuevo Banner</a>
    </div>

    <div class="row">
        @for ($i = 1; $i <= 3; $i++)
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <img src="https://via.placeholder.com/600x300?text=Banner+{{ $i }}" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">Banner {{ $i }} - link opcional</p>
                        <form>
                            <button class="btn btn-sm btn-danger w-100">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        @endfor
    </div>
@endsection
