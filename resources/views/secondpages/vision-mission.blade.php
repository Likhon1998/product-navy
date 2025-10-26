@extends('layouts.frontend.app')

@section('title', 'Vision and Mission of Bangladesh Navy')

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



    <section class="inner-page-banner">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1><span class="lang-en">Mission and Vision</span><span class="lang-bn">মিশন এবং ভিশন</span></h1>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="page-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img alt="Mission and Vision" src="{{ asset('assets/images/mission-vission.png') }}">
                    </div>
                    <div class="col-md-6">
                        <div class="px-4">
                            <h3><span class="lang-en">Mission</span><span class="lang-bn">মিশন</span></h3>
                            <div class="lang-en">
                                <p>
                                    Bangladesh Navy Family Welfare Association women reinforce its commitment towards
                                    empowerment, gender neutrality and welfare with a REDEFINED VISION. Bonding upon our
                                    pioneers' legacy that changing times bring with them changing roles and needs.
                                </p>
                            </div>
                            <div class="lang-bn">
                                <p>
                                    বাংলাদেশ নৌবাহিনী পরিবার কল্যাণ সংঘ নারী ক্ষমতায়ন, লিঙ্গ নিরপেক্ষতা এবং কল্যাণের প্রতি
                                    তার প্রতিশ্রুতিকে একটি পুনঃসংজ্ঞায়িত দৃষ্টিভঙ্গি দিয়ে শক্তিশালী করে। আমাদের অগ্রগামীদের
                                    উত্তরাধিকারের সাথে বন্ধন যা পরিবর্তিতত সময় তাদের সাথে পরিতর্বনশীল ভুমিকা এবং প্রয়োজন
                                    নিয়ে আসে।
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row flex-md-row-reverse align-items-center">
                    <div class="col-md-6">
                        <img alt="Mission and Vision" src="{{ asset('assets/images/mission-vission.png') }}">
                    </div>
                    <div class="col-md-6">
                        <div class="pe-4">
                            <h3><span class="lang-en">Vision</span><span class="lang-bn">ভিশন</span></h3>
                            <div class="lang-en">
                                <p>
                                    In a unique initiative to empower and to make the navy wife self-reliant, focusing on
                                    naval community bonding, welfare and environmental protection.
                                </p>
                            </div>
                            <div class="lang-bn">
                                <p>
                                    নৌবাহিনীর সদস্যদের পারিবারিক বন্ধন, কল্যাণ এবং পরিবেশ সুরক্ষায় নৌসদস্যদের স্ত্রীদের
                                    ক্ষমতায়ন ও স্বনির্ভর করতে একটি অনন্য উদ্যোগ।
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>


</footer>

@endsection
