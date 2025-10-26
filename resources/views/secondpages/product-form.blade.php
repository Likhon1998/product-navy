@extends('layouts.frontend.app')

@section('title', 'Product Form')

@section('content')
<section class="inner-page-banner">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>
                    <span class="lang-en">Product Form</span>
                    <span class="lang-bn">পণ্য ফর্ম</span>
                </h1>
            </div>
        </div>
    </div>
</section>

<main>
    <section class="page-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-body p-5">

                            <div class="form-group mb-3">
                                <label for="productName" class="form-label">Product Name</label>
                                <input type="text" class="form-control" id="productName" placeholder="Enter product name" readonly>
                            </div>

                            <div class="form-group mb-3">
                                <label for="productDescription" class="form-label">Product Description</label>
                                <textarea class="form-control" id="productDescription" rows="4" placeholder="Enter product description" readonly></textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="productPrice" class="form-label">Product Price</label>
                                <input type="number" class="form-control" id="productPrice" placeholder="Enter product price" readonly>
                            </div>

                            <div class="form-group mb-3">
                                <label for="productImage" class="form-label">Product Image</label>
                                <input type="file" class="form-control" id="productImage" accept="image/*" disabled>
                            </div>

                            <div class="form-group">
                                <button type="button" class="btn btn-primary">View Product</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
