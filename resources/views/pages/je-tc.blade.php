@extends('layouts.frontend.app')

@section('title', 'JC & TC')

@section('content')

<!-- Preloader -->
<div class="preloader-wrapper">
    <div class="preloader"></div>
</div>

<!-- Floating Menu -->
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

<!-- Header -->
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
                            <span class="lang-bn">নৌবাহিনীর নিয়োগ দেখুন  </span>
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

<!-- Inner Page Banner -->
<section class="inner-page-banner">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>
                    <span class="lang-en"> Jhinuk Crafting & Training Center (JC & TC)</span>
                    <span class="lang-bn">ঝিনুক ক্র্যাফটিং এ্যন্ড ট্রেনিং সেন্টার (জেসি  এ্যান্ড টিসি)</span>
                </h1>
            </div>
        </div>
    </div>
</section>

<main>
    <!-- JC & TC Locations -->
    <section class="page-section jhinuk-shop-section">
        <div class="container">

            {{-- English Locations --}}
            <div class="row justify-content-center lang-en">
                @php
                    $locations_en = [
                        ['Jhinuk Dhaka', 'Mirpur-14, Dhaka'],
                        ['Jhinuk Chattogram', 'Navy Hospital Gate, New Mooring, Chattogram'],
                        ['Jhinuk Chattogram', 'Chattogram Boat Club, North Patenga, Chattogram'],
                        ['Jhinuk Chattogram', 'Bangladesh Naval Academy, Patenga, Chattogram'],
                        ['Jhinuk Chattogram', 'Lovelane, Chattogram'],
                        ['Jhinuk Cox’s Bazar', 'Swapnil Sindhu, Cox’s Bazar'],
                        ['Jhinuk Khulna', 'Sailors Residential Area, Mujgunni, Khalishpur, Khulna'],
                        ['Jhinuk Solam', 'Solam, Lobonchara, Khulna'],
                        ['Jhinuk Mongla', 'Digraj, Mongla'],
                        ['Jhinuk Kaptai', 'BNS SHAHEED MOAZZAM, Kaptai, Rangamati'],
                    ];
                @endphp

                @foreach ($locations_en as $loc)
                    <div class="col-md-3 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="h4">{{ $loc[0] }}</h3>
                                <p>{{ $loc[1] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Bangla Locations --}}
            <div class="row justify-content-center lang-bn">
                @php
                    $locations_bn = [
                        ['ঝিনুক ঢাকা', 'মিরপুর-১৪, ঢাকা।'],
                        ['ঝিনুক চট্টগ্রাম', 'নেভী হাসপাতাল গেট, নিউমুরিং, চট্টগ্রাম।'],
                        ['ঝিনুক চট্টগ্রাম', 'চট্টগ্রাম বোট ক্লাব, উত্তর পতেঙ্গা, চট্টগ্রাম।'],
                        ['ঝিনুক চট্টগ্রাম', 'বাংলাদেশ নেভাল একাডেমি, পতেঙ্গা, চট্টগ্রাম।'],
                        ['ঝিনুক চট্টগ্রাম', 'লাভলেইন, চট্টগ্রাম।'],
                        ['ঝিনুক কক্সবাজার', 'হোটেল স্বপ্নীল সিন্ধু, কক্সবাজার।'],
                        ['ঝিনুক খুলনা', 'নাবিক আবাসিক এলাকা, মুজগুন্নী, খালিশপুর, খুলনা।'],
                        ['ঝিনুক সোলাম', 'সোলাম, লবনচরা, খুলনা।'],
                        ['ঝিনুক মোংলা', 'দিগরাজ, মোংলা।'],
                        ['ঝিনুক কাপ্তাই', 'বিএনএস শহীদ মোয়াজ্জম, কাপ্তাই, রাঙ্গামাটি'],
                    ];
                @endphp

                @foreach ($locations_bn as $loc)
                    <div class="col-md-3 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="h4">{{ $loc[0] }}</h3>
                                <p>{{ $loc[1] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
</main>

<!-- Footer -->
<footer class="site-footer">
    <div class="main-footer">
        <div class="container-xl">
            <div class="row">

                <!-- Footer Widget 1 -->
                <div class="col-md-4 col-lg-3">
                    <div class="footer-widget">
                        <div class="logo-blink">
                            <a href="https://joinnavy.navy.mil.bd/" target="_blank">
                                <img alt="BNFWA" height="55" width="219" src="{{ asset('assets/images/logo-footer.svg') }}"/>
                            </a>
                        </div>
                        <h3 class="h6 mt-4">Follow us </h3>
                        <div>
                            <ul class="social-media">
                                <li><a href="https://www.facebook.com/bangladeshnavy.mil.bd" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-x-twitter"></i></a></li>
                                <li><a href="https://www.youtube.com/@bangladeshnavy4191" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget 2 -->
                <div class="col-md-4 col-lg-3">
                    <div class="footer-widget">
                        <h3 class="widget-title">Contact</h3>
                        <div class="widget-address">
                            <ul>
                                <li><a href="#"><i class="fas fa-location-pin"></i> BNFWA Central Office <br>
                                    Naval Headquarters,<br>
                                    Banani, Dhaka-1213
                                </a></li>
                                <li>
                                    <i class="fas fa-phone-alt"></i> Treasurer <a href="#"> +88 01769-702716</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-envelope"></i> bnfwa@navy.mil.bd</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget 3 -->
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3 class="widget-title">About Us</h3>
                        <div class="widget-menu">
                            <ul>
                                <li><i class="fa fa-chevron-right"></i> <a href="#">History of BNFWA</a></li>
                                <li><i class="fa fa-chevron-right"></i> <a href="#">Chief Patron's Message</a></li>
                                <li><i class="fa fa-chevron-right"></i> <a href="#">President's statement</a></li>
                                <li><i class="fa fa-chevron-right"></i> <a href="#">Vision and Mission</a></li>
                                <li><i class="fa fa-chevron-right"></i> <a href="#">Former President</a></li>
                                <li><i class="fa fa-chevron-right"></i> <a href="#">Organization</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget 4 -->
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3 class="widget-title">What We Do</h3>
                        <div class="widget-menu">
                            <ul>
                                <li><i class="fa fa-chevron-right"></i> <a href="#">Role of BNFWA</a></li>
                                <li><i class="fa fa-chevron-right"></i> <a href="#">BN Ladies Club</a></li>
                                <li><i class="fa fa-chevron-right"></i> <a href="#">Nou Paribar Shishu Niketon School</a></li>
                                <li><i class="fa fa-chevron-right"></i> <a href="#">Ashar Alo School</a></li>
                                <li><i class="fa fa-chevron-right"></i> <a href="#">Day Care Centre</a></li>
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
