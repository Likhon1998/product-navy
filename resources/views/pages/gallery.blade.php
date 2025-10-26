@extends('layouts.frontend.app')

@section('title', 'Gallery')

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

<main>
    <section class="page-section">
        <div class="container">
            <div class="row row-gap-4 justify-content-center">
                <div class="col">
                    <div class="image-album-wrapper">
                        @foreach([
                            ['img' => 'gallery-album-thumb-1.jpg', 'title' => 'Tailor', 'date' => '17 January 2024'],
                            ['img' => 'gallery-album-thumb-2.jpg', 'title' => 'Boutique', 'date' => '17 January 2024'],
                            ['img' => 'gallery-album-thumb-3.jpg', 'title' => 'Readymade Garments', 'date' => '17 January 2024'],
                            ['img' => 'gallery-album-thumb-4.jpg', 'title' => 'Vitamin A Capsule Campaign', 'date' => '17 January 2024'],
                            ['img' => 'gallery-album-thumb-5.jpg', 'title' => 'Distribution of Winter Clothes', 'date' => '17 January 2024'],
                            ['img' => 'gallery-album-thumb-6.jpg', 'title' => 'Ashar Alo School', 'date' => '17 January 2024'],
                            ['img' => 'gallery-album-thumb-7.jpg', 'title' => 'Cane Made Product', 'date' => '17 January 2024'],
                            ['img' => 'gallery-album-thumb-8.jpg', 'title' => 'Child Care Opening', 'date' => '17 January 2024'],
                            ['img' => 'gallery-album-thumb-9.jpg', 'title' => 'Liberation War', 'date' => '17 January 2024'],
                        ] as $album)
                            <a class="gallery-album-box" href="{{ url('gallery-images') }}">
                                <img src="{{ asset('assets/images/gallery/' . $album['img']) }}" alt="{{ $album['title'] }}">
                                <div>
                                    <div>
                                        <h3 class="h5">{{ $album['title'] }}</h3>
                                        <p>{{ $album['date'] }}</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
