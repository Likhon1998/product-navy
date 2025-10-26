@extends('layouts.frontend.app')

@section('title', 'Former President BNFWA')

@section('content')


    <section class="inner-page-banner">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>
                        <span class="lang-en">Former President BNFWA</span>
                        <span class="lang-bn">প্রাক্তন প্রেসিডেন্টগণ</span>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    {{-- ======= Main Section ======= --}}
    <main>
        <section class="page-section former-president-section">
            <div class="container">

                {{-- ===== English Section ===== --}}
                <div class="row justify-content-center lang-en">
                    @php
                        $presidents_en = [
                            ['img' => '01.jpg', 'name' => 'Begum Fahmida Hossain Khan', 'date' => '12 Mar 1976 - 03 Nov 1979'],
                            ['img' => '02.jpg', 'name' => 'Begum Syeda Iqbalmand Banu', 'date' => '04 Nov 1979 - 06 Aug 1984'],
                            ['img' => '03.jpg', 'name' => 'Begum Sophia Ahmad', 'date' => '06 Aug 1984 - 14 Aug 1990'],
                            ['img' => '04.jpg', 'name' => 'Begum Seleena Mustafa', 'date' => '15 Aug 1990 - 04 Jun 1991'],
                            ['img' => '05.jpg', 'name' => 'Begum Shirin Islam', 'date' => '05 Jun 1991 - 03 Jun 1995'],
                            ['img' => '06.jpg', 'name' => 'Begum Saleha Islam', 'date' => '04 Jun 1995 - 03 Jun 1999'],
                            ['img' => '07.jpg', 'name' => 'Begum Dipika Qumrunnesa', 'date' => '04 Jun 1999 - 03 Jun 2002'],
                            ['img' => '08.jpg', 'name' => 'Begum Naima Mujtaba', 'date' => '04 Jun 2002 - 10 Jan 2005'],
                            ['img' => '09.jpg', 'name' => 'Begum Afsana Khan', 'date' => '10 Jan 2005 - 10 Feb 2007'],
                            ['img' => '10.jpg', 'name' => 'Begum Muneera Nizam', 'date' => '10 Feb 2007 - 28 Jan 2009'],
                            ['img' => '11.jpg', 'name' => 'Begum Shabnam Ahmed', 'date' => '28 Jan 2009 - 28 Jan 2013'],
                            ['img' => '12.jpg', 'name' => 'Begum Hafiza Habib', 'date' => '28 Jan 2013 - 27 Jan 2016'],
                            ['img' => '13.jpg', 'name' => 'Begum Nazmun Nizam', 'date' => '27 Jan 2016 - 26 Jan 2019'],
                            ['img' => '14.jpg', 'name' => 'Prof. Dr. Afroza Aurangzeb', 'date' => '26 Jan 2019 - 25 Jul 2020'],
                            ['img' => '15.jpg', 'name' => 'Begum Monira Rowshan Iqbal', 'date' => '25 Jul 2020 - 25 Jul 2023'],
                        ];
                    @endphp

                    @foreach ($presidents_en as $p)
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <img src="{{ asset('assets/images/president/' . $p['img']) }}" alt="{{ $p['name'] }}" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="h4">{{ $p['name'] }}</h3>
                                    <p>{{ $p['date'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- ===== Bengali Section ===== --}}
                <div class="row justify-content-center lang-bn">
                    @php
                        $presidents_bn = [
                            ['img' => '01.jpg', 'name' => 'বেগম ফাহমিদা হোসেন খান', 'date' => '১২ মার্চ ১৯৭৬ - ০৩ নভেম্বর ১৯৭৯'],
                            ['img' => '02.jpg', 'name' => 'বেগম সৈয়েদা ইকবালমান্দ বানু', 'date' => '০৪ নভেম্বর ১৯৭৯ - ০৬ আগস্ট ১৯৮৪'],
                            ['img' => '03.jpg', 'name' => 'বেগম সোফিয়া আহমেদ', 'date' => '০৬ আগস্ট ১৯৮৪ - ১৪ আগস্ট ১৯৯০'],
                            ['img' => '04.jpg', 'name' => 'বেগম সেলিনা মুস্তফা', 'date' => '১৫ আগস্ট ১৯৯০ - ০৪ জুন ১৯৯১'],
                            ['img' => '05.jpg', 'name' => 'বেগম শিরিন ইসলাম', 'date' => '০৫ জুন ১৯৯১ - ০৩ জুন ১৯৯৫'],
                            ['img' => '06.jpg', 'name' => 'বেগম সালেহা ইসলাম', 'date' => '০৪ জুন ১৯৯৫ - ০৩ জুন ১৯৯৯'],
                            ['img' => '07.jpg', 'name' => 'বেগম দিপিকা কামরুন্নেসা', 'date' => '০৪ জুন ১৯৯৯ - ০৩ জুন ২০০২'],
                            ['img' => '08.jpg', 'name' => 'বেগম নাঈমা মুজতবা', 'date' => '০৪ জুন ২০০২ - ১০ জানুয়ারি ২০০৫'],
                            ['img' => '09.jpg', 'name' => 'বেগম আফসানা খান', 'date' => '১০ জানুয়ারি ২০০৫ - ১০ ফেব্রুয়ারি ২০০৭'],
                            ['img' => '10.jpg', 'name' => 'বেগম মুনিরা নিজাম', 'date' => '১০ ফেব্রুয়ারি ২০০৭ - ২৮ জানুয়ারি ২০০৯'],
                            ['img' => '11.jpg', 'name' => 'বেগম শবনম আহমেদ', 'date' => '২৮ জানুয়ারি ২০০৯ - ২৮ জানুয়ারি ২০১৩'],
                            ['img' => '12.jpg', 'name' => 'বেগম হাফিজা হাবীব', 'date' => '২৮ জানুয়ারি ২০১৩ - ২৭ জানুয়ারি ২০১৬'],
                            ['img' => '13.jpg', 'name' => 'বেগম নাজমুন নিজাম', 'date' => '২৭ জানুয়ারি ২০১৬ - ২৬ জানুয়ারি ২০১৯'],
                            ['img' => '14.jpg', 'name' => 'প্রফেসর ডাঃ আফরোজা আওরঙ্গজেব', 'date' => '২৭ জানুয়ারি ২০১৯ - ২৫ জুলাই ২০২০'],
                            ['img' => '15.jpg', 'name' => 'বেগম মনিরা রওশন ইকবাল', 'date' => '২৫ জুলাই ২০২০ - ২৫ জুলাই ২০২৩'],
                        ];
                    @endphp

                    @foreach ($presidents_bn as $p)
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <img src="{{ asset('assets/images/president/' . $p['img']) }}" alt="{{ $p['name'] }}" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="h4">{{ $p['name'] }}</h3>
                                    <p>{{ $p['date'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
    </main>
@endsection
