<form>
    <div class="mb-3">
        <label class="form-label">Nombre del Producto</label>
        <input type="text" class="form-control" placeholder="Ej: Audífonos Gamer X">
    </div>

    <div class="mb-3">
        <label class="form-label">Categoría</label>
        <select class="form-select">
            <option>Audio</option>
            <option>Componentes</option>
            <option>Periféricos</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Descripción</label>
        <textarea class="form-control" rows="4" placeholder="Describe las características del producto..."></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Precio</label>
        <input type="number" class="form-control" placeholder="19990">
    </div>

    <div class="mb-3">
        <label class="form-label">Stock</label>
        <input type="number" class="form-control" placeholder="10">
    </div>

    <div class="mb-3">
        <label class="form-label">Imagen</label>
        <input type="file" class="form-control">
    </div>

    <button class="btn btn-primary">Guardar</button>
    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
