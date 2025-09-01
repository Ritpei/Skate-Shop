@extends('layouts.app')

@section('title', 'Ropa para Mujer - SkatePro')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-pink-600 mb-6">Ropa para Mujer</h1>
    
    <!-- Filtros -->
    <div class="flex flex-wrap gap-4 mb-8">
        <select class="border border-gray-300 rounded px-3 py-2">
            <option>Tallas</option>
            <option>XS</option>
            <option>S</option>
            <option>M</option>
            <option>L</option>
        </select>
        <select class="border border-gray-300 rounded px-3 py-2">
            <option>Marcas</option>
            <option>Vans</option>
            <option>Roxy</option>
            <option>Billabong</option>
            <option>Volcom</option>
        </select>
        <select class="border border-gray-300 rounded px-3 py-2">
            <option>Categorías</option>
            <option>Playeras</option>
            <option>Sudaderas</option>
            <option>Leggings</option>
            <option>Vestidos</option>
        </select>
    </div>

    <!-- Grid de productos -->
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach([
            ['name' => 'Playera Vans Floral', 'price' => '$459 MXN', 'category' => 'Playeras'],
            ['name' => 'Sudadera Roxy Hoodie', 'price' => '$879 MXN', 'category' => 'Sudaderas'],
            ['name' => 'Leggings Deportivos', 'price' => '$699 MXN', 'category' => 'Leggings'],
            ['name' => 'Vestido Casual', 'price' => '$649 MXN', 'category' => 'Vestidos'],
            ['name' => 'Playera Volcom Graphic', 'price' => '$439 MXN', 'category' => 'Playeras'],
            ['name' => 'Sudadera Billabong', 'price' => '$919 MXN', 'category' => 'Sudaderas'],
            ['name' => 'Shorts Deportivos', 'price' => '$549 MXN', 'category' => 'Shorts'],
            ['name' => 'Top Deportivo', 'price' => '$379 MXN', 'category' => 'Tops']
        ] as $product)
        <div class="bg-white p-4 rounded-lg shadow-md">
            <div class="h-40 bg-gray-200 rounded mb-3 flex items-center justify-center">
                <span class="text-gray-400">🖼️ Imagen</span>
            </div>
            <span class="bg-pink-100 text-pink-800 text-xs px-2 py-1 rounded">{{ $product['category'] }}</span>
            <h3 class="font-semibold text-lg mt-2">{{ $product['name'] }}</h3>
            <p class="text-gray-600 font-bold">{{ $product['price'] }}</p>
            <div class="flex gap-2 mt-3">
                <button class="flex-1 bg-pink-600 text-white px-3 py-2 rounded text-sm hover:bg-pink-700">
                    🛒 Agregar
                </button>
                <button class="w-10 h-10 bg-gray-100 rounded hover:bg-gray-200">
                    ❤️
                </button>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection