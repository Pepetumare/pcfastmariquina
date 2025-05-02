<form action="{{ isset($service) ? route('admin.services.update', $service) : route('admin.services.store') }}" method="POST">
    @csrf
    @if(isset($service)) @method('PUT') @endif

    <div class="mb-3">
        <label class="form-label">Nombre del Servicio</label>
        <input type="text" name="name" class="form-control"
               value="{{ old('name', $service->name ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Descripción</label>
        <textarea name="description" class="form-control">{{ old('description', $service->description ?? '') }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Precio Estimado</label>
        <input type="number" name="estimated_price" class="form-control"
               value="{{ old('estimated_price', $service->estimated_price ?? '') }}">
    </div>

    <button class="btn btn-primary">Guardar</button>
    <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
