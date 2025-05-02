<div class="modal fade" id="productoModal{{ $id }}" tabindex="-1" aria-labelledby="productoModalLabel{{ $id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="productoModalLabel{{ $id }}">{{ $nombre }}</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body row">
                <div class="col-md-6">
                    <img src="{{ $imagen }}" class="img-fluid rounded shadow-sm" alt="{{ $nombre }}">
                </div>
                <div class="col-md-6">
                    <p>{{ $descripcion }}</p>
                    <h4 class="text-primary">${{ $precio }}</h4>

                    <div class="mt-4 d-grid gap-2">
                        <button class="btn btn-outline-primary">Agregar al carrito</button>
                        <button class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
