@extends('layouts.frontend.app')

@section('title', 'Nou Paribar Shishu Niketon School')

@section('content')

<section class="inner-page-banner">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>
                    <span class="lang-en">Nou Paribar Shishu Niketon School</span>
                    <span class="lang-bn">নৌপরিবার শিশু নিকেতন স্কুল</span>
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
                                    Shishu Niketon is one of the sister concerns of BNFWA. It provides basic elementary
                                    education to the pre-school going children of BN family & others.
                                </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img class="img-fluid" src="{{ asset('assets/images/gallery/photo-gallery-14.jpg') }}" alt="School Image 1">
                                    </div>
                                    <div class="col-md-6">
                                        <img class="img-fluid" src="{{ asset('assets/images/gallery/photo-gallery-15.jpg') }}" alt="School Image 2">
                                    </div>
                                </div>
                            </div>

                            <div class="lang-bn">
                                <p>
                                    নৌপরিবার শিশু নিকেতন স্কুল বাংলাদেশ নৌবাহিনী পরিবার কল্যাণ সংঘের অন্যতম একটি
                                    সেবামূলক প্রতিষ্ঠান। নৌপরিবার এবং অন্যান্য প্রাক-প্রাথমিক কোমলমতী শিশুদের প্রাথমিক
                                    শিক্ষা প্রদান করে।
                                </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img class="img-fluid" src="{{ asset('assets/images/gallery/photo-gallery-14.jpg') }}" alt="School Image 1">
                                    </div>
                                    <div class="col-md-6">
                                        <img class="img-fluid" src="{{ asset('assets/images/gallery/photo-gallery-15.jpg') }}" alt="School Image 2">
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
