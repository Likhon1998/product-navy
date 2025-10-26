@extends('layouts.frontend.app')

@section('title', 'Notice')

@section('content')

<section class="inner-page-banner">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>
                    <span class="lang-en">Notice</span>
                    <span class="lang-bn">নোটিফিকেশন</span>
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
                    <div class="alert alert-warning text-center">
                        <span class="lang-en">There is no content to show. Please visit again later for updated notice.</span>
                        <span class="lang-bn">প্রদর্শনের জন্য কোনো বিষয়বস্তু নেই। অনুগ্রহ করে পরে আবার দেখুন।</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
