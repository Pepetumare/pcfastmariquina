<div class="col-md-4 mb-4">
    <div class="card h-100 shadow-sm">
        <img src="{{ $imagen }}" class="card-img-top" alt="{{ $nombre }}">
        <div class="card-body">
            <h5 class="card-title">{{ $nombre }}</h5>
            <p class="card-text">{{ $descripcion }}</p>
            <p class="fw-bold text-primary">${{ $precio }}</p>

            <!-- Botón que abre el modal -->
            <button class="btn btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#productoModal{{ $id }}">
                Ver más
            </button>
        </div>
    </div>

    @include('components.producto-modal', [
        'id' => $id,
        'nombre' => $nombre,
        'descripcion' => $descripcion,
        'precio' => $precio,
        'imagen' => $imagen
    ])
</div>
