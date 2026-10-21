@extends('layouts.public')
@section('title', 'About HOPEZ Energy | Reliable Energy Supply in Nigeria')
@section('description', 'Learn about HOPEZ International Energy Resources Limited and our commitment to dependable, transparent energy supply from Lagos to Uyo.')

@section('content')
@include('partials.page-hero', [
    'eyebrow' => 'About HOPEZ',
    'title' => 'Energy supply built on',
    'accent' => 'reliability.',
    'intro' => 'HOPEZ International Energy Resources Limited supports businesses, institutions, estates, projects and homes with professional petroleum supply and storage solutions.',
    'image' => 'images/optimized/about-truck-wide-1536.webp',
    'aside' => '<span>OUR PROMISE</span><strong>Reliable Energy.<br>Delivered.</strong>',
])

<section class="section story-section">
    <div class="shell story-grid">
        <div data-reveal>
            <div class="section-tag">WHO WE ARE</div>
            <h2>A practical energy partner for places that never stand still.</h2>
        </div>
        <div class="story-copy" data-reveal>
            <p class="lead">We exist to make essential fuel supply feel clear, coordinated and dependable.</p>
            <p>From a single residential delivery to a planned commercial schedule, our approach centres on responsive communication, careful handling, accurate supply and respect for the customer’s operations.</p>
            <p>Our scope also includes above-ground and underground storage tank construction, helping customers create infrastructure suited to their capacity and day-to-day requirements.</p>
        </div>
    </div>
    <div class="shell about-highlights" data-reveal>
        <div><i data-lucide="map-pinned"></i><span><strong>Growing footprint</strong><small>Offices in Lagos and Uyo</small></span></div>
        <div><i data-lucide="truck"></i><span><strong>Delivery-led</strong><small>Capacity shaped around real operations</small></span></div>
        <div><i data-lucide="shield-check"></i><span><strong>Carefully handled</strong><small>Professional coordination at every stage</small></span></div>
    </div>
</section>

@include('partials.fleet-showcase')

<section class="section values-section">
    <div class="shell">
        <div class="section-heading split-heading"><div><div class="eyebrow eyebrow-dark"><span></span>How we work</div><h2>Professional standards at <em>every handoff.</em></h2></div><p>Our values translate into visible actions before, during and after every delivery.</p></div>
        <div class="values-grid">
            @foreach ([
                ['shield-check', 'Safety-minded', 'Thoughtful product handling and delivery practices from dispatch to completion.'],
                ['scan-line', 'Transparent', 'Clear quantities, pricing and communication so customers can make informed decisions.'],
                ['clock-3', 'Responsive', 'A reachable team and prompt coordination during our extended operating hours.'],
                ['handshake', 'Relationship-led', 'Service designed to earn repeat trust, not simply complete a transaction.'],
            ] as [$icon, $title, $copy])
                <article class="value-card" data-reveal><span><i data-lucide="{{ $icon }}"></i></span><h3>{{ $title }}</h3><p>{{ $copy }}</p></article>
            @endforeach
        </div>
    </div>
</section>

<section class="section operating-section">
    <div class="shell operating-grid">
        <div class="operating-panel" data-reveal><span>SUPPLY DESK</span><strong>09:00</strong><i data-lucide="arrow-down"></i><strong>21:00</strong><small>Monday to Saturday</small></div>
        <div data-reveal><div class="eyebrow eyebrow-dark"><span></span>Accessible support</div><h2>Long operating hours for real-world requirements.</h2><p class="lead">Our team is available Monday through Saturday, 9:00 AM to 9:00 PM, to receive enquiries, coordinate orders and assist with delivery planning.</p><a class="button button-primary" href="{{ route('contact') }}">Talk to our team <i data-lucide="arrow-right"></i></a></div>
    </div>
</section>

@include('partials.simple-cta')
@endsection
