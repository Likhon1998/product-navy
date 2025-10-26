@extends('layouts.frontend.app')

@section('title', 'BN History')

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
            {{-- Menu levels will be dynamically injected --}}
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
                    <span class="lang-en">History Of BNFWA</span>
                    <span class="lang-bn">বিএনএফডব্লিউএ এর ইতিহাস</span>
                </h1>
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
                        <div class="card-body">
                            <div class="lang-en">
                                <p>
                                    Bangladesh Navy Family Welfare Association (BNFWA) started its activities on 12 March 1976 in a very limited range. BNFWA Central Committee is mainly responsible for planning, directing, financing and sub-regional cooperation under the supervision of the President of the Association. On the other hand, regional committee manage and coordinate the overall activities of Dhaka, Chattogram, Khulna
                                    <img class="alignright" width="200" src="{{ asset('assets/images/history.png') }}">
                                    regions and Kaptai, Pekua, Mongla & Patuakhali sub-regions. For the sake of administrative decentralization, each region is governed by the designated Chairman and its sub-regional Committee by deputy chairman. It is to be noted that the spouse of Chief of Naval Staff of Bangladesh Navy, by her social position/respect, is the President of BNFWA as the ex-officio chairperson.
                                </p>

                                <p>
                                    Bangladesh Navy Family Welfare Association is working tirelessly to ensure modern education, culture, harmony, social facilities for the members of the naval family along with proper guidance to develop the intelligence & mind of the children of the naval family.
                                </p>

                                <p>
                                    Besides, by running Ashar Alo School for children with special needs and by performing various social responsibilities including serving humanity in various natural disasters and calamities of the country. Besides making important contribution to the welfare of the country and the nation, Bangladesh navy is brightening the images of the Bangladesh navy in the international environment by crossing the boundaries of the country.
                                </p>
                            </div>

                            <div class="lang-bn">
                                <p>
                                    বাংলাদেশ নৌবাহিনী পরিবার কল্যাণ সংঘ ১২ মার্চ ১৯৭৬ সালে সর্বপ্রথম সীমিত পরিসরে এর কার্যক্রম শুরু করে। কেন্দ্রীয় কমিটি মুলত এই সংঘের সভানেত্রীর তত্ত্বাবধানে পরিকল্পনা, নির্দেশনা, অর্থায়ন এবং আন্তঃআঞ্চলিক সমন্বয়ের কাজ করে। অপরদিকে, আঞ্চলিক কমিটিগুলো ঢাকা, চট্টগ্রাম, খুলনা অঞ্চল এবং কাপ্তাই, পেকুয়া, মোংলা ও পটুয়াখালী উপ- অঞ্চলের সার্বিক কার্যক্রম পরিচালনা ও সমন্বয় করে।
                                    <img class="alignright" width="150" src="{{ asset('assets/images/history.png') }}">
                                    প্রশাসনিক বিকেন্দ্রীকরণের স্বার্থে প্রতিটি অঞ্চল মনোনীত চেয়ারম্যান এবং উপ-আঞ্চলিক কমিটি ডেপুটি চেয়ারম্যান দ্বারা পরিচালিত হয়। বাংলাদেশ নৌবাহিনীর মাননীয় নৌবাহিনী প্রধানের পত্নী পদাধিকার বলে সভানেত্রী হিসেবে দায়িত্ব পালন করেন।
                                </p>

                                <p>
                                    নৌপরিবারের সদস্যদের আধুনিক শিক্ষা, সংস্কৃতি, সম্প্রীতি, নৌপরিবারের সদস্যদের মেধা ও মননের বিকাশ সাধনে সঠিক দিকনির্দেশনাসহ সামাজিক সুযোগ-সুবিধা নিশ্চিতকরণের লক্ষ্যে বাংলাদেশ নৌবাহিনী পরিবার কল্যাণ সংঘ নিরলসভাবে কাজ করে যাচ্ছে। এছাড়া, দেশের নানা প্রাকৃতিক দুর্যোগ ও বিপর্যয়ে আর্তমানবতার সেবাসহ বিভিন্ন সামাজিক দায়িত্ব পালন করে দেশ ও জাতির কল্যাণে গুরুত্বপূর্ণ অবদান রাখার পাশাপাশি বিশেষ চাহিদা সম্পন্ন শিশুদের জন্য আশার আলো স্কুল পরিচালনার মাধ্যমে দেশের গন্ডি পেরিয়ে আন্তর্জাতিক পরিমন্ডলে বাংলাদেশ নৌবাহিনীর ভাবমূর্তি বহুগুনে উজ্জ্বলতর করছে।
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
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
                            <li><a href="#" target="_blank"><i class="fab fa-x-twitter"></i></a></li>
                            <li><a href="https://www.youtube.com/@bangladeshnavy4191" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3">
                    <div class="footer-widget">
                        <h3 class="widget-title">Contact</h3>
                        <ul>
                            <li><a href="#"><i class="fas fa-location-pin"></i> BNFWA Central Office <br>Naval Headquarters,<br>Banani, Dhaka-1213</a></li>
                            <li><i class="fas fa-phone-alt"></i> Treasurer <a href="#">+88 01769-702716</a></li>
                            <li><a href="#"><i class="fas fa-envelope"></i> bnfwa@navy.mil.bd</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3 class="widget-title">About Us</h3>
                        <ul>
                            <li><a href="history.html">History of BNFWA</a></li>
                            <li><a href="chief-message.html">Chief Patron's Message</a></li>
                            <li><a href="president.html">President's statement</a></li>
                            <li><a href="vision-mission.html">Vision and Mission</a></li>
                            <li><a href="former-president.html">Former President</a></li>
                            <li><a href="organization.html">Organization</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3 class="widget-title">What We Do</h3>
                        <ul>
                            <li><a href="role-of-bnfwa.html">Role of BNFWA</a></li>
                            <li><a href="ladies-club.html">BN Ladies Club</a></li>
                            <li><a href="shishu-niketon.html">Nou Paribar Shishu Niketon School</a></li>
                            <li><a href="ashar-alo.html">Ashar Alo School</a></li>
                            <li><a href="day-care-centre.html">Day Care Centre</a></li>
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
