@extends('layouts.app')

@section('title', 'Medias - SkatePro')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-blue-600 mb-6">🧦 Medias y Calcetines</h1>
    
    <div class="flex flex-wrap gap-4 mb-8">
        <select class="border border-gray-300 rounded px-3 py-2">
            <option>Tallas</option>
            <option>22-24</option>
            <option>25-27</option>
            <option>28-30</option>
            <option>31-33</option>
            <option>34-36</option>
            <option>37-39</option>
            <option>40-42</option>
        </select>
        <select class="border border-gray-300 rounded px-3 py-2">
            <option>Marcas</option>
            <option>Vans</option>
            <option>Nike</option>
            <option>Adidas</option>
            <option>Stance</option>
            <option>Element</option>
        </select>
        <select class="border border-gray-300 rounded px-3 py-2">
            <option>Estilo</option>
            <option>Deportivas</option>
            <option>Casuales</option>
            <option>Altas</option>
            <option>Cortas</option>
            <option>Pattern</option>
        </select>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach([
            ['name' => 'Pack Medias Vans 3pz', 'price' => '$299 MXN', 'style' => 'Casuales', 'brand' => 'Vans'],
            ['name' => 'Medias Nike Elite', 'price' => '$199 MXN', 'style' => 'Deportivas', 'brand' => 'Nike'],
            ['name' => 'Pack Adidas 3pz', 'price' => '$279 MXN', 'style' => 'Deportivas', 'brand' => 'Adidas'],
            ['name' => 'Medias Stance Pattern', 'price' => '$249 MXN', 'style' => 'Pattern', 'brand' => 'Stance'],
            ['name' => 'Medias Element Skate', 'price' => '$179 MXN', 'style' => 'Altas', 'brand' => 'Element'],
            ['name' => 'Pack Medias Color 5pz', 'price' => '$349 MXN', 'style' => 'Casuales', 'brand' => 'Vans'],
            ['name' => 'Medias Compression', 'price' => '$229 MXN', 'style' => 'Deportivas', 'brand' => 'Nike'],
            ['name' => 'Medias Ankle Socks', 'price' => '$159 MXN', 'style' => 'Cortas', 'brand' => 'Adidas']
        ] as $sock)
        <div class="bg-white p-4 rounded-lg shadow-md">
            <div class="h-40 bg-gray-200 rounded mb-3 flex items-center justify-center">
                <span class="text-gray-400">🧦</span>
            </div>
            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">{{ $sock['brand'] }}</span>
            <h3 class="font-semibold text-lg mt-2">{{ $sock['name'] }}</h3>
            <p class="text-sm text-gray-600">{{ $sock['style'] }}</p>
            <p class="text-blue-600 font-bold">{{ $sock['price'] }}</p>
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