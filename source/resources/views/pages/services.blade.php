@extends('layouts.public')
@section('title', 'Diesel Supply & Tank Construction Services | HOPEZ Energy')
@section('description', 'Explore HOPEZ diesel and petroleum supply services plus above-ground and underground storage tank construction from 5,000L to 50,000L.')

@section('content')
@include('partials.page-hero', [
    'eyebrow' => 'Our services',
    'title' => 'Supply and storage,',
    'accent' => 'handled professionally.',
    'intro' => 'Practical energy solutions for day-to-day continuity, planned procurement and long-term onsite storage.',
    'image' => 'images/optimized/hero-hopez-tanker-1536.webp',
    'aside' => '<i data-lucide="fuel"></i><span>PRODUCT + LOGISTICS</span><strong>One accountable team.</strong>',
])

<section class="section service-detail" id="diesel">
    <div class="shell detail-grid">
        <div class="detail-visual diesel-visual" data-reveal><div class="detail-visual-media"><img src="{{ asset('images/optimized/service-petrol-supply-640.webp') }}" srcset="{{ asset('images/optimized/service-petrol-supply-640.webp') }} 640w, {{ asset('images/optimized/service-petrol-supply-1024.webp') }} 1024w" sizes="(max-width: 900px) calc(100vw - 28px), 45vw" alt="Technician monitoring a hose connection between a fuel tanker and storage tank" width="1024" height="1280" loading="lazy" decoding="async"></div><i data-lucide="fuel"></i><span>CORE SERVICE</span><strong>DIESEL<br>/ AGO</strong></div>
        <div data-reveal><div class="eyebrow eyebrow-dark"><span></span>Diesel / AGO supply</div><h2>Dependable fuel delivery, scaled to your requirement.</h2><p class="lead">For power generation, facilities, equipment and commercial operations, HOPEZ coordinates quality diesel supply with a clear delivery process.</p><div class="detail-points"><div><i data-lucide="truck"></i><span><strong>Flexible delivery</strong><small>One-off, urgent and planned supply requests.</small></span></div><div><i data-lucide="gauge"></i><span><strong>Accurate quantity</strong><small>Transparent metering and delivery documentation.</small></span></div><div><i data-lucide="messages-square"></i><span><strong>Clear coordination</strong><small>Updates from enquiry through fulfilment.</small></span></div><div><i data-lucide="building-2"></i><span><strong>Wide customer mix</strong><small>From homes and estates to commercial sites.</small></span></div></div><a class="button button-primary" href="{{ route('quote.create') }}">Get a diesel quote <i data-lucide="arrow-right"></i></a></div>
    </div>
</section>

<section class="section service-detail service-detail-alt" id="petrol">
    <div class="shell detail-grid detail-grid-reverse">
        <div data-reveal><div class="eyebrow eyebrow-dark"><span></span>Petrol / PMS supply</div><h2>Coordinated supply for approved commercial needs.</h2><p class="lead">Speak with our team about availability, quantity and the appropriate delivery arrangement for your operational requirement.</p><ul class="check-list"><li><i data-lucide="check"></i>Requirement and availability review</li><li><i data-lucide="check"></i>Clear quotation and coordination</li><li><i data-lucide="check"></i>Professional product handling</li></ul><a class="text-link text-link-large" href="{{ route('contact') }}">Discuss your requirement <i data-lucide="arrow-right"></i></a></div>
        <div class="detail-visual petrol-visual" data-reveal><div class="detail-visual-media"><img src="{{ asset('images/optimized/service-petrol-depot-no-people-640.webp') }}" srcset="{{ asset('images/optimized/service-petrol-depot-no-people-640.webp') }} 640w, {{ asset('images/optimized/service-petrol-depot-no-people-1280.webp') }} 1280w" sizes="(max-width: 900px) calc(100vw - 28px), 45vw" alt="Petroleum depot storage tanks and a tanker at a dispatch bay" width="1280" height="853" loading="lazy" decoding="async"></div><i data-lucide="droplets"></i><span>ON REQUEST</span><strong>PETROL<br>/ PMS</strong></div>
    </div>
</section>

<section class="section service-detail" id="tank-construction">
    <div class="shell detail-grid">
        <div class="detail-visual tank-visual" data-reveal><div class="detail-visual-media"><img src="{{ asset('images/optimized/service-tank-construction-no-people-640.webp') }}" srcset="{{ asset('images/optimized/service-tank-construction-no-people-640.webp') }} 640w, {{ asset('images/optimized/service-tank-construction-no-people-1024.webp') }} 1024w" sizes="(max-width: 900px) calc(100vw - 28px), 45vw" alt="Petroleum storage tanks, stairways, valves and pipework" width="1024" height="1280" loading="lazy" decoding="async"></div><i data-lucide="container"></i><span>5,000L to 50,000L</span><strong>STORAGE<br>SYSTEMS</strong></div>
        <div data-reveal><div class="eyebrow eyebrow-dark"><span></span>Storage tank construction</div><h2>Purpose-built capacity, above or below ground.</h2><p class="lead">HOPEZ supports the construction of petroleum storage tanks from 5,000 to 50,000 litres, shaped around the site, intended use and operational requirements.</p><div class="capacity-scale"><div><span>5K</span><small>Litres</small></div><i></i><div><span>50K</span><small>Litres</small></div></div><ul class="check-list"><li><i data-lucide="check"></i>Above-ground tank construction</li><li><i data-lucide="check"></i>Underground tank construction</li><li><i data-lucide="check"></i>Commercial and institutional applications</li></ul><a class="button button-primary" href="{{ route('quote.create') }}">Request a project quote <i data-lucide="arrow-right"></i></a></div>
    </div>
</section>

<section class="section sectors-section" id="industries">
    <div class="shell">
        <div class="section-heading split-heading">
            <div><div class="eyebrow eyebrow-dark"><span></span>Industries we serve</div><h2>Supply shaped around <em>your environment.</em></h2></div>
            <p>We coordinate timing, access and quantity around the practical requirements of each customer and site.</p>
        </div>
        <div class="industry-grid">
            @foreach ([
                ['building-2', 'Corporate organisations', 'Offices, retail, hospitality and commercial facilities.'],
                ['hospital', 'Healthcare facilities', 'Responsive planning for essential, time-sensitive operations.'],
                ['school', 'Schools & institutions', 'Planned delivery around campus schedules and procedures.'],
                ['houses', 'Estates & homes', 'Convenient supply for managed communities and residences.'],
                ['hard-hat', 'Construction sites', 'Fuel coordination for machinery, site offices and projects.'],
                ['factory', 'Industrial operations', 'Volume supply for production, warehousing and equipment.'],
            ] as [$icon, $title, $copy])
                <article class="industry-card" data-reveal><i data-lucide="{{ $icon }}"></i><h3>{{ $title }}</h3><p>{{ $copy }}</p></article>
            @endforeach
        </div>
    </div>
</section>

<section class="section areas-section" id="service-areas">
    <div class="shell areas-grid">
        <div data-reveal>
            <div class="eyebrow eyebrow-dark"><span></span>Lagos &amp; Uyo service areas</div><h2>Tell us where. We’ll confirm the rest.</h2><p class="lead">Our operations are positioned to coordinate deliveries across Lagos and Uyo, subject to product volume, route access and timing.</p>
            <div class="area-columns">
                @foreach ([
                    ['Island & coastal', ['Victoria Island', 'Ikoyi', 'Lekki', 'Ajah']],
                    ['Lagos Mainland', ['Ikeja', 'Yaba', 'Surulere', 'Gbagada']],
                    ['Industrial & port', ['Apapa', 'Amuwo Odofin', 'Isolo', 'Oshodi']],
                    ['Lagos & Akwa Ibom', ['Festac', 'Magodo', 'Uyo', 'Other areas on request']],
                ] as [$group, $places])
                <div><h3>{{ $group }}</h3>@foreach($places as $place)<span><i data-lucide="map-pin"></i>{{ $place }}</span>@endforeach</div>
                @endforeach
            </div>
            <p class="area-note"><i data-lucide="info"></i>These locations are indicative, not restrictive. Contact us to confirm your exact delivery address.</p>
        </div>
        <div class="coverage-map coverage-map-large" data-reveal="right">
            <img class="coverage-tanker-image" src="{{ asset('images/optimized/coverage-hopez-tanker-640.webp') }}" srcset="{{ asset('images/optimized/coverage-hopez-tanker-640.webp') }} 640w, {{ asset('images/optimized/coverage-hopez-tanker-1280.webp') }} 1280w" sizes="(max-width: 900px) calc(100vw - 28px), 45vw" alt="HOPEZ diesel tanker travelling through Lagos to make a delivery" width="1280" height="720" loading="lazy" decoding="async">
            <div class="coverage-photo-overlay"></div>
            <div class="coverage-photo-caption"><span><i data-lucide="route"></i></span><p>Delivery coverage<strong>Across Lagos &amp; Uyo</strong></p></div>
        </div>
    </div>
</section>

@include('partials.simple-cta')
@endsection
