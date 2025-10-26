@extends('layouts.frontend.app')

@section('title', 'Events')

@section('content')
<section class="inner-page-banner">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>
                    <span class="lang-en">Events</span>
                    <span class="lang-bn">ইভেন্টসমূহ</span>
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
                                <img alt="" src="{{ asset('assets/images/event/news-01.jpg') }}">
                            </a>
                        </div>
                        <div class="news-card-info">
                            <h3>
                                <a href="{{ url('news-details') }}">
                                    দরিদ্র শীতার্ত জনসাধারণের মাঝে শীতবস্ত্র বিতরণ করছেন মাননীয় প্রেসিডেন্ট বিএনএফডব্লিউএ
                                </a>
                            </h3>
                            <ul>
                                <li><a href="">27 Aug 2024</a></li>
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
                                    বন্যা কবলিত এলাকায় ত্রাণসামগ্রী বিতরণে সহায়তায় ঢাকা ক্লাব লিঃ এর প্রতিনিধিগণের নিকট থেকে চেক গ্রহণ করছেন মাননীয় প্রেসিডেন্ট বিএনএফডব্লিউএ।
                                </a>
                            </h3>
                            <ul>
                                <li><a href="">27 Aug 2024</a></li>
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
                                    বন্যা কবলিত এলাকায় জরুরি ত্রাণসামগ্রী বিতরণের জন্য শুকনো খাবার প্যাকেটজাত করণ।
                                </a>
                            </h3>
                            <ul>
                                <li><a href="">26 Aug 2024</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
</main>
@endsection
