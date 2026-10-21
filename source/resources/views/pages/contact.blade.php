@extends('layouts.public')
@section('title', 'Contact HOPEZ Energy | Lagos & Uyo Offices')
@section('description', 'Call, WhatsApp or visit HOPEZ Energy at our Apapa, Victoria Island or Uyo offices. Open Monday to Saturday, 9 AM to 9 PM.')

@section('content')
@include('partials.page-hero', [
    'eyebrow' => 'Contact HOPEZ',
    'title' => 'Let’s discuss your',
    'accent' => 'energy needs.',
    'intro' => 'Reach our supply team by phone, WhatsApp or the enquiry form. We are available Monday through Saturday, 9:00 AM to 9:00 PM.',
    'aside' => '<i data-lucide="headset"></i><span>SUPPLY DESK</span><strong>0802 510 9320</strong>',
])

<section class="section contact-section">
    <div class="shell contact-grid">
        <div class="contact-details" data-reveal>
            <div class="contact-block"><i data-lucide="phone"></i><div><span>Phone</span><a href="tel:+2348025109320">0802 510 9320</a><a href="tel:+2348035955786">0803 595 5786</a></div></div>
            <div class="contact-block"><span class="contact-whatsapp-icon" data-whatsapp-icon></span><div><span>WhatsApp</span><a href="https://wa.me/2348035955786" target="_blank" rel="noopener">Chat with our team <i data-lucide="arrow-up-right"></i></a></div></div>
            <div class="contact-block"><i data-lucide="mail"></i><div><span>Email</span><a href="mailto:info@hopezenergy.ng">info@hopezenergy.ng</a></div></div>
            <div class="contact-block"><i data-lucide="clock-3"></i><div><span>Operating hours</span><strong>Monday to Saturday</strong><p>9:00 AM to 9:00 PM</p></div></div>
            <article class="office-card office-card-head">
                <div class="office-card-title"><span class="office-location-icon"><i data-lucide="map-pin-check"></i></span><div><span>HEAD OFFICE</span><h2>Apapa Head Office</h2></div></div>
                <p>Wabacco Depot, Coconut, Apapa, Lagos State, Nigeria.</p>
                <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode('Wabacco Depot Coconut Apapa Lagos State Nigeria') }}" target="_blank" rel="noopener"><span>Get directions</span><i data-lucide="external-link"></i></a>
            </article>
            <article class="office-card office-card-light">
                <div class="office-card-title"><span class="office-location-icon"><i data-lucide="map-pin-check"></i></span><div><span>BRANCH OFFICE</span><h2>Victoria Island Branch Office</h2></div></div>
                <p>19B Bishop Kale Close, Victoria Island, Lagos State, Nigeria.</p>
                <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode('19B Bishop Kale Close Victoria Island Lagos State Nigeria') }}" target="_blank" rel="noopener"><span>Get directions</span><i data-lucide="external-link"></i></a>
            </article>
            <article class="office-card office-card-light">
                <div class="office-card-title"><span class="office-location-icon"><i data-lucide="map-pin-check"></i></span><div><span>BRANCH OFFICE</span><h2>Uyo Branch Office</h2></div></div>
                <p>88 Atiku Abubakar Way, Uyo, Akwa Ibom State, Nigeria.</p>
                <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode('88 Atiku Abubakar Way Uyo Akwa Ibom State Nigeria') }}" target="_blank" rel="noopener"><span>Get directions</span><i data-lucide="external-link"></i></a>
            </article>
        </div>
        <div class="form-card form-card-contact" data-reveal="right"><div class="form-card-head"><span>GENERAL ENQUIRY</span><strong>We’ll respond during operating hours</strong></div>@include('partials.inquiry-form', ['mode' => 'contact'])</div>
    </div>
</section>
@endsection
