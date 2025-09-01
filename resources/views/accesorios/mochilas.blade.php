@extends('layouts.app')

@section('title', 'Mochilas - SkatePro')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-blue-600 mb-6">🎒 Mochilas y Morrales</h1>
    
    <div class="flex flex-wrap gap-4 mb-8">
        <select class="border border-gray-300 rounded px-3 py-2">
            <option>Capacidad</option>
            <option>Pequeña (10-20L)</option>
            <option>Mediana (20-30L)</option>
            <option>Grande (30L+)</option>
        </select>
        <select class="border border-gray-300 rounded px-3 py-2">
            <option>Marcas</option>
            <option>Vans</option>
            <option>Element</option>
            <option>Dakine</option>
            <option>Nike</option>
        </select>
        <select class="border border-gray-300 rounded px-3 py-2">
            <option>Estilo</option>
            <option>Skate</option>
            <option>Urbano</option>
            <option>Deportivo</option>
            <option>Laptop</option>
        </select>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach([
            ['name' => 'Mochila Vans Classic', 'price' => '$899 MXN', 'capacity' => '25L', 'brand' => 'Vans'],
            ['name' => 'Morral Element Backpack', 'price' => '$799 MXN', 'capacity' => '20L', 'brand' => 'Element'],
            ['name' => 'Mochila Dakine Campus', 'price' => '$1,199 MXN', 'capacity' => '30L', 'brand' => 'Dakine'],
            ['name' => 'Morral Nike SB', 'price' => '$949 MXN', 'capacity' => '18L', 'brand' => 'Nike'],
            ['name' => 'Mochila Laptop Protegida', 'price' => '$1,299 MXN', 'capacity' => '28L', 'brand' => 'Dakine'],
            ['name' => 'Morral Skate Mini', 'price' => '$649 MXN', 'capacity' => '15L', 'brand' => 'Element']
        ] as $backpack)
        <div class="bg-white p-4 rounded-lg shadow-md">
            <div class="h-48 bg-gray-200 rounded mb-3 flex items-center justify-center">
                <span class="text-gray-400">🎒 Mochila</span>
            </div>
            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">{{ $backpack['brand'] }}</span>
            <h3 class="font-semibold text-lg mt-2">{{ $backpack['name'] }}</h3>
            <p class="text-gray-600">{{ $backpack['capacity'] }} de capacidad</p>
            <p class="text-blue-600 font-bold">{{ $backpack['price'] }}</p>
            <div class="flex gap-2 mt-3">
                <button class="flex-1 bg-blue-600 text-white px-3 py-2 rounded hover:bg-blue-700">
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