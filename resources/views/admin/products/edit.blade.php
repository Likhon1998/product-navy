@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="bg-gradient-to-r from-purple-500 to-pink-500 text-white p-4 rounded-lg shadow mb-6">
        <h2 class="text-2xl font-bold">Edit Product</h2>
    </div>

    @if($errors->any())
        <div class="mb-4 p-3 bg-red-100 text-red-800 rounded-lg shadow">
            <ul class="list-disc pl-5">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="bg-white shadow rounded-lg p-6">
        <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Product Name</label>
                <input type="text" name="product_name" value="{{ old('product_name', $product->product_name) }}" class="w-full border border-gray-300 p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Category</label>
                <input type="text" name="category" value="{{ old('category', $product->category) }}" class="w-full border border-gray-300 p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Price (৳)</label>
                <input type="number" name="price" value="{{ old('price', $product->price) }}" step="0.01" class="w-full border border-gray-300 p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Current Image</label>
                @if($product->product_image)
                    <img src="{{ asset('storage/' . $product->product_image) }}" class="h-20 w-20 object-cover rounded-lg mb-2 border border-gray-200">
                @else
                    <p class="text-gray-400 italic">No image</p>
                @endif
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Change Product Image</label>
                <input type="file" name="product_image" class="w-full text-gray-700">
            </div>

            <div class="flex justify-end space-x-2">
                <a href="{{ route('admin.products.index') }}" class="bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded-lg shadow">Cancel</a>
                <button type="submit" class="bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded-lg shadow">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
