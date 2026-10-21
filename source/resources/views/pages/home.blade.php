@extends('layouts.public')

@section('title', 'Reliable Diesel Supply in Lagos & Uyo | HOPEZ Energy')
@section('description', 'HOPEZ Energy supplies diesel and petroleum products to businesses, facilities, projects and homes across Lagos and Uyo. Request a clear quotation today.')

@section('content')
<section class="hero hero-carousel" data-hero-carousel aria-labelledby="home-hero-title">
    <h1 class="sr-only" id="home-hero-title">Dependable fuel supply across Lagos and Uyo.</h1>
    <div class="hero-backgrounds" aria-hidden="true">
        <div class="hero-visual is-active" data-hero-image><picture><source type="image/webp" srcset="{{ asset('images/optimized/hero-road-ready-768.webp') }} 768w, {{ asset('images/optimized/hero-road-ready-1280.webp') }} 1280w" sizes="100vw"><img src="{{ asset('images/optimized/coverage-hopez-tanker-1280.webp') }}" alt="" width="1280" height="720" fetchpriority="high" decoding="async"></picture></div>
        <div class="hero-visual hero-visual-connection" data-hero-image><picture><source type="image/webp" data-srcset="{{ asset('images/optimized/hero-hose-connection-768.webp') }} 768w, {{ asset('images/optimized/hero-hose-connection-1280.webp') }} 1280w, {{ asset('images/optimized/hero-hose-connection-1672.webp') }} 1672w" sizes="100vw"><img data-src="{{ asset('images/optimized/hero-hose-connection-1280.jpg') }}" alt="" width="1672" height="941" decoding="async"></picture></div>
        <div class="hero-visual" data-hero-image><picture><source type="image/webp" data-srcset="{{ asset('images/optimized/hero-storage-infrastructure-768.webp') }} 768w, {{ asset('images/optimized/hero-storage-infrastructure-1280.webp') }} 1280w, {{ asset('images/optimized/hero-storage-infrastructure-1672.webp') }} 1672w" sizes="100vw"><img data-src="{{ asset('images/optimized/hero-storage-infrastructure-1280.jpg') }}" alt="" width="1672" height="941" decoding="async"></picture></div>
        <div class="hero-visual" data-hero-image><picture><source type="image/webp" data-srcset="{{ asset('images/optimized/hero-site-delivery-768.webp') }} 768w, {{ asset('images/optimized/hero-site-delivery-1280.webp') }} 1280w, {{ asset('images/optimized/hero-site-delivery-1672.webp') }} 1672w" sizes="100vw"><img data-src="{{ asset('images/optimized/hero-site-delivery-1280.jpg') }}" alt="" width="1672" height="941" decoding="async"></picture></div>
    </div>
    <div class="hero-slides">
        <div class="hero-slide is-active" data-hero-slide>
            <div class="shell hero-grid"><div class="hero-copy">
                <div class="eyebrow"><span></span>Reliable energy. Delivered.</div>
                <h2 class="hero-title">Energy that<br><em>delivers.</em></h2>
                <p><span class="hero-copy-full">From businesses of every size to homes and essential facilities, HOPEZ brings a history of dependable service to customers across Lagos and Uyo.</span><span class="hero-copy-mobile">A history of dependable fuel supply for businesses of every size and homes across Lagos and Uyo.</span></p>
                <div class="hero-actions"><a class="button button-primary button-large" href="{{ route('quote.create') }}">Request a quote <i data-lucide="arrow-up-right"></i></a><a class="button button-outline-light button-large" href="{{ route('about') }}">Discover HOPEZ <i data-lucide="arrow-right"></i></a></div>
            </div></div>
        </div>
        <div class="hero-slide" data-hero-slide aria-hidden="true" inert>
            <div class="shell hero-grid"><div class="hero-copy">
                <div class="eyebrow"><span></span>Planned around your operation</div>
                <h2 class="hero-title">Keep your<br><em>world moving.</em></h2>
                <p><span class="hero-copy-full">Busy sites. Managed estates. Everyday homes. We coordinate diesel delivery with care, clear communication and respect for the work that cannot pause.</span><span class="hero-copy-mobile">Diesel delivery for busy sites, estates and homes—coordinated with care, clear updates and dependable timing.</span></p>
                <div class="hero-actions"><a class="button button-primary button-large" href="{{ route('quote.create') }}">Plan your delivery <i data-lucide="arrow-up-right"></i></a><a class="button button-outline-light button-large" href="{{ route('services') }}#diesel">Explore diesel supply <i data-lucide="arrow-right"></i></a></div>
            </div></div>
        </div>
        <div class="hero-slide" data-hero-slide aria-hidden="true" inert>
            <div class="shell hero-grid"><div class="hero-copy">
                <div class="eyebrow"><span></span>Product. Logistics. Infrastructure.</div>
                <h2 class="hero-title">Expertise you<br><em>can count on.</em></h2>
                <p><span class="hero-copy-full">Quality-focused petroleum supply and practical storage solutions. One responsive team, from your first enquiry to the next dependable delivery.</span><span class="hero-copy-mobile">Petroleum supply and practical storage solutions, backed by one experienced, responsive team.</span></p>
                <div class="hero-actions"><a class="button button-primary button-large" href="{{ route('services') }}">Explore our solutions <i data-lucide="arrow-up-right"></i></a><a class="button button-outline-light button-large" href="{{ route('contact') }}">Talk to our team <i data-lucide="arrow-right"></i></a></div>
            </div></div>
        </div>
    </div>
</section>

<section class="trust-rail trust-marquee" data-trust-marquee aria-label="Our service strengths">
    <div class="trust-marquee-window"><div class="trust-marquee-track"><div class="trust-marquee-group">
        <span><i data-lucide="badge-check"></i>Quality-focused supply</span><span><i data-lucide="gauge"></i>Transparent quantities</span><span><i data-lucide="truck"></i>Coordinated delivery</span><span><i data-lucide="headset"></i>Responsive support</span><span><i data-lucide="map-pinned"></i>Lagos &amp; Uyo</span><span><i data-lucide="building-2"></i>Businesses &amp; homes</span><span><i data-lucide="clock-3"></i>9AM–9PM · Mon–Sat</span><span><i data-lucide="container"></i>Practical storage solutions</span>
    </div></div></div>
</section>

<section class="section company-story-section" id="our-story"><div class="shell company-story-grid">
    <div class="company-story-media" data-reveal><img src="{{ asset('images/optimized/candidate-hose-connection-768.webp') }}" srcset="{{ asset('images/optimized/candidate-hose-connection-768.webp') }} 768w, {{ asset('images/optimized/candidate-hose-connection-1536.webp') }} 1536w" sizes="(max-width: 900px) 100vw, 48vw" alt="Technician connecting a fuel transfer hose to a bulk tanker at a depot" width="1536" height="1024" loading="lazy" decoding="async"><div class="company-story-caption"><i data-lucide="route"></i><strong>Fuel supply, planned with care.</strong></div></div>
    <div class="company-story-copy" data-reveal="right"><div class="eyebrow eyebrow-dark"><span></span>About HOPEZ</div><h2>Indigenous expertise.<br><em>Dependable energy.</em></h2><p class="lead">We make essential fuel supply clearer, more responsive and easier to plan around.</p><p>HOPEZ International Energy Resources Limited serves organisations, facilities, estates, projects and homes. Our work combines quality products with careful logistics and straightforward communication.</p><a class="text-link" href="{{ route('about') }}">Get to know us <i data-lucide="arrow-right"></i></a><div class="company-registration"><span>REGISTERED IN NIGERIA</span><strong>RCN 7011446</strong></div></div>
</div></section>

<section class="section services-intro" id="services"><div class="shell">
    <div class="section-heading split-heading" data-reveal><div><div class="eyebrow eyebrow-dark"><span></span>What we do</div><h2>Practical solutions for <em>everyday continuity.</em></h2></div><p>From scheduled fuel deliveries to long-term storage infrastructure, our services are planned around your site and your operations.</p></div>
    <div class="service-showcase">
        <article class="service-feature" data-reveal><div class="service-card-media"><img src="{{ asset('images/optimized/diesel-generator-delivery-768.webp') }}" srcset="{{ asset('images/optimized/diesel-generator-delivery-768.webp') }} 768w, {{ asset('images/optimized/diesel-generator-delivery-1536.webp') }} 1536w" sizes="(max-width: 700px) 100vw, 33vw" alt="Diesel tanker supplying a generator while a technician controls the hose connection" width="1536" height="1024" loading="lazy" decoding="async"></div><div class="service-card-body"><span>CORE SERVICE</span><h3>Diesel / AGO supply</h3><p>Dependable delivery for generators, fleets, facilities and essential operations.</p><a class="text-link" href="{{ route('services') }}#diesel">Explore service <i data-lucide="arrow-up-right"></i></a></div></article>
        <article class="service-feature" data-reveal><div class="service-card-media"><img src="{{ asset('images/optimized/service-petrol-depot-no-people-640.webp') }}" srcset="{{ asset('images/optimized/service-petrol-depot-no-people-640.webp') }} 640w, {{ asset('images/optimized/service-petrol-depot-no-people-1280.webp') }} 1280w" sizes="(max-width: 700px) 100vw, 33vw" alt="Petroleum depot storage tanks and a tanker at a dispatch bay" width="1280" height="853" loading="lazy" decoding="async"></div><div class="service-card-body"><span>ON REQUEST</span><h3>Petrol / PMS supply</h3><p>Commercial product supply coordinated around availability and site requirements.</p><a class="text-link" href="{{ route('services') }}#petrol">Explore service <i data-lucide="arrow-up-right"></i></a></div></article>
        <article class="service-feature" data-reveal><div class="service-card-media"><img src="{{ asset('images/optimized/service-tank-construction-no-people-640.webp') }}" srcset="{{ asset('images/optimized/service-tank-construction-no-people-640.webp') }} 640w, {{ asset('images/optimized/service-tank-construction-no-people-1024.webp') }} 1024w" sizes="(max-width: 700px) 100vw, 33vw" alt="Petroleum storage tanks, stairways, valves and pipework" width="1024" height="1280" loading="lazy" decoding="async"></div><div class="service-card-body"><span>INFRASTRUCTURE</span><h3>Storage tanks</h3><p>Above-ground and underground solutions from 5,000 to 50,000 litres.</p><a class="text-link" href="{{ route('services') }}#tank-construction">Explore service <i data-lucide="arrow-up-right"></i></a></div></article>
    </div>
</div></section>

<section class="section process-section"><div class="shell process-grid">
    <div class="process-copy" data-reveal><div class="eyebrow eyebrow-dark"><span></span>How it works</div><h2>From request to delivery, <em>handled with care.</em></h2><p>A clear process helps you plan with confidence at every step.</p><div class="process-media"><img src="{{ asset('images/optimized/depot-dispatch-process-v2-768.webp') }}" srcset="{{ asset('images/optimized/depot-dispatch-process-v2-768.webp') }} 768w, {{ asset('images/optimized/depot-dispatch-process-v2-1536.webp') }} 1536w" sizes="(max-width: 900px) 100vw, 39vw" alt="Painted fuel tanker leaving a depot dispatch lane toward the delivery route" width="1536" height="1024" loading="lazy" decoding="async"><span><i data-lucide="route"></i>From depot to destination</span></div><a class="button button-primary" href="{{ route('quote.create') }}">Start a request <i data-lucide="arrow-right"></i></a></div>
    <ol class="process-list"><li><span><i data-lucide="clipboard-pen-line"></i></span><div><h3>Tell us your requirement</h3><p>Share the product, quantity, location and preferred timing.</p></div></li><li><span><i data-lucide="messages-square"></i></span><div><h3>Review a clear quotation</h3><p>We confirm availability, pricing and delivery details.</p></div></li><li><span><i data-lucide="route"></i></span><div><h3>We coordinate the supply</h3><p>Our team plans the route and keeps you informed.</p></div></li><li><span><i data-lucide="badge-check"></i></span><div><h3>Delivery is completed</h3><p>Quantities and delivery details are recorded transparently.</p></div></li></ol>
</div></section>

<section class="section continuity-section"><div class="shell continuity-grid">
    <div class="continuity-copy" data-reveal><div class="eyebrow eyebrow-dark"><span></span>Where continuity matters</div><h2>Powering the work that <em>can’t pause.</em></h2><p class="lead">Reliable energy supports people, places and plans long after the delivery is complete.</p><p>From commercial sites and managed estates to essential facilities, we help customers plan dependable supply around the way they actually operate.</p><a class="text-link text-link-large" href="{{ route('services') }}#industries">See who we serve <i data-lucide="arrow-right"></i></a></div>
    <div class="continuity-media" data-reveal="right" style="min-height: 0; aspect-ratio: 3 / 2;"><img src="{{ asset('images/optimized/small-hopez-delivery-generator-top-fill-v3-768.webp') }}" srcset="{{ asset('images/optimized/small-hopez-delivery-generator-top-fill-v3-768.webp') }} 768w, {{ asset('images/optimized/small-hopez-delivery-generator-top-fill-v3-1536.webp') }} 1536w" sizes="(max-width: 900px) 100vw, 52vw" alt="Rugged HOPEZ diesel truck transferring fuel through a top-mounted fill connection into the storage tank serving a CAT generator plant" width="1536" height="1024" loading="lazy" decoding="async"><div class="continuity-caption"><i data-lucide="activity"></i><span>Built around operational continuity</span></div></div>
</div></section>

<section class="section why-section"><div class="shell why-grid">
    <div class="why-visual" data-reveal><img class="why-visual-image" src="{{ asset('images/optimized/reliability-partnership-640.webp') }}" srcset="{{ asset('images/optimized/reliability-partnership-640.webp') }} 640w, {{ asset('images/optimized/reliability-partnership-1280.webp') }} 1122w" sizes="(max-width: 900px) 100vw, 45vw" alt="HOPEZ team discussing a delivery plan with a customer" width="1122" height="1402" loading="lazy" decoding="async"><div class="why-panel"><span class="why-panel-label">HOPEZ STANDARD</span><div class="meter-graphic" aria-hidden="true"><div class="meter-ring"></div><i data-lucide="gauge"></i></div><p><strong>Measured service.</strong><br>Professional delivery.</p><div class="why-accent"><span>9AM</span><span>to</span><span>9PM</span><small>MONDAY TO SATURDAY</small></div></div></div>
    <div class="why-copy" data-reveal="right"><div class="eyebrow eyebrow-dark"><span></span>Why HOPEZ</div><h2>A supply partner that respects <em>your time.</em></h2><p class="lead">Energy supply matters most when your operations depend on it. We respond with careful planning and practical support.</p><div class="reason-list"><div><i data-lucide="clock-3"></i><span><strong>Responsive coordination</strong><small>A reachable team and clear delivery updates.</small></span></div><div><i data-lucide="badge-check"></i><span><strong>Quality-focused products</strong><small>Careful handling and reliable supply practices.</small></span></div><div><i data-lucide="gauge"></i><span><strong>Transparent quantities</strong><small>Accurate metering and clear documentation.</small></span></div></div></div>
</div></section>

<section class="coverage-section"><div class="shell coverage-grid">
    <div data-reveal><div class="eyebrow"><span></span>Where we work</div><h2>Across Lagos and Uyo, we keep businesses and homes supplied.</h2><p>Tell us where you need delivery. Our team will confirm product availability and the most practical arrangement for your location.</p><a class="button button-light" href="{{ route('contact') }}">View our offices <i data-lucide="arrow-right"></i></a></div>
    <div class="coverage-map" data-reveal="right"><img class="coverage-tanker-image" src="{{ asset('images/optimized/hero-hopez-tanker-768.webp') }}" srcset="{{ asset('images/optimized/hero-hopez-tanker-768.webp') }} 768w, {{ asset('images/optimized/hero-hopez-tanker-1536.webp') }} 1536w" sizes="(max-width: 900px) 100vw, 50vw" alt="Branded HOPEZ fuel tanker ready for delivery" width="1536" height="864" loading="lazy" decoding="async"></div>
</div></section>

<section class="final-cta"><div class="shell final-cta-inner"><div><div class="eyebrow"><span></span>Let's get started</div><h2>Tell us what you need.</h2><p>Request a tailored quotation or speak with our supply team.</p></div><div><a class="button button-light button-large" href="{{ route('quote.create') }}">Request a quote <i data-lucide="arrow-up-right"></i></a><a class="button button-ghost button-large" href="tel:+2348025109320">Call 0802 510 9320</a></div></div></section>
@endsection
