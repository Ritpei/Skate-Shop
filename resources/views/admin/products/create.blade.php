@extends('layouts.admin')

@section('title', 'Crear Producto - Admin')

@section('content')
<div class="bg-white shadow rounded-lg p-6">
    <h2 class="text-xl font-semibold mb-6">Crear Nuevo Producto</h2>

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Columna izquierda - Información básica -->
            <div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Nombre del Producto *</label>
                    <input type="text" name="name" required 
                           class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Descripción *</label>
                    <textarea name="description" rows="4" required
                              class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Precio *</label>
                    <input type="number" step="0.01" name="price" required 
                           class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Precio de comparación</label>
                    <input type="number" step="0.01" name="compare_price"
                           class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
            </div>

            <!-- Columna derecha - Categorías y stock -->
            <div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Categoría *</label>
                    <select name="category_id" required 
                            class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500"
                            id="categorySelect">
                        <option value="">Seleccionar categoría</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Subcategoría</label>
                    <select name="subcategory_id" 
                            class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500"
                            id="subcategorySelect">
                        <option value="">Seleccionar subcategoría</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Stock disponible *</label>
                    <input type="number" name="quantity" required value="0"
                           class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">SKU (Código único)</label>
                    <input type="text" name="sku" 
                           class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
            </div>
        </div>

        <!-- Información adicional -->
        <div class="border-t pt-6 mt-6">
            <h3 class="text-lg font-medium mb-4">Información adicional</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Marca</label>
                    <input type="text" name="brand"
                           class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Modelo</label>
                    <input type="text" name="model"
                           class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Imágenes del producto</label>
                <input type="file" name="images[]" multiple accept="image/*"
                       class="mt-1 block w-full border border-gray-300 rounded-md p-2">
                <p class="text-sm text-gray-500">Puedes seleccionar múltiples imágenes</p>
            </div>
        </div>

        <!-- Opciones -->
        <div class="border-t pt-6 mt-6">
            <div class="flex items-center space-x-4">
                <div class="flex items-center">
                    <input type="checkbox" name="is_featured" id="is_featured" value="1"
                           class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="is_featured" class="ml-2 block text-sm text-gray-700">Producto destacado</label>
                </div>
                
                <div class="flex items-center">
                    <input type="checkbox" name="is_active" id="is_active" value="1" checked
                           class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="is_active" class="ml-2 block text-sm text-gray-700">Producto activo</label>
                </div>
            </div>
        </div>

        <!-- Botones -->
        <div class="mt-6 flex space-x-3">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <i class="fas fa-save mr-2"></i> Crear Producto
            </button>
            <a href="{{ route('admin.products.index') }}" class="bg-gray-300 text-gray-700 px-6 py-2 rounded-md hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-500">
                <i class="fas fa-times mr-2"></i> Cancelar
            </a>
        </div>
    </form>
</div>

<script>
// Cargar subcategorías dinámicamente
document.getElementById('categorySelect').addEventListener('change', function() {
    const categoryId = this.value;
    const subcategorySelect = document.getElementById('subcategorySelect');
    
    if (categoryId) {
        fetch(`/admin/categories/${categoryId}/subcategories`)
            .then(response => response.json())
            .then(data => {
                subcategorySelect.innerHTML = '<option value="">Seleccionar subcategoría</option>';
                data.forEach(subcategory => {
                    subcategorySelect.innerHTML += `<option value="${subcategory.id}">${subcategory.name}</option>`;
                });
            })
            .catch(error => {
                console.error('Error:', error);
                subcategorySelect.innerHTML = '<option value="">Error al cargar subcategorías</option>';
            });
    } else {
        subcategorySelect.innerHTML = '<option value="">Seleccionar subcategoría</option>';
    }
});
</script>
@endsection
