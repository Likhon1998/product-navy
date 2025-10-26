@extends('layouts.frontend.app')

@section('title', 'Ashar Alo School')

@section('content')

<section class="inner-page-banner">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>
                    <span class="lang-en">Ashar Alo School</span>
                    <span class="lang-bn">আশার আলো স্কুল</span>
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
                            <div class="lang-en">
                                <p>
                                    For the special and handicapped children, 'Ashar Alo' School is organized by BNFWA
                                    in Chattogram and Khulna area.
                                </p>

                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{ asset('assets/images/ashar-alo (1).jpg') }}" class="img-fluid" alt="Ashar Alo School 1">
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{ asset('assets/images/ashar-alo (2).jpg') }}" class="img-fluid" alt="Ashar Alo School 2">
                                    </div>
                                </div>
                            </div>

                            <div class="lang-bn">
                                <p>
                                    বিশেষ চাহিদা সম্পন্ন শিশুদের জন্য ঢাকা, চট্টগ্রাম ও খুলনা এলাকায় বাংলাদেশ নৌবাহিনী
                                    পরিবার কল্যাণ সংঘ কর্তৃক আশার আলো স্কুল পরিচালিত হয়।
                                </p>

                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{ asset('assets/images/ashar-alo (1).jpg') }}" class="img-fluid" alt="আশার আলো স্কুল ১">
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{ asset('assets/images/ashar-alo (2).jpg') }}" class="img-fluid" alt="আশার আলো স্কুল ২">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
