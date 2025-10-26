@extends('layouts.frontend.app')

@section('title', 'Day Care Centre')

@section('content')

<section class="inner-page-banner">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>
                    <span class="lang-en">Day Care Centre</span>
                    <span class="lang-bn">ডে কেয়ার সেন্টার</span>
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
                                    For working ladies and female officers' convenience, BNFWA has arranged a
                                    Children's Day Care Centre.
                                </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{ asset('assets/images/day-care-1.png') }}" class="img-fluid" alt="Day Care Centre 1">
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{ asset('assets/images/day-care (1).JPG') }}" class="img-fluid" alt="Day Care Centre 2">
                                    </div>
                                </div>
                            </div>

                            <div class="lang-bn">
                                <p>
                                    কর্মরত লেডি অফিসার এবং অফিসার পত্নীদের শিশু সন্তানদের জন্য
                                    ডে কেয়ার সেন্টারের ব্যবস্থা করেছে।
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
