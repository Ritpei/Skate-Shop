@extends('layouts.app')

@section('title', 'Productos - SkatePro')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Todos los Productos</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($products as $product)
        <div class="bg-white rounded-lg shadow-md p-4">
            <h3 class="font-semibold text-lg">{{ $product->name }}</h3>
            <p class="text-gray-600">${{ number_format($product->price, 2) }}</p>
            <p class="text-sm text-gray-500">{{ $product->category->name }}</p>
        </div>
        @endforeach
    </div>

    <div class="mt-6">
        {{ $products->links() }}
    </div>
</div>
@endsection
