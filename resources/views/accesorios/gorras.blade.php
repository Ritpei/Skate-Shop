@extends('layouts.app')

@section('title', 'Gorras - SkatePro')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-blue-600 mb-6">🧢 Gorras y Sombreros</h1>
    
    <div class="flex flex-wrap gap-4 mb-8">
        <select class="border border-gray-300 rounded px-3 py-2">
            <option>Tallas</option>
            <option>S/M</option>
            <option>M/L</option>
            <option>Ajustable</option>
            <option>Única Talla</option>
        </select>
        <select class="border border-gray-300 rounded px-3 py-2">
            <option>Marcas</option>
            <option>Vans</option>
            <option>New Era</option>
            <option>Nike</option>
            <option>Adidas</option>
            <option>Thrasher</option>
        </select>
        <select class="border border-gray-300 rounded px-3 py-2">
            <option>Estilo</option>
            <option>Snapback</option>
            <option>Dad Hat</option>
            <option>Bucket Hat</option>
            <option>Beanie</option>
        </select>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach([
            ['name' => 'Gorra Vans Classic', 'price' => '$449 MXN', 'style' => 'Snapback', 'brand' => 'Vans'],
            ['name' => 'Dad Hat Thrasher', 'price' => '$399 MXN', 'style' => 'Dad Hat', 'brand' => 'Thrasher'],
            ['name' => 'New Era 59FIFTY', 'price' => '$699 MXN', 'style' => 'Snapback', 'brand' => 'New Era'],
            ['name' => 'Bucket Hat Nike', 'price' => '$379 MXN', 'style' => 'Bucket Hat', 'brand' => 'Nike'],
            ['name' => 'Gorra Adidas Originals', 'price' => '$429 MXN', 'style' => 'Snapback', 'brand' => 'Adidas'],
            ['name' => 'Beanie Volcom', 'price' => '$299 MXN', 'style' => 'Beanie', 'brand' => 'Volcom'],
            ['name' => 'Gorra Element Graphic', 'price' => '$349 MXN', 'style' => 'Snapback', 'brand' => 'Element'],
            ['name' => 'Dad Hat Obey', 'price' => '$419 MXN', 'style' => 'Dad Hat', 'brand' => 'Obey']
        ] as $hat)
        <div class="bg-white p-4 rounded-lg shadow-md">
            <div class="h-40 bg-gray-200 rounded mb-3 flex items-center justify-center">
                <span class="text-gray-400">🧢</span>
            </div>
            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">{{ $hat['brand'] }}</span>
            <h3 class="font-semibold text-lg mt-2">{{ $hat['name'] }}</h3>
            <p class="text-sm text-gray-600">{{ $hat['style'] }}</p>
            <p class="text-blue-600 font-bold">{{ $hat['price'] }}</p>
            <div class="flex gap-2 mt-3">
                <button class="flex-1 bg-blue-600 text-white px-3 py-2 rounded text-sm hover:bg-blue-700">
                    Agregar
                </button>
                <button class="w-12 bg-gray-100 rounded hover:bg-gray-200">
                    ❤️
                </button>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection