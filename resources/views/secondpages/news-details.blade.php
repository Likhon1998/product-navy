@extends('layouts.frontend.app')

@section('title', 'News Details')

@section('content')

<main>
    <section class="page-section">
        <div class="container">
            <div class="row row-gap-3 my-4">
                <!-- News Detail Column -->
                <div class="col-lg-9 col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="news-card-thumb">
                                <img alt="News" src="{{ asset('assets/images/event/news-full-image.jpg') }}">
                            </div>
                            <div class="news-card-info">
                                <ul>
                                    <li><a href="#">Visit Programs</a></li>
                                    <li><a href="#">October 05, 2020</a></li>
                                </ul>
                                <h1 class="h4 mt-4">
                                    Chief of Naval staff visits the flood affected people of Fulgengi Upazila, Feri on 27 Aug 2024
                                </h1>
                            </div>
                            <div class="news-card-details">
                                <p>
                                    On August 27, 2024, Admiral M Nazmul Hassan, the Chief of Naval Staff, visited the flood-affected areas of Fulgazi Upazila in Feni District. During his visit, he conducted on-site inspections of various flood-stricken locations in Fulgazi and engaged in discussions with the local populace and concerned authorities. He provided necessary guidance on rescue operations, relief distribution, and the provision of medical services.
                                </p>
                                <p>
                                    It is noteworthy that the Bangladesh Navy swiftly initiated rescue, relief, and medical services in the flood-affected areas to control the flood situation. The naval contingent in Fulgazi has so far rescued several thousand people and arranged safe shelter for them. Additionally, the Navy has established a 30-bed field hospital in the upazila to provide medical services to those affected by the flood.
                                </p>
                                <p>
                                    The Navy has always stood by the people in facing floods, disasters, and other adverse situations and will continue to do so in the future.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Column -->
                <div class="col-lg-3 col-md-4">
                    <div class="widget">
                        <h3 class="widget-title">News Categories</h3>
                        <ul class="news-category-vertical-list">
                            <li><a href="#">Exercise</a></li>
                            <li><a href="#">Visit Programs</a></li>
                            <li><a href="#">Headlines Around The Fleet</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Relative News Section -->
            <div class="row">
                <div class="col">
                    <h2 class="mb-2 mt-5 h4">Relative News</h2>
                </div>
            </div>
            <div class="row row-gap-3 my-4">
                <div class="col-lg-4 col-md-6">
                    <div class="news-card">
                        <div class="news-card-thumb">
                            <a href="#">
                                <img alt="News" src="{{ asset('assets/images/event/news-01.jpg') }}">
                            </a>
                        </div>
                        <div class="news-card-info">
                            <h3><a href="#">Chief of Naval staff visits the flood affected people of Fulgengi Upazila, Feri on 27 Aug 2024</a></h3>
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
                            <a href="#"><img alt="News" src="{{ asset('assets/images/event/news-02.jpg') }}"></a>
                        </div>
                        <div class="news-card-info">
                            <h3><a href="#">Short Service Commissioned Officers (DEO 2025 A) Batch Final Exam is going to be held at 01 to 06 September 2024</a></h3>
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
                            <a href="#"><img alt="News" src="{{ asset('assets/images/event/news-03.jpg') }}"></a>
                        </div>
                        <div class="news-card-info">
                            <h3><a href="#">Bangladesh Navy is helping the affected people of Paikgacha Khulna.</a></h3>
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
