@extends('layouts.app')

@section('title', 'Ropa para Hombre - SkatePro')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-blue-600 mb-6">Ropa para Hombre</h1>
    
    <!-- Filtros -->
    <div class="flex flex-wrap gap-4 mb-8">
        <select class="border border-gray-300 rounded px-3 py-2">
            <option>Tallas</option>
            <option>S</option>
            <option>M</option>
            <option>L</option>
            <option>XL</option>
        </select>
        <select class="border border-gray-300 rounded px-3 py-2">
            <option>Marcas</option>
            <option>Vans</option>
            <option>Thrasher</option>
            <option>Independent</option>
            <option>Santa Cruz</option>
        </select>
        <select class="border border-gray-300 rounded px-3 py-2">
            <option>Categorías</option>
            <option>Playeras</option>
            <option>Sudaderas</option>
            <option>Pants</option>
            <option>Accesorios</option>
        </select>
    </div>

    <!-- Grid de productos -->
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach([
            ['name' => 'Playera Thrasher Logo', 'price' => '$499 MXN', 'category' => 'Playeras'],
            ['name' => 'Sudadera Vans Classic', 'price' => '$899 MXN', 'category' => 'Sudaderas'],
            ['name' => 'Pants Santa Cruz', 'price' => '$799 MXN', 'category' => 'Pants'],
            ['name' => 'Gorra Independent', 'price' => '$349 MXN', 'category' => 'Accesorios'],
            ['name' => 'Playera Element Graphic', 'price' => '$429 MXN', 'category' => 'Playeras'],
            ['name' => 'Sudadera Baker', 'price' => '$949 MXN', 'category' => 'Sudaderas'],
            ['name' => 'Shorts Skate', 'price' => '$599 MXN', 'category' => 'Shorts'],
            ['name' => 'Gorra Obey', 'price' => '$379 MXN', 'category' => 'Accesorios']
        ] as $product)
        <div class="bg-white p-4 rounded-lg shadow-md">
            <div class="h-40 bg-gray-200 rounded mb-3 flex items-center justify-center">
                <span class="text-gray-400">🖼️ Imagen</span>
            </div>
            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">{{ $product['category'] }}</span>
            <h3 class="font-semibold text-lg mt-2">{{ $product['name'] }}</h3>
            <p class="text-gray-600 font-bold">{{ $product['price'] }}</p>
            <div class="flex gap-2 mt-3">
                <button class="flex-1 bg-blue-600 text-white px-3 py-2 rounded text-sm hover:bg-blue-700">
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