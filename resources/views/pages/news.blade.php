@extends('layouts.frontend.app')

@section('title', 'News')

@section('content')

<!-- Inner Page Banner -->
<section class="inner-page-banner">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>
                    <span class="lang-en">News</span>
                    <span class="lang-bn">সংবাদ</span>
                </h1>
            </div>
        </div>
    </div>
</section>

<main>
    <section class="page-section">
        <div class="container">
            <!-- Categories -->
            <div class="row">
                <div class="col">
                    <ul class="news-category-horizontal-list">
                        <li class="current-category-item"><a href="#">All</a></li>
                        <li><a href="#">Exercise</a></li>
                        <li><a href="#">Visit Programs</a></li>
                        <li><a href="#">Headlines Around The Fleet</a></li>
                    </ul>
                </div>
            </div>

            <!-- News Cards -->
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

@endsection
