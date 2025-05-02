<div class="col-md-4 mb-4">
    <div class="card h-100 shadow-sm">
        <img src="{{ $imagen ?? 'https://via.placeholder.com/400x300' }}" class="card-img-top" alt="{{ $nombre ?? 'Producto' }}">
        <div class="card-body">
            <h5 class="card-title">{{ $nombre ?? 'Producto Genérico' }}</h5>
            <p class="card-text">{{ $descripcion ?? 'Descripción breve del producto.' }}</p>
            <p class="fw-bold text-primary">${{ $precio ?? '00.000' }}</p>
            <a href="#" class="btn btn-outline-primary w-100">Ver más</a>
        </div>
    </div>
</div>
