@extends('layouts.app')

@section('title', 'Tenis por Tallas - SkatePro')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-blue-600 mb-6">Tenis por Tallas</h1>
    
    <div class="grid md:grid-cols-4 gap-6 mb-8">
        @foreach(['22-24', '25-27', '28-30', '31-33', '34-36', '37-39', '40-42', '43-45', '46+'] as $size)
        <a href="#talla-{{ $size }}" class="bg-white p-4 rounded-lg shadow-md text-center hover:bg-blue-50 transition">
            <h3 class="font-semibold text-lg">Talla {{ $size }}</h3>
        </a>
        @endforeach
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach([
            ['name' => 'Nike SB Zoom', 'price' => '$1,499 MXN', 'size' => '40-42'],
            ['name' => 'Vans Old Skool', 'price' => '$1,199 MXN', 'size' => '38-40'],
            ['name' => 'Adidas Busenitz', 'price' => '$1,399 MXN', 'size' => '41-43'],
            ['name' => 'Converse Chuck Taylor', 'price' => '$999 MXN', 'size' => '39-41'],
            ['name' => 'DC Shoes Kalis', 'price' => '$1,299 MXN', 'size' => '42-44'],
            ['name' => 'Emerica Reynolds', 'price' => '$1,599 MXN', 'size' => '40-42']
        ] as $shoe)
        <div class="bg-white p-4 rounded-lg shadow-md">
            <h3 class="font-semibold text-lg">{{ $shoe['name'] }}</h3>
            <p class="text-gray-600">{{ $shoe['price'] }}</p>
            <p class="text-sm text-blue-600">Talla: {{ $shoe['size'] }}</p>
            <button class="mt-2 bg-blue-600 text-white px-3 py-1 rounded text-sm hover:bg-blue-700">
                Agregar al carrito
            </button>
        </div>
        @endforeach
    </div>
</div>
@endsection