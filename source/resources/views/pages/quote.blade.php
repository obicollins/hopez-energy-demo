@extends('layouts.public')
@section('title', 'Request a Diesel Supply Quote | HOPEZ Energy')
@section('description', 'Request a diesel, petroleum supply or storage tank construction quotation from HOPEZ Energy in Lagos or Uyo.')

@section('content')
<section class="form-page">
    <div class="shell form-page-grid">
        <div class="form-page-copy" data-reveal>
            <div class="eyebrow"><span></span>Request a quotation</div>
            <h1>Tell us what your operation <em>needs.</em></h1>
            <p>Share a few details and our team will confirm availability, pricing and the most practical delivery arrangement.</p>
            <div class="form-contact-options">
                <a href="tel:+2348025109320"><i data-lucide="phone"></i><span>Prefer to call?<strong>0802 510 9320</strong></span></a>
                <a href="https://wa.me/2348035955786" target="_blank" rel="noopener"><span data-whatsapp-icon></span><span>Chat on WhatsApp<strong>Start conversation</strong></span></a>
            </div>
            <div class="form-hours"><i data-lucide="clock-3"></i><span><strong>Operating hours</strong>Monday to Saturday · 9:00 AM to 9:00 PM</span></div>
        </div>
        <div class="form-card" data-reveal="right">
            <div class="form-card-head"><span>QUOTE REQUEST</span><strong>Fields marked * are required</strong></div>
            @include('partials.inquiry-form', ['mode' => 'quote'])
        </div>
    </div>
</section>
@endsection
