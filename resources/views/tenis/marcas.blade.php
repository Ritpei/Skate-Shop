@extends('layouts.app')

@section('title', 'Tenis por Marcas - SkatePro')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-blue-600 mb-6">Tenis por Marcas</h1>
    
    <div class="grid md:grid-cols-4 gap-6 mb-8">
        @foreach(['Nike', 'Vans', 'Adidas', 'Converse', 'DC Shoes', 'Emerica', 'New Balance', 'Puma'] as $brand)
        <a href="#marca-{{ strtolower($brand) }}" class="bg-white p-4 rounded-lg shadow-md text-center hover:bg-blue-50 transition">
            <h3 class="font-semibold text-lg">{{ $brand }}</h3>
        </a>
        @endforeach
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach([
            ['brand' => 'Nike', 'name' => 'Nike SB Zoom', 'price' => '$1,499 MXN'],
            ['brand' => 'Vans', 'name' => 'Vans Old Skool', 'price' => '$1,199 MXN'],
            ['brand' => 'Adidas', 'name' => 'Adidas Busenitz', 'price' => '$1,399 MXN'],
            ['brand' => 'Converse', 'name' => 'Converse Chuck Taylor', 'price' => '$999 MXN'],
            ['brand' => 'DC Shoes', 'name' => 'DC Shoes Kalis', 'price' => '$1,299 MXN'],
            ['brand' => 'Emerica', 'name' => 'Emerica Reynolds', 'price' => '$1,599 MXN']
        ] as $shoe)
        <div class="bg-white p-4 rounded-lg shadow-md">
            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">{{ $shoe['brand'] }}</span>
            <h3 class="font-semibold text-lg mt-2">{{ $shoe['name'] }}</h3>
            <p class="text-gray-600">{{ $shoe['price'] }}</p>
            <button class="mt-2 bg-blue-600 text-white px-3 py-1 rounded text-sm hover:bg-blue-700">
                Agregar al carrito
            </button>
        </div>
        @endforeach
    </div>
</div>
@endsection