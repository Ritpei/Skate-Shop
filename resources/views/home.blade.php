@extends('layouts.app')

@section('title', 'Inicio - Tienda de Patinetas')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold text-center text-blue-600 mb-8">
        🛹 Bienvenido a SkatePro
    </h1>
    
    <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-lg shadow-md text-center">
            <h2 class="text-2xl font-semibold mb-4">Productos</h2>
            <p class="text-gray-600 mb-4">Explora nuestro catálogo de patinetas</p>
            <a href="{{ route('products.index') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Ver Productos
            </a>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md text-center">
            <h2 class="text-2xl font-semibold mb-4">Carrito</h2>
            <p class="text-gray-600 mb-4">Revisa tus productos seleccionados</p>
            <a href="{{ route('cart') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                Ver Carrito
            </a>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md text-center">
            <h2 class="text-2xl font-semibold mb-4">Favoritos</h2>
            <p class="text-gray-600 mb-4">Guarda tus productos favoritos</p>
            <a href="{{ route('favorites') }}" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">
                Ver Favoritos
            </a>
        </div>
    </div>
</div>
@endsection