<form>
    <div class="mb-3">
        <label class="form-label">Nombre del Servicio</label>
        <input type="text" class="form-control" placeholder="Ej: Instalación de cámaras">
    </div>

    <div class="mb-3">
        <label class="form-label">Descripción</label>
        <textarea class="form-control" rows="4" placeholder="Describe qué incluye este servicio..."></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Precio estimado</label>
        <input type="number" class="form-control" placeholder="15000">
    </div>

    <button class="btn btn-primary">Guardar</button>
    <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
