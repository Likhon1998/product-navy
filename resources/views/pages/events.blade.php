@extends('layouts.frontend.app')

@section('title', 'Events')

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
                            <img src="{{ asset('assets/images/logo-home.svg') }}" alt="BNFWA" width="219" height="55">
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
                    <div class="floating-menu-trigger">
                        <button><span></span></button>
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
                        <span class="lang-en">News and Events</span>
                        <span class="lang-bn">খবর ও অনুষ্ঠান</span>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="page-section">
            <div class="container">
                <div class="row row-gap-3 my-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="news-card">
                            <div class="news-card-thumb">
                                <a href="{{ url('news-details') }}">
                                    <img src="{{ asset('assets/images/event/news-01.jpg') }}" alt="Event 1">
                                </a>
                            </div>
                            <div class="news-card-info">
                                <h3>
                                    <a href="{{ url('news-details') }}">
                                        দরিদ্র শীতার্ত জনসাধারণের মাঝে শীতবস্ত্র বিতরণ করছেন মাননীয় প্রেসিডেন্ট বিএনএফডব্লিউএ
                                    </a>
                                </h3>
                                <ul>
                                    <li><a href="#">27 Aug 2024</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="news-card">
                            <div class="news-card-thumb">
                                <a href="{{ url('news-details') }}">
                                    <img src="{{ asset('assets/images/event/news-02.jpg') }}" alt="Event 2">
                                </a>
                            </div>
                            <div class="news-card-info">
                                <h3>
                                    <a href="{{ url('news-details') }}">
                                        বন্যা কবলিত এলাকায় ত্রাণসামগ্রী বিতরণে সহায়তায় ঢাকা ক্লাব লিঃ এর প্রতিনিধিগণের নিকট থেকে চেক গ্রহণ করছেন মাননীয় প্রেসিডেন্ট বিএনএফডব্লিউএ।
                                    </a>
                                </h3>
                                <ul>
                                    <li><a href="#">27 Aug 2024</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="news-card">
                            <div class="news-card-thumb">
                                <a href="{{ url('news-details') }}">
                                    <img src="{{ asset('assets/images/event/news-03.jpg') }}" alt="Event 3">
                                </a>
                            </div>
                            <div class="news-card-info">
                                <h3>
                                    <a href="{{ url('news-details') }}">
                                        বন্যা কবলিত এলাকায় জরুরি ত্রাণসামগ্রী বিতরণের জন্য শুকনো খাবার প্যাকেটজাত করণ।
                                    </a>
                                </h3>
                                <ul>
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
                                    <img src="{{ asset('assets/images/logo-footer.svg') }}" alt="BNFWA" width="219" height="55">
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
                                    <i class="fas fa-location-pin"></i> BNFWA Central Office<br>
                                    Naval Headquarters,<br>
                                    Banani, Dhaka-1213
                                </li>
                                <li><i class="fas fa-phone-alt"></i> Treasurer <a href="#">+88 01769-702716</a></li>
                                <li><i class="fas fa-envelope"></i> <a href="mailto:bnfwa@navy.mil.bd">bnfwa@navy.mil.bd</a></li>
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

        <div class="footer-copyright">
            <div class="container-xl">
                <div class="row">
                    <div class="col">&copy; Copyright Bangladesh Navy</div>
                </div>
            </div>
        </div>
    </footer>
@endsection
