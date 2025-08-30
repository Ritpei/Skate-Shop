# Reemplazar el contenido de home.blade.php
cat > resources/views/home.blade.php << 'EOF'
@extends('layouts.app')

@section('title', 'SkatePro - Inicio')

@section('content')
<div class="bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl p-8 text-white text-center mb-12">
    <h1 class="text-4xl font-bold mb-4">Bienvenido a SkatePro</h1>
    <p class="text-xl mb-6">Todo lo que necesitas para el skate y roller en un solo lugar</p>
    <a href="/productos" class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-all inline-block">
        Ver Productos Destacados
    </a>
</div>

<div class="mb-12">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Categorías Populares</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-all">
            <div class="h-48 bg-blue-100 flex items-center justify-center">
                <i class="fas fa-skateboarding text-6xl text-blue-600"></i>
            </div>
            <div class="p-4">
                <h3 class="font-semibold text-lg">Skateboards</h3>
                <p class="text-gray-600 mt-2">Tablas completas y componentes</p>
                <a href="/skate/tablas" class="mt-3 inline-block text-blue-600 hover:text-blue-800 transition-all">Ver productos →</a>
            </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-all">
            <div class="h-48 bg-green-100 flex items-center justify-center">
                <i class="fas fa-roller-skate text-6xl text-green-600"></i>
            </div>
            <div class="p-4">
                <h3 class="font-semibold text-lg">Patines</h3>
                <p class="text-gray-600 mt-2">Patines y accesorios para roller</p>
                <a href="/roller/patines" class="mt-3 inline-block text-blue-600 hover:text-blue-800 transition-all">Ver productos →</a>
            </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-all">
            <div class="h-48 bg-red-100 flex items-center justify-center">
                <i class="fas fa-shoe-prints text-6xl text-red-600"></i>
            </div>
            <div class="p-4">
                <h3 class="font-semibold text-lg">Tenis</h3>
                <p class="text-gray-600 mt-2">Calzado para skate y estilo</p>
                <a href="/tenis" class="mt-3 inline-block text-blue-600 hover:text-blue-800 transition-all">Ver productos →</a>
            </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-all">
            <div class="h-48 bg-yellow-100 flex items-center justify-center">
                <i class="fas fa-tshirt text-6xl text-yellow-600"></i>
            </div>
            <div class="p-4">
                <h3 class="font-semibold text-lg">Ropa</h3>
                <p class="text-gray-600 mt-2">Ropa técnica y casual</p>
                <a href="/ropa" class="mt-3 inline-block text-blue-600 hover:text-blue-800 transition-all">Ver productos →</a>
            </div>
        </div>
    </div>
</div>
@endsection
EOF