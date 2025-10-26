@extends('layouts.frontend.app')

@section('title', 'News')

@section('content')

<div class="preloader-wrapper">
    <div class="preloader"></div>
</div>

<div class="floating-menu-wrapper">
    <div class="floating-menu-inner">
        <button class="close-floating-menu">
            <i class="fas fa-close"></i>
        </button>
        <div class="menu-container" id="menu-container">
            <!-- Menu levels will be dynamically injected here -->
        </div>
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
                        <img alt="BNFWA" height="55" width="219" src="{{ asset('assets/images/logo-home.svg') }}"/>
                    </a>
                </div>
                <div class="header-notices">
                    <p>
                        <span class="lang-en"> RECRUITING NOW</span>
                        <span class="lang-bn"> নিয়োগ চলছে </span>
                        <a href="https://joinnavy.navy.mil.bd/" target="_blank">
                            <span class="lang-en">EXPLORE NAVY CAREERS</span>
                            <span class="lang-bn">নৌবাহিনীর নিয়োগ দেখুন</span>
                        </a>
                    </p>
                </div>
                <div class="floating-menu-trigger">
                    <button>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="inner-page-banner">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>News</h1>
            </div>
        </div>
    </div>
</section>

<main>
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="news-category-horizontal-list">
                        <li class="current-category-item">
                            <a href="#">All</a>
                        </li>
                        <li><a href="#">Exercise</a></li>
                        <li><a href="#">Visit Programs</a></li>
                        <li><a href="#">Headlines Around The Fleet</a></li>
                    </ul>
                </div>
            </div>

            <div class="row row-gap-3 my-4">
                <div class="col-lg-4 col-md-6">
                    <div class="news-card">
                        <div class="news-card-thumb">
                            <a href="{{ url('news-details') }}">
                                <img alt="" src="{{ asset('assets/images/event/news-01.jpg') }}">
                            </a>
                        </div>
                        <div class="news-card-info">
                            <h3>
                                <a href="{{ url('news-details') }}">
                                    Chief of Naval staff visits the flood affected people of Fulgengi Upazila, Feri on 27 Aug 2024
                                </a>
                            </h3>
                            <ul>
                                <li><a href="#">Visit Programs</a></li>
                                <li><a href="#">27 Aug 2024</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="news-card">
                        <div class="news-card-thumb">
                            <a href="{{ url('news-details') }}">
                                <img alt="" src="{{ asset('assets/images/event/news-02.jpg') }}">
                            </a>
                        </div>
                        <div class="news-card-info">
                            <h3>
                                <a href="{{ url('news-details') }}">
                                    Short Service Commissioned Officers (DEO 2025 A) Batch Final Exam is going to be held at 01 to 06 September 2024
                                </a>
                            </h3>
                            <ul>
                                <li><a href="#">Exam</a></li>
                                <li><a href="#">27 Aug 2024</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="news-card">
                        <div class="news-card-thumb">
                            <a href="{{ url('news-details') }}">
                                <img alt="" src="{{ asset('assets/images/event/news-03.jpg') }}">
                            </a>
                        </div>
                        <div class="news-card-info">
                            <h3>
                                <a href="{{ url('news-details') }}">
                                    Bangladesh Navy is helping the affected people of Paikgacha Khulna.
                                </a>
                            </h3>
                            <ul>
                                <li><a href="#">Exercise</a></li>
                                <li><a href="#">26 Aug 2024</a></li>
                            </ul>
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
                        <h3 class="h6 mt-4">Follow us </h3>
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
                            <li><i class="fas fa-location-pin"></i> BNFWA Central Office, Naval Headquarters, Banani, Dhaka-1213</li>
                            <li><i class="fas fa-phone-alt"></i> Treasurer <a href="">+88 01769-702716</a></li>
                            <li><i class="fas fa-envelope"></i> <a href="">bnfwa@navy.mil.bd</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3 class="widget-title">About Us</h3>
                        <ul class="widget-menu">
                            <li><a href="{{ url('history') }}">History of BNFWA</a></li>
                            <li><a href="{{ url('chief-message') }}">Chief Patron's Message</a></li>
                            <li><a href="{{ url('president') }}">President's statement</a></li>
                            <li><a href="{{ url('vision-mission') }}">Vision and Mission</a></li>
                            <li><a href="{{ url('former-president') }}">Former President</a></li>
                            <li><a href="{{ url('organization') }}">Organization</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3 class="widget-title">What We Do</h3>
                        <ul class="widget-menu">
                            <li><a href="{{ url('role-of-bnfwa') }}">Role of BNFWA</a></li>
                            <li><a href="{{ url('ladies-club') }}">BN Ladies Club</a></li>
                            <li><a href="{{ url('shishu-niketon') }}">Nou Paribar Shishu Niketon School</a></li>
                            <li><a href="{{ url('ashar-alo') }}">Ashar Alo School</a></li>
                            <li><a href="{{ url('day-care-centre') }}">Day Care Centre</a></li>
                        </ul>
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
