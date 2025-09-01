@extends('layouts.app')

@section('title', 'Ropa para Mujer - SkatePro')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Ropa para Mujer</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
        <a href="{{ route('ropa.mujer.playeras') }}" class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition-shadow">
            <div class="h-16 w-16 mx-auto mb-4 bg-pink-100 rounded-full flex items-center justify-center">
                <i class="fas fa-tshirt text-pink-600 text-xl"></i>
            </div>
            <h3 class="font-semibold text-gray-800">Playeras</h3>
            <p class="text-sm text-gray-600 mt-1">Camisetas y tops</p>
        </a>
        
        <a href="{{ route('ropa.mujer.pantalones') }}" class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition-shadow">
            <div class="h-16 w-16 mx-auto mb-4 bg-purple-100 rounded-full flex items-center justify-center">
                <i class="fas fa-vest text-purple-600 text-xl"></i>
            </div>
            <h3 class="font-semibold text-gray-800">Pantalones</h3>
            <p class="text-sm text-gray-600 mt-1">Jeans, leggings y más</p>
        </a>
        
        <a href="{{ route('ropa.mujer.chamarras') }}" class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition-shadow">
            <div class="h-16 w-16 mx-auto mb-4 bg-yellow-100 rounded-full flex items-center justify-center">
                <i class="fas fa-jacket text-yellow-600 text-xl"></i>
            </div>
            <h3 class="font-semibold text-gray-800">Chamarras</h3>
            <p class="text-sm text-gray-600 mt-1">Chamarras y hoodies</p>
        </a>
    </div>
</div>
@endsection
