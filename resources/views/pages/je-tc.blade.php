@extends('layouts.frontend.app')

@section('title', 'JC & TC')

@section('content')

<!-- Inner Page Banner -->
<section class="inner-page-banner">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>
                    <span class="lang-en">Jhinuk Crafting & Training Center (JC & TC)</span>
                    <span class="lang-bn">ঝিনুক ক্র্যাফটিং এ্যন্ড ট্রেনিং সেন্টার (জেসি এ্যান্ড টিসি)</span>
                </h1>
            </div>
        </div>
    </div>
</section>

<main>
    <!-- JC & TC Locations -->
    <section class="page-section jhinuk-shop-section">
        <div class="container">

            {{-- English Locations --}}
            <div class="row justify-content-center lang-en">
                @php
                    $locations_en = [
                        ['Jhinuk Dhaka', 'Mirpur-14, Dhaka'],
                        ['Jhinuk Chattogram', 'Navy Hospital Gate, New Mooring, Chattogram'],
                        ['Jhinuk Chattogram', 'Chattogram Boat Club, North Patenga, Chattogram'],
                        ['Jhinuk Chattogram', 'Bangladesh Naval Academy, Patenga, Chattogram'],
                        ['Jhinuk Chattogram', 'Lovelane, Chattogram'],
                        ['Jhinuk Cox’s Bazar', 'Swapnil Sindhu, Cox’s Bazar'],
                        ['Jhinuk Khulna', 'Sailors Residential Area, Mujgunni, Khalishpur, Khulna'],
                        ['Jhinuk Solam', 'Solam, Lobonchara, Khulna'],
                        ['Jhinuk Mongla', 'Digraj, Mongla'],
                        ['Jhinuk Kaptai', 'BNS SHAHEED MOAZZAM, Kaptai, Rangamati'],
                    ];
                @endphp

                @foreach ($locations_en as $loc)
                    <div class="col-md-3 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="h4">{{ $loc[0] }}</h3>
                                <p>{{ $loc[1] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Bangla Locations --}}
            <div class="row justify-content-center lang-bn">
                @php
                    $locations_bn = [
                        ['ঝিনুক ঢাকা', 'মিরপুর-১৪, ঢাকা।'],
                        ['ঝিনুক চট্টগ্রাম', 'নেভী হাসপাতাল গেট, নিউমুরিং, চট্টগ্রাম।'],
                        ['ঝিনুক চট্টগ্রাম', 'চট্টগ্রাম বোট ক্লাব, উত্তর পতেঙ্গা, চট্টগ্রাম।'],
                        ['ঝিনুক চট্টগ্রাম', 'বাংলাদেশ নেভাল একাডেমি, পতেঙ্গা, চট্টগ্রাম।'],
                        ['ঝিনুক চট্টগ্রাম', 'লাভলেইন, চট্টগ্রাম।'],
                        ['ঝিনুক কক্সবাজার', 'হোটেল স্বপ্নীল সিন্ধু, কক্সবাজার।'],
                        ['ঝিনুক খুলনা', 'নাবিক আবাসিক এলাকা, মুজগুন্নী, খুলনা।'],
                        ['ঝিনুক সোলাম', 'সোলাম, লবনচরা, খুলনা।'],
                        ['ঝিনুক মোংলা', 'দিগরাজ, মোংলা।'],
                        ['ঝিনুক কাপ্তাই', 'বিএনএস শহীদ মোয়াজ্জম, কাপ্তাই, রাঙ্গামাটি'],
                    ];
                @endphp

                @foreach ($locations_bn as $loc)
                    <div class="col-md-3 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="h4">{{ $loc[0] }}</h3>
                                <p>{{ $loc[1] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
</main>

@endsection
