@extends('layouts.frontend.app')

@section('title', 'Ship & Establishment Gallery')

@push('styles')
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
    <link href="{{ asset('assets/css/lightbox.css') }}" rel="stylesheet"/>
@endpush

@section('content')
    <section class="inner-page-banner">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Gallery</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section">
        <div class="container">
            <div class="row row-gap-4 justify-content-center">
                <div class="col">
                    <div class="image-gallery-wrapper">
                        @for ($i = 1; $i <= 25; $i++)
                            <div class="gallery-box">
                                <a data-lightbox="Ship-Establishment"
                                   data-title="Gallery Image {{ $i }}"
                                   href="{{ asset("assets/images/gallery/photo-gallery-$i.jpg") }}">
                                    <img src="{{ asset("assets/images/gallery/photo-gallery-$i.jpg") }}" alt="Gallery Image {{ $i }}">
                                </a>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/lightbox.js') }}"></script>
    <script>
        jQuery(document).ready(function () {
            jQuery('.image-gallery-wrapper').masonry({
                itemSelector: '.gallery-box',
                percentPosition: true,
            });
            setTimeout(function () {
                jQuery('.image-gallery-wrapper').masonry({
                    itemSelector: '.gallery-box',
                    percentPosition: true,
                });
            }, 2000);
        });
    </script>
@endpush
