<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6"> <!-- Reduced padding for a more balanced appearance -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold">Categories</h3>
                        <!-- Add Product Button -->
                        <a href="{{ route('product.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                            Add Product
                        </a>
                    </div>
                    
                    <div class="mt-4 flex space-x-4">
                        <!-- Category Buttons -->
                        <a href="{{ route('category', ['name' => 'shirts']) }}" class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600">
                            Shirts
                        </a>
                        <a href="{{ route('category', ['name' => 'watches']) }}" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600">
                            Watches
                        </a>
                        <a href="{{ route('category', ['name' => 'jeans']) }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                            Jeans
                        </a>
                        <a href="{{ route('category', ['name' => 'shoes']) }}" class="px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600">
                            Shoes
                        </a>
                    </div>
                </div>
            </div>
<<<<<<< HEAD
=======

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
>>>>>>> parent of bc86feb (migrations)
        </div>
    </div>
</x-app-layout>
