<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Products</title>
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@400;500;700&family=Tiro+Bangla:ital@0;1&display=swap"
          rel="stylesheet">
    <link href="{{ asset('assets/css/swiper-bundle.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/fontawesome-all.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/app-style.css') }}" rel="stylesheet"/>
</head>
<body>

<div class="preloader-wrapper">
    <div class="preloader"></div>
</div>

<header class="site-header">
    <div class="main-header">
        <div class="container-xl">
            <div class="row">
                <div class="col">
                    <div class="localization-trigger">
                        <button class="lang-btn-en" onclick="toggleLanguage('en')">En</button>
                        <button class="lang-btn-bn" onclick="toggleLanguage('bn')">Bn</button>
                    </div>
                </div>
            </div>
            <div class="main-header-inner">
                <div class="header-logo">
                    <a href="{{ url('/') }}">
                        <img alt="BNFWA" height="55" width="219" src="{{ asset('assets/images/logo-home.svg') }}"/>
                    </a>
                </div>
                <div class="header-notices">
                    <p>
                        <span class="lang-en">RECRUITING NOW</span>
                        <span class="lang-bn">নিয়োগ চলছে</span>
                        <a href="https://joinnavy.navy.mil.bd/" target="_blank">
                            <span class="lang-en">EXPLORE NAVY CAREERS</span>
                            <span class="lang-bn">নৌবাহিনীর নিয়োগ দেখুন</span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="inner-page-banner">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1><span class="lang-en">Products</span> <span class="lang-bn">Products</span></h1>
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

                        {{-- ✅ Dynamic Products --}}
                        @forelse($products as $product)
                            <a class="product-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                @if($product->product_image)
                                    <img src="{{ asset('storage/' . $product->product_image) }}" 
                                         alt="{{ $product->product_name }}" class="img-fluid">
                                @else
                                    <img src="{{ asset('assets/images/no-image.png') }}" alt="No image" class="img-fluid">
                                @endif
                                <div>
                                    <div>
                                        <h3 class="h5">{{ $product->product_name ?? 'Unnamed Product' }}</h3>
                                        @if($product->category)
                                            <small class="text-muted">{{ $product->category }}</small>
                                        @endif
                                        @if($product->price)
                                            <p class="mt-2 fw-bold">৳ {{ number_format($product->price, 2) }}</p>
                                        @endif
                                    </div>
                                </div>
                            </a>
                        @empty
                            <p class="text-center">No products available yet.</p>
                        @endforelse

                    </div>
                </div>
            </div>

            {{-- Product Inquiry Modal --}}
            <div class="row">
                <div class="col">
                    <div class="modal fade product-inquiry-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Product Inquiry</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-4">
                                    <div id="modal-product-content"></div>
                                    <form>
                                        <input type="hidden" name="product_name" id="product_name">
                                        <div class="form-group mb-3">
                                            <label>Your Name</label>
                                            <input name="name" type="text" class="form-control" required>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group mb-3">
                                                    <label>Your Email</label>
                                                    <input name="email" type="text" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group mb-3">
                                                    <label>Your Phone</label>
                                                    <input name="phone" type="text" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Message</label>
                                            <textarea name="message" class="form-control" rows="4"></textarea>
                                        </div>
                                        <div class="form-group mb-3">
                                            <button type="submit" class="btn btn-primary w-100">Send</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>

<footer class="site-footer">
    <div class="main-footer">
        <div class="container-xl">
            <div class="row">
                <div class="col-md-4 col-lg-3">
                    <div class="footer-widget">
                        <div class="logo-blink">
                            <a href="https://joinnavy.navy.mil.bd/" target="_blank">
                                <img alt="BNFWA" height="55" width="219" src="{{ asset('assets/images/logo-footer.svg') }}"/>
                            </a>
                        </div>
                        <h3 class="h6 mt-4">Follow us</h3>
                        <ul class="social-media">
                            <li><a href="https://www.facebook.com/bangladeshnavy.mil.bd" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-x-twitter"></i></a></li>
                            <li><a href="https://www.youtube.com/@bangladeshnavy4191" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="footer-widget">
                        <h3 class="widget-title">Contact</h3>
                        <ul>
                            <li><i class="fas fa-location-pin"></i> BNFWA Central Office<br>Naval Headquarters,<br>Banani, Dhaka-1213</li>
                            <li><i class="fas fa-phone-alt"></i> Treasurer <a href="#">+88 01769-702716</a></li>
                            <li><i class="fas fa-envelope"></i> <a href="mailto:bnfwa@navy.mil.bd">bnfwa@navy.mil.bd</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container-xl text-center">
            &copy; Copyright Bangladesh Navy
        </div>
    </div>
</footer>

<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/animate.min.js') }}"></script>
<script src="{{ asset('assets/js/custom-script.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
