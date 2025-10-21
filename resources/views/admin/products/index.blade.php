@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">

    <!-- Header -->
    <div class="flex justify-between items-center mb-6 bg-gradient-to-r from-blue-600 to-indigo-700 text-white p-4 rounded-lg shadow">
        <h2 class="text-xl sm:text-2xl font-semibold">All Products</h2>
        <a href="{{ route('admin.products.create') }}" 
           class="bg-green-500 hover:bg-green-600 transition text-white px-4 py-2 sm:px-5 sm:py-2 rounded-lg shadow text-sm sm:text-base">
           + Add Product
        </a>
    </div>

    <!-- Success Message -->
    @if(session('success'))
        <div class="mb-4 p-2 sm:p-3 bg-green-100 text-green-800 text-sm sm:text-base rounded-lg shadow">
            {{ session('success') }}
        </div>
    @endif

    <!-- Products Table -->
    <div class="overflow-x-auto bg-white shadow rounded-lg">
        <table class="min-w-full divide-y divide-gray-200 text-sm">
            <thead class="bg-gradient-to-r from-purple-500 to-pink-500 text-white">
                <tr>
                    <th class="px-4 py-2 text-left font-semibold uppercase tracking-wide">Image</th>
                    <th class="px-4 py-2 text-left font-semibold uppercase tracking-wide">Name</th>
                    <th class="px-4 py-2 text-left font-semibold uppercase tracking-wide">Category</th>
                    <th class="px-4 py-2 text-left font-semibold uppercase tracking-wide">Price (৳)</th>
                    <th class="px-4 py-2 text-left font-semibold uppercase tracking-wide">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($products as $product)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-4 py-2">
                        @if($product->product_image)
                            <img src="{{ asset('storage/' . $product->product_image) }}" 
                                 class="h-10 w-10 object-cover rounded border border-gray-200">
                        @else
                            <span class="text-gray-400 italic text-xs">No image</span>
                        @endif
                    </td>
                    <td class="px-4 py-2 font-medium text-gray-800">{{ $product->product_name }}</td>
                    <td class="px-4 py-2 text-gray-600">{{ $product->category }}</td>
                    <td class="px-4 py-2 font-semibold text-gray-900">৳ {{ number_format($product->price, 2) }}</td>
                    <td class="px-4 py-2 space-x-1">
                        <a href="{{ route('admin.products.edit', $product) }}" 
                           class="bg-yellow-400 hover:bg-yellow-500 text-white px-2 py-1 rounded text-xs shadow">
                           Edit
                        </a>
                        <form method="POST" action="{{ route('admin.products.destroy', $product) }}" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    onclick="return confirm('Are you sure you want to delete this product?')" 
                                    class="bg-red-600 hover:bg-red-700 text-white px-2 py-1 rounded text-xs shadow">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-4 py-2 text-center text-gray-500 italic">No products found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
@endsection
