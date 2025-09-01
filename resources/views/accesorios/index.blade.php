@extends('layouts.app')

@section('title', 'Accesorios - SkatePro')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-blue-600 mb-6">🛍️ Accesorios</h1>
    
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <a href="{{ route('accesorios.stickers') }}" class="bg-white p-6 rounded-lg shadow-md text-center hover:bg-blue-50 transition group">
            <div class="text-4xl mb-3">🎨</div>
            <h2 class="text-xl font-semibold mb-2">Stickers</h2>
            <p class="text-gray-600">Calcomanías y adhesivos</p>
        </a>

        <a href="{{ route('accesorios.mochilas') }}" class="bg-white p-6 rounded-lg shadow-md text-center hover:bg-blue-50 transition group">
            <div class="text-4xl mb-3">🎒</div>
            <h2 class="text-xl font-semibold mb-2">Mochilas</h2>
            <p class="text-gray-600">Morrales y backpacks</p>
        </a>

        <a href="{{ route('accesorios.gorras') }}" class="bg-white p-6 rounded-lg shadow-md text-center hover:bg-blue-50 transition group">
            <div class="text-4xl mb-3">🧢</div>
            <h2 class="text-xl font-semibold mb-2">Gorras</h2>
            <p class="text-gray-600">Caps y sombreros</p>
        </a>

        <a href="{{ route('accesorios.medias') }}" class="bg-white p-6 rounded-lg shadow-md text-center hover:bg-blue-50 transition group">
            <div class="text-4xl mb-3">🧦</div>
            <h2 class="text-xl font-semibold mb-2">Medias</h2>
            <p class="text-gray-600">Calcetines deportivos</p>
        </a>
    </div>

    <div class="bg-blue-50 p-6 rounded-lg">
        <h2 class="text-xl font-semibold mb-4">✨ Accesorios Personalizados</h2>
        <p class="text-gray-600 mb-4">¿Buscas algo único? Contamos con servicio de personalización de accesorios.</p>
        <a href="{{ route('mapa') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            📍 Consulta en tienda
        </a>
    </div>
</div>
@endsection