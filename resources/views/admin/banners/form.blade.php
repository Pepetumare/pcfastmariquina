<form>
    <div class="mb-3">
        <label class="form-label">Título (opcional)</label>
        <input type="text" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Imagen</label>
        <input type="file" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Enlace (opcional)</label>
        <input type="url" class="form-control" placeholder="https://...">
    </div>

    <button class="btn btn-primary">Subir</button>
    <a href="{{ route('admin.banners.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
