@extends('layouts.admin')

@section('title', 'All Products')

@section('content')
    <!-- CSS Links -->
    <link href="{{ asset('assets/css/swiper-bundle.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/fontawesome-all.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/app-style.css') }}" rel="stylesheet"/>

<div class="container-fluid py-3">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-3 bg-white shadow-sm rounded p-2 small">
        <h1 class="h6 mb-0 fw-semibold text">All Products</h1>
        <a href="{{ route('admin.products.create') }}" class="btn btn-info btn-sm py-1 px-2">
            <i class="fas fa-plus me-1"></i> Add Product
        </a>
    </div>

    <!-- Success Message -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show small py-2 mb-2" role="alert">
            <i class="fas fa-check-circle me-1"></i>{{ session('success') }}
            <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Products Table -->
    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-sm table-hover align-middle text-center mb-0 small">
                    <thead class="table-light text-muted">
                        <tr>
                            <th scope="col" class="fw-semibold">#</th>
                            <th scope="col" class="fw-semibold">Image</th>
                            <th scope="col" class="fw-semibold">Name</th>
                            <th scope="col" class="fw-semibold">Category</th>
                            <th scope="col" class="fw-semibold">Price</th>
                            <th scope="col" class="fw-semibold text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $index => $product)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                @if($product->product_image)
                                    <img src="{{ asset('storage/' . $product->product_image) }}" 
                                         class="rounded img-thumbnail mx-auto d-block"
                                         style="height: 35px; width: 35px; object-fit: cover;">
                                @else
                                    <span class="text-muted fst-italic small">No image</span>
                                @endif
                            </td>
                            <td class="fw-semibold text-start">{{ $product->product_name }}</td>
                            <td>{{ $product->category }}</td>
                            <td class="fw-semibold text-success">{{ number_format($product->price, 2) }}</td>
                            <td>
                                <div class="d-flex justify-content-center gap-1">
                                    <a href="{{ route('admin.products.edit', $product) }}" 
                                       class="btn btn-info btn-sm py-0 px-2">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form method="POST" action="{{ route('admin.products.destroy', $product) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                onclick="return confirm('Are you sure you want to delete this product?')"
                                                class="btn btn-danger btn-sm py-0 px-2">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-muted fst-italic py-2 small">No products found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
