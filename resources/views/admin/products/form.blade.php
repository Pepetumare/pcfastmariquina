<form action="{{ isset($product) ? route('admin.products.update', $product) : route('admin.products.store') }}" method="POST">
    @csrf
    @if(isset($product)) @method('PUT') @endif

    <div class="mb-3">
        <label>Nombre del Producto</label>
        <input type="text" name="name" value="{{ old('name', $product->name ?? '') }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Categoría</label>
        <select name="category_id" class="form-select">
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}" @selected(old('category_id', $product->category_id ?? '') == $cat->id)>{{ $cat->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Descripción</label>
        <textarea name="description" class="form-control">{{ old('description', $product->description ?? '') }}</textarea>
    </div>

    <div class="mb-3">
        <label>Precio</label>
        <input type="number" name="price" value="{{ old('price', $product->price ?? '') }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Stock</label>
        <input type="number" name="stock" value="{{ old('stock', $product->stock ?? '') }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Imagen (URL)</label>
        <input type="url" name="image" value="{{ old('image', $product->image ?? '') }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Proveedor</label>
        <input type="text" name="supplier" value="{{ old('supplier', $product->supplier ?? '') }}" class="form-control">
    </div>

    <button class="btn btn-primary">Guardar</button>
    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
