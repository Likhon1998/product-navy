@extends('layouts.frontend.app')

@section('title', 'Home')

@section('content')

{{-- Main Slider --}}
<section class="homepage-main-slider">
    <div class="swiperContainer">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img alt="" src="{{ asset('assets/images/slider-06.jpg') }}"/>
                <div class="swiper-slide-content">
                    <div class="container">
                        <h2>Heading Here</h2>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img alt="" src="{{ asset('assets/images/slider-04.jpg') }}"/>
                <div class="swiper-slide-content">
                    <div class="container">
                        <h2>Heading Here</h2>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img alt="" src="{{ asset('assets/images/slider-05.jpg') }}"/>
                <div class="swiper-slide-content">
                    <div class="container">
                        <h2>Heading Here</h2>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img alt="" src="{{ asset('assets/images/slider-01.jpg') }}"/>
                <div class="swiper-slide-content">
                    <div class="container">
                        <h2>Heading Here</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

{{-- Flash News Section --}}
<section class="flash-news-section">
    <div class="flash-news-wrapper swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="#"> নৌসদরের অভ্যন্তরে নিরাপদ পরিবেশে (শীতাতপ নিয়ন্ত্রিত) নিবিড় পরিচর্যায় বিএনএফডব্লিউএ কর্তৃক পরিচালিত ডে কেয়ার সেন্টার Blue Wave Child Care এর শুভ উদ্বোধন করা হয়েছে। </a>
            </div>
            <div class="swiper-slide">
                <a href="#">বিএনএফডব্লিউএ কর্তৃক পরিচালিত ঝিনুক ক্র্যাফটিং এ্যান্ড ট্রেনিং সেন্টার (জেসিএ্যান্ডটিসি) চটগ্রাম এর শুভ উদ্বোধন।</a>
            </div>
            <div class="swiper-slide">
                <a href="#">বিশেষ চাহিদা সম্পন্ন শিশুদের জন্য আশার আলো ঢাকা প্রতিষ্ঠানের অবকাঠামোগত নির্মাণ কাজ চলমান রয়েছে।</a>
            </div>
            <div class="swiper-slide">
                <a href="#">বিএনএফডব্লিউএ কর্তৃক ফেনীর ফুলগাজীতে বন্যায় ক্ষতিগ্রস্ত অসহায় পরিবারকে পুনর্বাসনের কার্যক্রম চলমান রয়েছে। </a>
            </div>
        </div>
    </div>
</section>

{{-- President Section --}}
<section class="page-section cnf-section pb-md-0">
    <div class="container-xl">
        <div class="row row-gap-4 flex-md-row-reverse align-items-center">
            <div class="col-md-6 text-center">
                <div class="cnf-image">
                    <img alt="" src="{{ asset('assets/images/president.png') }}"/>
                </div>
            </div>
            <div class="col-md-6 aniUtil_active ani_fadeIn">
                <div class="section-heading">
                    <h2 class="mb-2"><span class="lang-en">President BNFWA</span><span class="lang-bn">প্রেসিডেন্ট বিএনএফডব্লিউএ</span></h2>
                    <p class="lead mb-0"><span class="lang-en">Nadia Sultana</span><span class="lang-bn">নাদিয়া সুলতানা</span></p>
                </div>
                <div class="lang-en">
                    <p>Nadia Sultana has taken over the responsibility of President of Bangladesh Navy Family Welfare Association (BNFWA) as well as the Chief Patron of Bangladesh Navy Ladies Club on 24 July 2023. She was born in a respectable Muslim family. She has obtained two bachelor’s degrees, namely Bachelor of Social Science and Bachelor of Education from reputed universities in Bangladesh.</p>
                    <p>She has been a teacher by profession and has taught in several schools in Dhaka and Chattogram for a decade and a half.</p>
                </div>
                <div class="lang-bn">
                    <p>গত ২৪ জুলাই ২০২৩ তারিখে নাদিয়া সুলতানা বাংলাদেশ নৌবাহিনী পরিবার কল্যাণ সংঘ (বানৌপকস) এর প্রেসিডেন্ট এবং বিএন লেডিস ক্লাব এর প্রধান পৃষ্ঠপোষক হিসেবে দায়িত্বভার গ্রহণ করেন। তিনি বাংলাদেশের একটি সম্ভ্রান্ত মুসলিম পরিবারে জন্মগ্রহণ করেন। শিক্ষা জীবনে তিনি বাংলাদেশের স্বনামধন্য বিশ্ববিদ্যালয়ে থেকে ব্যাচেলর অব সোশ্যাল সায়েন্স এবং ব্যাচেলর অব এডুকেশন ডিগ্রি অর্জন করেন।</p>
                    <p>পেশাগত জীবনে তিনি একজন শিক্ষিকা হিসেবে ঢাকা ও চট্টগ্রামের একাধিক খ্যাতনামা শিক্ষা প্রতিষ্ঠানে প্রায় দেড় দশকের বেশি সময় শিক্ষকতা করেছেন।</p>
                </div>
                <a class="btn-read-more mt-3" href="{{ url('president.html') }}">
                    <span class="lang-en">Read More</span><span class="lang-bn"> আরও পড়ুন</span><i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Mission & Vision Section --}}
<section class="page-section mission-vision-section my-4 text-white">
    <div class="container-xl">
        <div class="row mb-3">
            <div class="col text-center">
                <h2><span class="lang-en">Mission and Vision</span><span class="lang-bn">মিশন এবং ভিশন</span></h2>
            </div>
        </div>
        <div class="row row-gap-4 align-items-center">
            <div class="col-sm-6 col-md-6 col-lg-4 aniUtil_active ani_fadeIn">
                <div class="mission-content-box">
                    <h3><span class="lang-en">Mission</span><span class="lang-bn">মিশন</span></h3>
                    <div class="lang-en">
                        <p>Bangladesh Navy Family Welfare Association women reinforce its commitment towards empowerment, gender neutrality and welfare with a REDEFINED VISION. Bonding upon our pioneers' legacy that changing times bring with them changing roles and needs.</p>
                    </div>
                    <div class="lang-bn">
                        <p>বাংলাদেশ নৌবাহিনী পরিবার কল্যাণ সংঘ নারী ক্ষমতায়ন, লিঙ্গ নিরপেক্ষতা এবং কল্যাণের প্রতি তার প্রতিশ্রæতিকে একটি পুনঃসংজ্ঞায়িত দৃষ্টিভঙ্গি দিয়ে শক্তিশালী করে। আমাদের অগ্রগামীদের উত্তরাধিকারের সাথে বন্ধন যা পরিবর্তিতত সময় তাদের সাথে পরিতর্বনশীল ভুমিকা এবং প্রয়োজন নিয়ে আসে।</p>
                    </div>
                    <a class="btn-read-more" href="{{ url('vision-mission.html') }}">
                        <span class="lang-en">Read More</span><span class="lang-bn"> আরও পড়ুন</span><i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 aniUtil_active ani_fadeIn text-center">
                <img alt="" src="{{ asset('assets/images/mission-vission.png') }}">
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 aniUtil_active ani_fadeIn">
                <div class="mission-content-box">
                    <h3><span class="lang-en">Vision</span><span class="lang-bn">ভিশন</span></h3>
                    <div class="lang-en">
                        <p>In a unique initiative to empower and to make the navy wife self-reliant, focusing on naval community bonding, welfare and environmental protection.</p>
                    </div>
                    <div class="lang-bn">
                        <p>নৌবাহিনীর সদস্যদের পারিবারিক বন্ধন, কল্যাণ এবং পরিবেশ সুরক্ষায় নৌসদস্যদের স্ত্রীদের ক্ষমতায়ন ও স্বনির্ভর করতে একটি অনন্য উদ্যোগ।</p>
                    </div>
                    <a class="btn-read-more" href="{{ url('vision-mission.html') }}">
                        <span class="lang-en">Read More</span><span class="lang-bn"> আরও পড়ুন</span><i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
