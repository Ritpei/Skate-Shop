@extends('layouts.app')

@section('title', 'Tenis - SkatePro')

@section('content')
<div class="mb-8">
    <h1 class="text-3xl font-bold text-gray-800">Tenis</h1>
    <p class="text-gray-600 mt-2">Encuentra el calzado perfecto para tu estilo</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white rounded-lg shadow-md p-4">
        <div class="h-48 bg-red-100 rounded flex items-center justify-center">
            <i class="fas fa-shoe-prints text-5xl text-red-600"></i>
        </div>
        <h3 class="font-semibold text-lg mt-4">Tenis Skate</h3>
        <p class="text-gray-600">$1,199.00 MXN</p>
        <button class="mt-2 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Agregar al carrito</button>
    </div>
</div>
@endsection