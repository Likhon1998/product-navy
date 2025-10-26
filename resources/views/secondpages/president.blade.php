@extends('layouts.frontend.app')
 
@section('title', "President's Statement")
 
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
                    <span class="lang-en">President's Statement</span>
                    <span class="lang-bn">প্রেসিডেন্টের বাণী</span>
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
 
                            {{-- English Content --}}
                            <div class="lang-en">
                                <p><img alt="President" class="alignright" src="{{ asset('assets/images/president.png') }}">
                                    Nadia Sultana has taken over the responsibility of President of Bangladesh Navy Family Welfare Association (BNFWA)
                                    as well as the Chief Patron of Bangladesh Navy Ladies Club on 24 July 2023. She was born in a respectable Muslim family.
                                    She has obtained two bachelor’s degrees, namely Bachelor of Social Science and Bachelor of Education from reputed
                                    universities in Bangladesh. She has been a teacher by profession and has taught in several schools in Dhaka and Chattogram
                                    for a decade and a half.</p>
 
                                <p>She married the then Lt M Nazmul Hassan in 1993. Since then, she has always encouraged and supported the Admiral,
                                    who is now the Chief of Naval Staff. As an able spouse, her contribution has undoubtedly paved the way for the success
                                    of her spouse over the years. She has a strong personality with grace and poise and maintains ethos and values grounded
                                    in traditional Bangla and Islamic culture.</p>
 
                                <p>Since her early days in the Navy Family, she entirely devoted herself to ensuring the welfare and well-being of all Naval families.
                                    She actively participated in BN Ladies Club and BNFWA activities and served in several capacities across the board in all Areas
                                    of Bangladesh Navy. Notably, she has served as the Chairman of BNFWA Chattogram and Dhaka as well as the Chairman of BN Ladies Club Chattogram.</p>
 
                                <p>Nadia Sultana is very active in her personal life and loves to remain busy with various social activities to help the underprivileged
                                    children of the society. She loves music and enjoys travelling. The Admiral and Nadia Sultana are blessed with a son and daughter.</p>
                            </div>
 
                            {{-- Bangla Content --}}
                            <div class="lang-bn">
                                <p><img alt="President" class="alignright" src="{{ asset('assets/images/president.png') }}">
                                    গত ২৪ জুলাই ২০২৩ তারিখে নাদিয়া সুলতানা বাংলাদেশ নৌবাহিনী পরিবার কল্যাণ সংঘ (বানৌপকস) এর প্রেসিডেন্ট এবং বিএন লেডিস ক্লাব এর প্রধান পৃষ্ঠপোষক হিসেবে দায়িত্বভার গ্রহণ করেন।
                                    তিনি বাংলাদেশের একটি সম্ভ্রান্ত মুসলিম পরিবারে জন্মগ্রহণ করেন। শিক্ষা জীবনে তিনি বাংলাদেশের স্বনামধন্য বিশ্ববিদ্যালয় থেকে ব্যাচেলর অব সোশ্যাল সায়েন্স এবং ব্যাচেলর অব এডুকেশন ডিগ্রি অর্জন করেন।
                                    পেশাগত জীবনে তিনি একজন শিক্ষিকা হিসেবে ঢাকা ও চট্টগ্রামের একাধিক খ্যাতনামা শিক্ষা প্রতিষ্ঠানে প্রায় দেড় দশকের বেশি সময় শিক্ষকতা করেছেন।</p>
 
                                <p>নাদিয়া সুলতানা ১৯৯৩ সালে তৎকালীন লেফটেন্যান্ট এম নাজমুল হাসানের সাথে বিবাহবন্ধনে আবদ্ধ হন। দাম্পত্য জীবনের শুরু থেকেই একজন সুযোগ্য জীবনসঙ্গী হিসেবে তিনি কর্মকর্তাকে
                                    নিবেদিত প্রাণে পেশাগত দায়িত্ব পালন করার জন্য সর্বদা গভীরভাবে অনুপ্রাণিত করেন। একজন সহধর্মিণী হিসেবে তার এ উৎসাহ এবং অনুপ্রেরণা নিঃসন্দেহে বর্তমান নৌবাহিনী প্রধানকে সাফল্যের শীর্ষে পৌঁছতে গুরুত্বপূর্ণ ভূমিকা পালন করেছে।
                                    প্রেসিডেন্ট বানৌপকস একজন অনন্য সাধারণ ব্যক্তিত্বসম্পন্ন নারী। তিনি সর্বদা বাংলাদেশের ঐতিহ্য এবং ইসলামী সংস্কৃতির রীতিনীতি ও মূল্যবোধ বজায় রেখে নৌপরিবারে একজন অনুকরণীয় নারী হিসেবে নিজেকে প্রতিষ্ঠিত করেছেন।</p>
 
                                <p>নাদিয়া সুলতানা বানৌপকস চট্টগ্রাম এবং ঢাকা শাখার চেয়ারম্যান এবং বিএন লেডিস ক্লাব চট্টগ্রাম শাখার চেয়ারম্যান হিসেবে দায়িত্ব পালন করেছেন। এ দুটি সংস্থার বিভিন্ন দায়িত্ব পালনকালে তিনি মানবতার কল্যাণ এবং উৎকর্ষতা সাধনে সবসময় নিজেকে নিয়োজিত রেখেছেন।
                                    নৌপরিবারের সদস্যদের জীবনযাত্রার মানোন্নয়নের লক্ষ্যে বিভিন্ন সৃজনশীল পদক্ষেপ গ্রহণের পাশাপাশি নানাবিধ কর্মকান্ডে সকলের অংশগ্রহণের জন্য তিনি সর্বদা উৎসাহ এবং অনুপ্রেরণা যুগিয়েছেন।</p>
 
                                <p>অনুকরণীয় মানবীয় গুণাবলী সম্পন্ন নাদিয়া সুলতানা সমাজের সুবিধাবঞ্চিত শিশুদের সাহায্যার্থে বিভিন্ন সামাজিক কর্মকান্ডে নিজেকে সম্পৃক্ত রাখেন। বিশেষ চাহিদা সম্পন্ন শিশুদের জন্য তিনি সবসময় নিবেদিত প্রাণে কাজ করেছেন।
                                    এই শিশুদের জন্য নৌবাহিনী কর্তৃক পরিচালিত আশার আলো স্কুলের উন্নয়নে তিনি প্রশংসনীয় ভূমিকা রেখে চলেছেন।</p>
 
                                <p>মাননীয় নৌপ্রধান এবং প্রেসিডেন্ট বানৌকপস ব্যক্তিগত জীবনে এক পুত্র এবং এক কন্যা সন্তানের জনক-জননী।</p>
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
 
    <div class="footer-copyright">
        <div class="container-xl">
            <div class="row">
                <div class="col">&copy; Copyright Bangladesh Navy</div>
            </div>
        </div>
    </div>
</footer>
 
@endsection
 
 