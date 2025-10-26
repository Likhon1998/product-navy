@extends('layouts.frontend.app')

@section('title', 'BN Ladies Club')

@section('content')

<!-- Inner Page Banner -->
<section class="inner-page-banner">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>
                    <span class="lang-en">BN Ladies Club</span>
                    <span class="lang-bn">বিএন লেডিস ক্লাব</span>
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
                        <div class="card-body p-5">
                            <div class="lang-en">
                                <img class="mb-5" src="{{ asset('assets/images/slider-02.jpg') }}" alt="BN Ladies Club">
                                <p>BN Ladies Club is a welfare organisation, based on voluntary work. Members are self-motivated and dedicated for overall development of the Club.</p>
                                <p>The President of BNFWA appoints a Chairman and a Naval officer as Treasurer to carry out Committee activities.</p>
                                <p>Executive members appoint general members to promote cultural harmony. All plans require approval of the Chief Patron BN Ladies Club.</p>
                            </div>

                            <div class="lang-bn">
                                <img class="mb-5" src="{{ asset('assets/images/slider-02.jpg') }}" alt="বিএন লেডিস ক্লাব">
                                <p>বিএন লেডিস ক্লাব একটি কল্যাণমূলক সংগঠন। স্বেচ্ছাসেবী কাজের ভিত্তিতে সংগঠন পরিচালিত হয়। সদস্যরা স্ব-প্রণোদিত এবং ক্লাবের সার্বিক উন্নয়নের জন্য নিবেদিত।</p>
                                <p>প্রধান পৃষ্ঠপোষক একজন চেয়ারম্যান এবং একজন নৌ কর্মকর্তা ট্রেজারার হিসেবে কমিটির কার্যক্রম পরিচালনা করেন।</p>
                                <p>সাংস্কৃতিক সম্প্রীতি বৃদ্ধির জন্য সাধারণ সদস্যদের নিয়োগ করা হয়। সমস্ত পরিকল্পনা প্রধান পৃষ্ঠপোষকের অনুমোদন প্রয়োজন।</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
