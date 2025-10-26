@extends('layouts.frontend.app')

@section('title', 'BN Ladies Club')

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
                <h1><span class="lang-en">BN Ladies Club</span><span class="lang-bn">বিএন লেডিস ক্লাব</span></h1>
            </div>
        </div>
    </div>
</section>

<main>
    <section class="page-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-body p-5">
                            <div class="lang-en">
                                <img class="mb-5" src="{{ asset('assets/images/slider-02.jpg') }}" alt="BN Ladies Club">

                                <p>
                                    BN Ladies Club is a welfare organisation, the voluntary work. They run the organisation
                                    based on voluntary work. They are self-motivated and dedicated for overall development
                                    of BN Ladies Club.
                                </p>

                                <p>
                                    President of BNFWA appoints a Chairman of the committee and one Naval officer carrying
                                    out the activities of the Committee as Treasure.
                                </p>

                                <p>
                                    Executive members of the regional committee appoint the general members to promote
                                    cultural harmony. Any planning and implementation for the overall progress and
                                    improvement of the Club are subject to the approval of the Chief Patron BN Ladies Club.
                                </p>
                            </div>

                            <div class="lang-bn">
                                <img class="mb-5" src="{{ asset('assets/images/slider-02.jpg') }}" alt="বিএন লেডিস ক্লাব">

                                <p>
                                    বিএন লেডিস ক্লাব একটি কল্যাণমূলক সংগঠন। স্বেচ্ছাসেবী কাজের ভিত্তিতে সংগঠন পরিচালিত
                                    হয়। বিএন লেডিস ক্লাবের প্রতিটি সদস্য সংঘের সার্বিক উন্নয়নে স্ব-প্রণোদিত এবং নিবেদিত
                                    প্রাণ। প্রধান পৃষ্ঠপোষক কর্তৃক মনোনীত একজন চেয়ারম্যান এবং নৌসদর কর্তৃক মনোনীত একজন
                                    নৌ কর্মকর্তা ট্রেজারার হিসেবে কমিটির কার্যক্রম পরিচালনা করেন।
                                </p>
                                <p>
                                    সাংস্কৃতিক সম্প্রীতি বৃদ্ধির জন্য আঞ্চলিক কমিটির কার্যনির্বাহী সদস্যরা সাধারণ
                                    সদস্যদের নিয়োগ করেন। ক্লাবের সার্বিক অগ্রগতি ও উন্নতির জন্য যেকোন পরিকল্পনা ও
                                    বাস্তবায়ন প্রধান পৃষ্ঠপোষক কর্তৃক অনুমোদিত হয়।
                                </p>
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
                        <h3 class="h6 mt-4">Follow us </h3>
                        <div>
                            <ul class="social-media">
                                <li><a href="https://www.facebook.com/bangladeshnavy.mil.bd" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-x-twitter"></i></a></li>
                                <li><a href="https://www.youtube.com/@bangladeshnavy4191" target="_blank"><i
                                        class="fab fa-youtube"></i></a></li>
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
                                <li><a href=""><i class="fas fa-location-pin"></i> BNFWA Central Office <br>
                                    Naval Headquarters,<br>
                                    Banani, Dhaka-1213
                                </a></li>
                                <li>
                                    <i class="fas fa-phone-alt"></i> Treasurer <a href=""> +88 01769-702716</a>
                                </li>
                                <li>
                                    <a href=""><i class="fas fa-envelope"></i> bnfwa@navy.mil.bd</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3 class="widget-title">About Us</h3>
                        <div class="widget-menu">
                            <ul>
                                <li><i class="fa fa-chevron-right"></i> <a href="{{ url('history') }}">History of BNFWA</a></li>
                                <li><i class="fa fa-chevron-right"></i> <a href="{{ url('chief-message') }}">Chief Patron's Message</a></li>
                                <li><i class="fa fa-chevron-right"></i> <a href="{{ url('president') }}">President's statement</a></li>
                                <li><i class="fa fa-chevron-right"></i> <a href="{{ url('vision-mission') }}">Vision and Mission</a></li>
                                <li><i class="fa fa-chevron-right"></i> <a href="{{ url('former-president') }}">Former President</a></li>
                                <li><i class="fa fa-chevron-right"></i> <a href="{{ url('organization') }}">Organization</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3 class="widget-title">What We Do</h3>
                        <div class="widget-menu">
                            <ul>
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
