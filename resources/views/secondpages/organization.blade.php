@extends('layouts.frontend.app')

@section('title', 'BN Organization')

@section('content')

<section class="inner-page-banner">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>BN Organisation</h1>
            </div>
        </div>
    </div>
</section>

<main>
    <section class="page-section">
        <div class="container">
            <div class="row justify-content-center my-4">
                <div class="col-md-12 text-center">
                    <img alt="Organization Image" src="{{ asset('assets/images/pages/bn-organisation/bn-organization.jpg') }}" class="img-fluid">
                </div>
            </div>

            <div class="row row-gap-3 my-4">
                @foreach([
                    'COMCHIT', 'COMBAN', 'COMKHUL', 'COMDHAKA', 'CSD',
                    'COMFLOTWEST', 'COMSWADS', 'COMSUB', 'COMNAV', 
                    'CHIEF HYDROGRAPHER', 'NATDOC'
                ] as $item)
                    <div class="col-md-3 mb-3">
                        <div class="card h-100 text-center">
                            <div class="card-body">
                                <a href="{{ url('admin-autho-' . strtolower(str_replace(' ', '-', $item)) . '.html') }}">
                                    <img alt="{{ $item }}" class="mb-3 img-fluid" src="{{ asset('assets/images/pages/admin-authorities/' . strtolower(str_replace(' ', '-', $item)) . '.png') }}">
                                    <h5>{{ $item }}</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main>

@endsection
