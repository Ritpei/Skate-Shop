@extends('layouts.admin')

@section('title', 'Editar Producto - Admin')

@section('content')
<div class="bg-white shadow rounded-lg p-6">
    <h2 class="text-xl font-semibold mb-6">Editar Producto: {{ $product->name }}</h2>

    <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Columna izquierda -->
            <div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Nombre del Producto *</label>
                    <input type="text" name="name" value="{{ old('name', $product->name) }}" required 
                           class="mt-1 block w-full border border-gray-300 rounded-md p-2">
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Descripción *</label>
                    <textarea name="description" rows="4" required
                              class="mt-1 block w-full border border-gray-300 rounded-md p-2">{{ old('description', $product->description) }}</textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Precio *</label>
                    <input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}" required 
                           class="mt-1 block w-full border border-gray-300 rounded-md p-2">
                </div>
            </div>

            <!-- Columna derecha -->
            <div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Categoría *</label>
                    <select name="category_id" required class="mt-1 block w-full border border-gray-300 rounded-md p-2">
                        <option value="">Seleccionar categoría</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Stock disponible *</label>
                    <input type="number" name="quantity" value="{{ old('quantity', $product->quantity) }}" required 
                           class="mt-1 block w-full border border-gray-300 rounded-md p-2">
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">SKU</label>
                    <input type="text" name="sku" value="{{ old('sku', $product->sku) }}" 
                           class="mt-1 block w-full border border-gray-300 rounded-md p-2">
                </div>
            </div>
        </div>

        <div class="mt-6">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Actualizar Producto
            </button>
            <a href="{{ route('admin.products.index') }}" class="ml-2 bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400">
                Cancelar
            </a>
        </div>
    </form>
</div>
@endsection
