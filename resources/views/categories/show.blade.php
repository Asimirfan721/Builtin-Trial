<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category: ') . ucfirst($name) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold mb-4">Available Products</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach($products as $product)
                        <div class="border rounded-lg shadow-lg p-4">
                            <img src="{{ asset($product->image) }}" class="w-full h-48 object-cover rounded-md" alt="{{ $product->name }}">
                            <h4 class="mt-2 font-semibold">{{ $product->name }}</h4>
                            <p class="text-gray-600 text-sm">{{ $product->description }}</p>
                            <p class="font-bold text-lg mt-2">${{ $product->price }}</p>
                            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-3 hover:bg-blue-600 transition">
                                Add to Cart
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@extends('layouts.app')

@section('content')
    <h1>Products in Category: {{ ucfirst($name) }}</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        @forelse ($products as $product)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text">Price: ${{ $product->price }}</p>
                    </div>
                </div>
            </div>
        @empty
            <p>No products found in this category.</p>
        @endforelse
    </div>
@endsection

