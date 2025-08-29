@extends('layouts.app')

@section('title', 'Todos los Productos - SkatePro')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-blue-600 mb-6">Todos los Productos</h1>
    <p class="text-gray-600 mb-8">Catálogo completo de todos nuestros productos.</p>
    
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-md text-center">
            <h2 class="text-xl font-semibold mb-3">🛹 Skate</h2>
            <p class="text-gray-600 mb-4">Tablas, ruedas, trucks y más</p>
            <a href="{{ route('skate.tablas') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Ver Skate
            </a>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md text-center">
            <h2 class="text-xl font-semibold mb-3">⛸️ Roller</h2>
            <p class="text-gray-600 mb-4">Patines, protecciones y accesorios</p>
            <a href="{{ route('roller.patines') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                Ver Roller
            </a>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md text-center">
            <h2 class="text-xl font-semibold mb-3">👟 Tenis</h2>
            <p class="text-gray-600 mb-4">Calzado deportivo y casual</p>
            <a href="{{ route('tenis') }}" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">
                Ver Tenis
            </a>
        </div>
    </div>
</div>
@endsection