@extends('layouts.frontend.app')

@section('title', 'News Details')

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
                        <button><span></span></button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="page-section">
            <div class="container">
                <div class="row row-gap-3 my-4">
                    <div class="col-lg-9 col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="news-card-thumb">
                                    <a href="">
                                        <img alt="" src="{{ asset('assets/images/event/news-full-image.jpg') }}">
                                    </a>
                                </div>
                                <div class="news-card-info">
                                    <ul>
                                        <li><a href="">Visit Programs</a></li>
                                        <li><a href="">October 05, 2020</a></li>
                                    </ul>

                                    <h1 class="h4 mt-4">
                                        Chief of Naval staff visits the flood affected people of Fulgengi Upazila, Feri on 27 Aug 2024
                                    </h1>
                                </div>
                                <div class="news-card-details">
                                    <p>
                                        On August 27, 2024, Admiral M Nazmul Hassan, the Chief of Naval Staff, visited the flood-affected areas of Fulgazi Upazila in Feni District. During his visit, he conducted on-site inspections of various flood-stricken locations in Fulgazi and engaged in discussions with the local populace and concerned authorities. He provided necessary guidance on rescue operations, relief distribution, and the provision of medical services.
                                    </p>

                                    <p>It is noteworthy that the Bangladesh Navy swiftly initiated rescue, relief, and medical services in the flood-affected areas to control the flood situation. The naval contingent in Fulgazi has so far rescued several thousand people and arranged safe shelter for them. Additionally, the Navy has established a 30-bed field hospital in the upazila to provide medical services to those affected by the flood.</p>
                                    <p>
                                        The Navy has always stood by the people in facing floods, disasters, and other adverse situations and will continue to do so in the future.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="widget">
                            <h3 class="widget-title"> News Categories </h3>
                            <div class="widget-body">
                                <ul class="news-category-vertical-list">
                                    <li><a href="">Exercise</a></li>
                                    <li><a href="">Visit Programs</a></li>
                                    <li><a href="">Headlines Around The Fleet</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h2 class="mb-2 mt-5 h4">Relative News </h2>
                    </div>
                </div>
                <div class="row row-gap-3 my-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="news-card">
                            <div class="news-card-thumb">
                                <a href="news-details.html">
                                    <img alt="" src="{{ asset('assets/images/event/news-01.jpg') }}">
                                </a>
                            </div>
                            <div class="news-card-info">
                                <h3>
                                    <a href="news-details.html">
                                        Chief of Naval staff visits the flood affected people of Fulgengi Upazila, Feri on 27 Aug 2024
                                    </a>
                                </h3>
                                <ul>
                                    <li><a href="">Visit Programs</a></li>
                                    <li><a href=""> 27 Aug 2024</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="news-card">
                            <div class="news-card-thumb">
                                <a href="news-details.html">
                                    <img alt="" src="{{ asset('assets/images/event/news-02.jpg') }}">
                                </a>
                            </div>
                            <div class="news-card-info">
                                <h3>
                                    <a href="news-details.html">
                                        Short Service Commissioned Officers (DEO 2025 A) Batch Final Exam is going to be held at 01 to 06 September 2024
                                    </a>
                                </h3>
                                <ul>
                                    <li><a href="">Exam</a></li>
                                    <li><a href=""> 27 Aug 2024</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="news-card">
                            <div class="news-card-thumb">
                                <a href="news-details.html">
                                    <img alt="" src="{{ asset('assets/images/event/news-03.jpg') }}">
                                </a>
                            </div>
                            <div class="news-card-info">
                                <h3>
                                    <a href="news-details.html">
                                        Bangladesh Navy is helping the affected people of Paikgacha Khulna.
                                    </a>
                                </h3>
                                <ul>
                                    <li><a href="">Exercise</a></li>
                                    <li><a href=""> 26 Aug 2024</a></li>
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
                            <h3 class="h6 mt-4">Follow us</h3>
                            <div>
                                <ul class="social-media">
                                    <li><a href="https://www.facebook.com/bangladeshnavy.mil.bd" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-x-twitter"></i></a></li>
                                    <li><a href="https://www.youtube.com/@bangladeshnavy4191" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href=""><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3">
                        <div class="footer-widget">
                            <h3 class="widget-title">Contact</h3>
                            <div class="widget-address">
                                <ul>
                                    <li><a href=""><i class="fas fa-location-pin"></i> BNFWA Central Office <br> Naval Headquarters,<br> Banani, Dhaka-1213</a></li>
                                    <li><i class="fas fa-phone-alt"></i> Treasurer <a href=""> +88 01769-702716</a></li>
                                    <li><a href=""><i class="fas fa-envelope"></i> bnfwa@navy.mil.bd</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="footer-widget">
                            <h3 class="widget-title">About Us</h3>
                            <div class="widget-menu">
                                <ul>
                                    <li><i class="fa fa-chevron-right"></i> <a href="history.html">History of BNFWA</a></li>
                                    <li><i class="fa fa-chevron-right"></i> <a href="chief-message.html">Chief Patron's Message</a></li>
                                    <li><i class="fa fa-chevron-right"></i> <a href="president.html">President's Statement</a></li>
                                    <li><i class="fa fa-chevron-right"></i> <a href="vision-mission.html">Vision and Mission</a></li>
                                    <li><i class="fa fa-chevron-right"></i> <a href="former-president.html">Former President</a></li>
                                    <li><i class="fa fa-chevron-right"></i> <a href="organization.html">Organization</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="footer-widget">
                            <h3 class="widget-title">What We Do</h3>
                            <div class="widget-menu">
                                <ul>
                                    <li><i class="fa fa-chevron-right"></i> <a href="role-of-bnfwa.html">Role of BNFWA</a></li>
                                    <li><i class="fa fa-chevron-right"></i> <a href="ladies-club.html">BN Ladies Club</a></li>
                                    <li><i class="fa fa-chevron-right"></i> <a href="shishu-niketon.html">Nou Paribar Shishu Niketon School</a></li>
                                    <li><i class="fa fa-chevron-right"></i> <a href="ashar-alo.html">Ashar Alo School</a></li>
                                    <li><i class="fa fa-chevron-right"></i> <a href="day-care-centre.html">Day Care Centre</a></li>
                                </ul>
                            </div>
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
