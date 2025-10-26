@extends('layouts.frontend.app')

@section('title', 'Product Form')

@section('content')

    <div class="preloader-wrapper">
        <div class="preloader"></div>
    </div>

    <div class="floating-menu-wrapper">
        <div class="floating-menu-inner">
            <button class="close-floating-menu">
                <i class="fas fa-close"></i>
            </button>
            <div class="menu-container" id="menu-container"></div>
        </div>
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
                            <img alt="BNFWA" height="55" width="219" src="{{ asset('assets/images/logo-home.svg') }}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

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
                                <div class="form-group">
                                    <label for="productName" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" id="productName" placeholder="Enter product name" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="productDescription" class="form-label">Product Description</label>
                                    <textarea class="form-control" id="productDescription" rows="4" placeholder="Enter product description" readonly></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="productPrice" class="form-label">Product Price</label>
                                    <input type="number" class="form-control" id="productPrice" placeholder="Enter product price" readonly>
                                </div>

                                <div class="form-group">
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

    <footer class="site-footer">
        <div class="main-footer">
            <div class="container-xl">
                <div class="row">
                    <div class="col-md-4 col-lg-3">
                        <div class="footer-widget">
                            <div class="logo-blink">
                                <a href="https://joinnavy.navy.mil.bd/" target="_blank">
                                    <img alt="BNFWA" height="55" width="219" src="{{ asset('assets/images/logo-footer.svg') }}">
                                </a>
                            </div>
                            <h3 class="h6 mt-4">Follow us</h3>
                            <ul class="social-media">
                                <li><a href="https://www.facebook.com/bangladeshnavy.mil.bd" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-x-twitter"></i></a></li>
                                <li><a href="https://www.youtube.com/@bangladeshnavy4191" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3">
                        <div class="footer-widget">
                            <h3 class="widget-title">Contact</h3>
                            <ul class="widget-address">
                                <li>
                                    <a href="#"><i class="fas fa-location-pin"></i>
                                        BNFWA Central Office <br>
                                        Naval Headquarters,<br>
                                        Banani, Dhaka-1213
                                    </a>
                                </li>
                                <li><i class="fas fa-phone-alt"></i> Treasurer <a href="#">+88 01769-702716</a></li>
                                <li><a href="#"><i class="fas fa-envelope"></i> bnfwa@navy.mil.bd</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="footer-widget">
                            <h3 class="widget-title">About Us</h3>
                            <ul class="widget-menu">
                                <li><i class="fa fa-chevron-right"></i> <a href="{{ url('history') }}">History of BNFWA</a></li>
                                <li><i class="fa fa-chevron-right"></i> <a href="{{ url('chief-message') }}">Chief Patron's Message</a></li>
                                <li><i class="fa fa-chevron-right"></i> <a href="{{ url('president') }}">President's Statement</a></li>
                                <li><i class="fa fa-chevron-right"></i> <a href="{{ url('vision-mission') }}">Vision and Mission</a></li>
                                <li><i class="fa fa-chevron-right"></i> <a href="{{ url('former-president') }}">Former President</a></li>
                                <li><i class="fa fa-chevron-right"></i> <a href="{{ url('organization') }}">Organization</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="footer-widget">
                            <h3 class="widget-title">What We Do</h3>
                            <ul class="widget-menu">
                                <li><i class="fa fa-chevron-right"></i> <a href="{{ url('role-of-bnfwa') }}">Role of BNFWA</a></li>
                                <li><i class="fa fa-chevron-right"></i> <a href="{{ url('ladies-club') }}">BN Ladies Club</a></li>
                                <li><i class="fa fa-chevron-right"></i> <a href="{{ url('shishu-niketon') }}">Nou Paribar Shishu Niketon School</a></li>
                                <li><i class="fa fa-chevron-right"></i> <a href="{{ url('ashar-alo') }}">Ashar Alo School</a></li>
                                <li><i class="fa fa-chevron-right"></i> <a href="{{ url('day-care-centre') }}">Day Care Centre</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="footer-copyright">
        <div class="container-xl">
            <div class="row">
                <div class="col">&copy; Copyright Bangladesh Navy</div>
            </div>
        </div>
    </div>
</footer>

@endsection
