<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <!-- Buttons Section -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-6">
                <a href="{{ route('product.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                    Add Product
                </a>
                <a href="{{ route('category.show', 'shirts') }}" class="block text-center bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600 transition">
                    Shirts
                </a>
                <a href="{{ route('category.show', 'watches') }}" class="block text-center bg-green-500 text-white py-3 rounded-lg hover:bg-green-600 transition">
                    Watches
                </a>
                <a href="{{ route('category.show', 'jeans') }}" class="block text-center bg-red-500 text-white py-3 rounded-lg hover:bg-red-600 transition">
                    Jeans
                </a>
                <a href="{{ route('category.show', 'shoes') }}" class="block text-center bg-yellow-500 text-white py-3 rounded-lg hover:bg-yellow-600 transition">
                    Shoes
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
