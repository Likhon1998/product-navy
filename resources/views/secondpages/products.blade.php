@extends('layouts.frontend.app')

@section('title', 'Products')

@section('content')

<section class="inner-page-banner">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>
                    <span class="lang-en">Products</span>
                    <span class="lang-bn">Products</span>
                </h1>
            </div>
        </div>
    </div>
</section>

<main>
    <section class="page-section">
        <div class="container">
            <div class="row row-gap-4 justify-content-center">
                <div class="col">
                    <div class="products-wrapper">

                        {{-- Dynamic Products --}}
                        @forelse($products as $product)
                            <a class="product-item" href="#" data-bs-toggle="modal" data-bs-target="#productModal-{{ $product->id }}">
                                <img src="{{ $product->product_image ? asset('storage/' . $product->product_image) : asset('assets/images/no-image.png') }}" 
                                     alt="{{ $product->product_name }}" class="img-fluid">
                                <div>
                                    <h3 class="h5">{{ $product->product_name ?? 'Unnamed Product' }}</h3>
                                    @if($product->category)
                                        <small class="text-muted">{{ $product->category }}</small>
                                    @endif
                                    @if($product->price)
                                        <p class="mt-2 fw-bold">৳ {{ number_format($product->price, 2) }}</p>
                                    @endif
                                </div>
                            </a>

                            {{-- Modal per product --}}
                            <div class="modal fade" id="productModal-{{ $product->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5">{{ $product->product_name }}</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('product.inquiry') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <div class="mb-3">
                                                    <label>Your Name</label>
                                                    <input type="text" name="name" class="form-control" required>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 mb-3">
                                                        <label>Your Email</label>
                                                        <input type="email" name="email" class="form-control" required>
                                                    </div>
                                                    <div class="col-sm-6 mb-3">
                                                        <label>Your Phone</label>
                                                        <input type="text" name="phone" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label>Message</label>
                                                    <textarea name="message" class="form-control" rows="4"></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary w-100">Send Inquiry</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @empty
                            <p class="text-center">No products available yet.</p>
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
