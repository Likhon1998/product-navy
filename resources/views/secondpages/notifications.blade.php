@extends('layouts.frontend.app')

@section('title', 'Notifications')

@section('content')

<section class="inner-page-banner">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>
                    <span class="lang-en">Notifications</span>
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
                        <span class="lang-en">Notification content will be displayed here.</span>
                        <span class="lang-bn">নোটিফিকেশন কনটেন্ট এখানে প্রদর্শিত হবে।</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
