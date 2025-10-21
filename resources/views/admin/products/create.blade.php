@extends('layouts.admin')

@section('title', '')

@section('content')
    <link href="{{ asset('assets/css/swiper-bundle.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/fontawesome-all.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/app-style.css') }}" rel="stylesheet"/>
<div class="max-w-md mx-auto py-6 sm:px-6 lg:px-8">
    
    <!-- Card -->
    <div class="bg-white shadow rounded-lg p-4 sm:p-6">
        <h2 class="text-base sm:text-sm font-semibold text-gray-800 mb-4 text-center">Add New Product</h2>

        <!-- Validation Errors -->
        @if($errors->any())
            <div class="mb-3 p-2 bg-red-100 text-red-800 rounded text-xs sm:text-sm">
                <ul class="list-disc pl-5">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form -->
        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label class="block text-gray-700 text-xs sm:text-sm font-medium mb-1">Product Name</label>
                <input type="text" name="product_name" value="{{ old('product_name') }}" 
                       class="w-full border border-gray-300 p-2 rounded text-xs sm:text-sm focus:outline-none focus:ring-2 focus:ring-gray-400">
            </div>

            <div class="mb-3">
                <label class="block text-gray-700 text-xs sm:text-sm font-medium mb-1">Category</label>
                <input type="text" name="category" value="{{ old('category') }}" 
                       class="w-full border border-gray-300 p-2 rounded text-xs sm:text-sm focus:outline-none focus:ring-2 focus:ring-gray-400">
            </div>

            <div class="mb-3">
                <label class="block text-gray-700 text-xs sm:text-sm font-medium mb-1">Price</label>
                <input type="number" name="price" value="{{ old('price') }}" step="0.01" 
                       class="w-full border border-gray-300 p-2 rounded text-xs sm:text-sm focus:outline-none focus:ring-2 focus:ring-gray-400">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-xs sm:text-sm font-medium mb-1">Product Image</label>
                <input type="file" name="product_image" class="w-full text-xs sm:text-sm text-gray-700">
            </div>

            <!-- Buttons -->
            <div class="flex justify-center space-x-2">
                <a href="{{ route('admin.products.index') }}" 
                   class="btn btn-danger sm:text-sm">
                   Cancel
                </a>
                <button type="submit" 
                        class="btn btn-info sm:text-sm">
                    Create
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
