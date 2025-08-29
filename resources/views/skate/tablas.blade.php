@extends('layouts.app')

@section('title', 'Tablas de Skate - SkatePro')

@section('content')
<div class="mb-8">
    <h1 class="text-3xl font-bold text-gray-800">Tablas de Skate</h1>
    <p class="text-gray-600 mt-2">Encuentra la tabla perfecta para tu estilo</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Producto 1 -->
    <div class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-all">
        <div class="h-48 bg-blue-100 rounded flex items-center justify-center">
            <i class="fas fa-skateboarding text-5xl text-blue-600"></i>
        </div>
        <h3 class="font-semibold text-lg mt-4">Tabla Professional</h3>
        <p class="text-gray-600 mt-1">Ideal para street y park</p>
        <p class="text-2xl font-bold text-blue-600 mt-2">$899.00 MXN</p>
        <button class="mt-3 w-full bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-all">
            Agregar al carrito
        </button>
    </div>
    
    <!-- Producto 2 -->
    <div class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-all">
        <div class="h-48 bg-blue-200 rounded flex items-center justify-center">
            <i class="fas fa-skateboarding text-5xl text-blue-700"></i>
        </div>
        <h3 class="font-semibold text-lg mt-4">Tabla Beginner</h3>
        <p class="text-gray-600 mt-1">Perfecta para principiantes</p>
        <p class="text-2xl font-bold text-blue-600 mt-2">$599.00 MXN</p>
        <button class="mt-3 w-full bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-all">
            Agregar al carrito
        </button>
    </div>
    
    <!-- Producto 3 -->
    <div class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-all">
        <div class="h-48 bg-blue-300 rounded flex items-center justify-center">
            <i class="fas fa-skateboarding text-5xl text-blue-800"></i>
        </div>
        <h3 class="font-semibold text-lg mt-4">Tabla Cruiser</h3>
        <p class="text-gray-600 mt-1">Para paseos urbanos</p>
        <p class="text-2xl font-bold text-blue-600 mt-2">$749.00 MXN</p>
        <button class="mt-3 w-full bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-all">
            Agregar al carrito
        </button>
    </div>
</div>
@endsection