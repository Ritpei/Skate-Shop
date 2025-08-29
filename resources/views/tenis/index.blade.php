@extends('layouts.app')

@section('title', 'Tenis - SkatePro')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-blue-600 mb-6">Tenis Deportivos</h1>
    
    <div class="grid md:grid-cols-2 gap-8 mb-8">
        <a href="{{ route('tenis.tallas') }}" class="bg-white p-6 rounded-lg shadow-md text-center hover:bg-blue-50 transition">
            <h2 class="text-xl font-semibold mb-3">👟 Por Tallas</h2>
            <p class="text-gray-600">Encuentra tenis por tu talla perfecta</p>
        </a>

        <a href="{{ route('tenis.marcas') }}" class="bg-white p-6 rounded-lg shadow-md text-center hover:bg-blue-50 transition">
            <h2 class="text-xl font-semibold mb-3">🏷️ Por Marcas</h2>
            <p class="text-gray-600">Explora por tus marcas favoritas</p>
        </a>
    </div>

    <div class="bg-blue-50 p-6 rounded-lg">
        <h2 class="text-xl font-semibold mb-4">¿No sabes tu talla?</h2>
        <p class="text-gray-600 mb-4">Consulta nuestra guía de tallas o visítanos en tienda para una asesoría personalizada.</p>
        <a href="{{ route('mapa') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            📍 Encuentra tu tienda más cercana
        </a>
    </div>
</div>
@endsection