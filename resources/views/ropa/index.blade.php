@extends('layouts.app')

@section('title', 'Ropa - SkatePro')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-blue-600 mb-6">Ropa y Accesorios</h1>
    
    <div class="grid md:grid-cols-2 gap-8 mb-8">
        <a href="{{ route('ropa.hombre') }}" class="bg-white p-6 rounded-lg shadow-md text-center hover:bg-blue-50 transition group">
            <div class="w-20 h-20 bg-blue-100 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:bg-blue-200">
                <span class="text-2xl">👔</span>
            </div>
            <h2 class="text-xl font-semibold mb-3">Ropa para Hombre</h2>
            <p class="text-gray-600">Playeras, sudaderas, pants y más</p>
        </a>

        <a href="{{ route('ropa.mujer') }}" class="bg-white p-6 rounded-lg shadow-md text-center hover:bg-pink-50 transition group">
            <div class="w-20 h-20 bg-pink-100 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:bg-pink-200">
                <span class="text-2xl">👚</span>
            </div>
            <h2 class="text-xl font-semibold mb-3">Ropa para Mujer</h2>
            <p class="text-gray-600">Playeras, leggings, vestidos y más</p>
        </a>
    </div>

    <!-- Sección unisex -->
    <div class="bg-gray-50 p-6 rounded-lg mb-8">
        <h2 class="text-xl font-semibold mb-4">👕 Ropa Unisex</h2>
        <p class="text-gray-600 mb-4">También contamos con una amplia selección de ropa unisex para todos los estilos.</p>
        <div class="grid md:grid-cols-3 gap-4">
            <div class="text-center">
                <span class="text-2xl">🎽</span>
                <p class="font-semibold">Playeras</p>
            </div>
            <div class="text-center">
                <span class="text-2xl">🧥</span>
                <p class="font-semibold">Sudaderas</p>
            </div>
            <div class="text-center">
                <span class="text-2xl">🧢</span>
                <p class="font-semibold">Gorras</p>
            </div>
        </div>
    </div>
</div>
@endsection