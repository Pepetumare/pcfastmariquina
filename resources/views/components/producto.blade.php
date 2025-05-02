<div class="col-md-4 mb-4">
    <div class="card h-100 shadow-sm">
        <img src="{{ $imagen }}" class="card-img-top" alt="{{ $nombre }}">
        <div class="card-body">
            <h5 class="card-title">{{ $nombre }}</h5>
            <p class="card-text">{{ $descripcion }}</p>
            <p class="fw-bold text-primary">${{ $precio }}</p>

            @isset($id)
                <form action="{{ route('cart.add', $id) }}" method="POST">
                    @csrf
                    <button class="btn btn-outline-primary w-100">Agregar al carrito</button>
                </form>
            @endisset
        </div>
    </div>
</div>
