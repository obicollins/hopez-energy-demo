<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#142536">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Reliable Diesel Supply in Lagos & Uyo | HOPEZ Energy')</title>
    <meta name="description" content="@yield('description', 'HOPEZ delivers quality diesel to businesses, estates, institutions, construction sites and homes across Lagos and Uyo. Request a clear quotation.')">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('og_title', 'HOPEZ Energy, Reliable Energy. Delivered.')">
    <meta property="og:description" content="@yield('description', 'Reliable diesel delivery for businesses and homes across Lagos and Uyo.')">
    <meta property="og:image" content="{{ asset('images/optimized/coverage-hopez-tanker-1280.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <link rel="icon" type="image/jpeg" href="{{ asset('images/hopez-logo.jpeg') }}">
    @if (request()->routeIs('home'))
        <link rel="preload" as="image" type="image/webp" href="{{ asset('images/optimized/hero-road-ready-768.webp') }}" imagesrcset="{{ asset('images/optimized/hero-road-ready-768.webp') }} 768w, {{ asset('images/optimized/hero-road-ready-1280.webp') }} 1280w" imagesizes="100vw" fetchpriority="high">
    @endif
    @vite(['resources/css/app.css', 'resources/css/public-redesign.css', 'resources/js/app.js'])
    <script type="application/ld+json">
        {!! json_encode([
            chr(64) . 'context' => 'https://schema.org',
            '@type' => 'LocalBusiness',
            'name' => 'HOPEZ International Energy Resources Limited',
            'description' => 'Reliable diesel supply and storage tank construction across Lagos and Uyo.',
            'url' => url('/'),
            'telephone' => '+2348025109320',
            'email' => 'info@hopezenergy.ng',
            'image' => asset('images/hopez-logo.jpeg'),
            'address' => [[
                '@type' => 'PostalAddress',
                'streetAddress' => 'Wabacco Depot, Coconut, Apapa',
                'addressLocality' => 'Lagos',
                'addressRegion' => 'Lagos State',
                'addressCountry' => 'NG',
            ], [
                '@type' => 'PostalAddress',
                'streetAddress' => '19B Bishop Kale Close, Victoria Island',
                'addressLocality' => 'Lagos',
                'addressRegion' => 'Lagos State',
                'addressCountry' => 'NG',
            ], [
                '@type' => 'PostalAddress',
                'streetAddress' => '88 Atiku Abubakar Way',
                'addressLocality' => 'Uyo',
                'addressRegion' => 'Akwa Ibom State',
                'addressCountry' => 'NG',
            ]],
            'openingHoursSpecification' => [[
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                'opens' => '09:00',
                'closes' => '21:00',
            ]],
            'areaServed' => ['Lagos State, Nigeria', 'Akwa Ibom State, Nigeria'],
        ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
</head>
<body class="site-body">
    <a class="skip-link" href="#main-content">Skip to content</a>

    <div class="utility-bar">
        <div class="shell utility-inner">
            <div class="utility-group">
                <a href="tel:+2348025109320"><i data-lucide="phone"></i><span>0802 510 9320</span></a>
                <a class="utility-whatsapp" href="https://wa.me/2348035955786?text={{ urlencode('Hello HOPEZ, I would like to enquire about diesel supply.') }}" target="_blank" rel="noopener"><span class="brand-whatsapp-icon" data-whatsapp-icon></span><span class="utility-whatsapp-full">Chat on WhatsApp</span><span class="utility-whatsapp-short">Chat now</span></a>
                <a class="utility-email" href="mailto:info@hopezenergy.ng" aria-label="Email HOPEZ at info@hopezenergy.ng"><i data-lucide="mail"></i><span>info@hopezenergy.ng</span></a>
            </div>
            <div class="utility-hours"><i data-lucide="clock-3"></i><span>Mon to Sat · 9:00 AM to 9:00 PM</span></div>
        </div>
    </div>

    <header class="site-header" data-site-header>
        <div class="shell nav-shell">
            <a class="brand" href="{{ route('home') }}" aria-label="HOPEZ Energy home">
                <span class="brand-symbol"><img src="{{ asset('images/hopez-logo.jpeg') }}" alt="HOPEZ flame and gear mark" width="1070" height="1064" decoding="async"></span>
                <span class="brand-name"><strong>HOPEZ INTERNATIONAL</strong><small>ENERGY RESOURCES LTD.</small></span>
            </a>

            <button class="nav-toggle" type="button" aria-label="Open navigation" aria-expanded="false" aria-controls="primary-nav" data-nav-toggle>
                <span class="nav-toggle-lines" aria-hidden="true"><span></span><span></span><span></span></span>
            </button>

            <nav id="primary-nav" class="primary-nav" aria-label="Primary navigation" data-primary-nav>
                <a @class(['active' => request()->routeIs('home')]) href="{{ route('home') }}">Home</a>
                <a @class(['active' => request()->routeIs('about')]) href="{{ route('about') }}">About</a>
                <div class="nav-dropdown">
                    <button type="button" @class(['active' => request()->routeIs('services')]) data-dropdown-toggle aria-expanded="false" aria-controls="services-menu">
                        Services <i data-lucide="chevron-down"></i>
                    </button>
                    <div id="services-menu" class="nav-dropdown-menu">
                        <a href="{{ route('services') }}#diesel"><i data-lucide="fuel"></i><span><strong>Diesel supply</strong><small>Reliable AGO delivery</small></span></a>
                        <a href="{{ route('services') }}#tank-construction"><i data-lucide="container"></i><span><strong>Tank construction</strong><small>5,000L to 50,000L systems</small></span></a>
                    </div>
                </div>
                <a @class(['active' => request()->routeIs('contact')]) href="{{ route('contact') }}">Contact</a>
                <a class="button button-primary nav-quote" href="{{ route('quote.create') }}">Request a quote <i data-lucide="arrow-up-right"></i></a>
            </nav>
        </div>
    </header>

    <main id="main-content">
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="footer-main">
            <div class="shell footer-grid">
                <div class="footer-brand">
                    <a class="brand brand-footer" href="{{ route('home') }}">
                        <span class="brand-symbol"><img src="{{ asset('images/hopez-logo.jpeg') }}" alt="HOPEZ flame and gear mark" width="1070" height="1064" loading="lazy" decoding="async"></span>
                        <span class="brand-name"><strong>HOPEZ INTERNATIONAL</strong><small>ENERGY RESOURCES LTD.</small></span>
                    </a>
                    <p>Reliable petroleum products and professional energy support for the businesses and communities we serve.</p>
                    <div class="footer-badge"><i data-lucide="shield-check"></i><span>Reliable Energy.<strong>Delivered.</strong></span></div>
                </div>
                <div>
                    <h2>Company</h2>
                    <a href="{{ route('about') }}">About HOPEZ</a>
                    <a href="{{ route('services') }}#industries">Industries we serve</a>
                    <a href="{{ route('services') }}#service-areas">Service areas</a>
                    <a href="{{ route('contact') }}">Contact</a>
                </div>
                <div>
                    <h2>Services</h2>
                    <a href="{{ route('services') }}#diesel">Diesel / AGO supply</a>
                    <a href="{{ route('services') }}#petrol">Petrol / PMS supply</a>
                    <a href="{{ route('services') }}#tank-construction">Storage tank construction</a>
                    <a href="{{ route('quote.create') }}">Request a quotation</a>
                </div>
                <div class="footer-contact">
                    <h2>Contact</h2>
                    <a href="tel:+2348025109320"><i data-lucide="phone"></i><span>0802 510 9320</span></a>
                    <a href="tel:+2348035955786"><i data-lucide="phone"></i><span>0803 595 5786</span></a>
                    <a href="mailto:info@hopezenergy.ng"><i data-lucide="mail"></i><span>info@hopezenergy.ng</span></a>
                    <p><i data-lucide="map-pin"></i><span><strong>Head Office</strong>Wabacco Depot, Coconut, Apapa, Lagos State, Nigeria.</span></p>
                    <p><i data-lucide="map-pin"></i><span><strong>Victoria Island Branch Office</strong>19B Bishop Kale Close, Victoria Island, Lagos State, Nigeria.</span></p>
                    <p><i data-lucide="map-pin"></i><span><strong>Uyo Branch Office</strong>88 Atiku Abubakar Way, Uyo, Akwa Ibom State, Nigeria.</span></p>
                    <p><i data-lucide="clock-3"></i><span>Monday to Saturday: 9:00 AM to 9:00 PM</span></p>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="shell footer-bottom-inner">
                <p>&copy; {{ date('Y') }} HOPEZ International Energy Resources Limited. All rights reserved.</p>
                <div><a href="{{ route('privacy') }}">Privacy notice</a><a href="{{ route('admin.login') }}">Staff login</a></div>
            </div>
        </div>
    </footer>

    <a class="floating-whatsapp" href="https://wa.me/2348035955786?text={{ urlencode('Hello HOPEZ, I would like to request diesel supply.') }}" target="_blank" rel="noopener" aria-label="Order diesel via WhatsApp">
        <span class="floating-whatsapp-icon" data-whatsapp-icon></span><span class="floating-whatsapp-copy"><strong>Order via WhatsApp</strong><small>Chat with HOPEZ now</small></span>
    </a>

    <div class="mobile-action-bar" aria-label="Quick actions">
        <a href="tel:+2348025109320"><i data-lucide="phone"></i><span>Call</span></a>
        <a href="https://wa.me/2348035955786?text={{ urlencode('Hello HOPEZ, I would like to request diesel supply.') }}" target="_blank" rel="noopener"><span data-whatsapp-icon></span><span>WhatsApp</span></a>
        <a class="mobile-email-action" href="mailto:info@hopezenergy.ng"><i data-lucide="mail"></i><span>Email</span></a>
        <a class="mobile-quote-action" href="{{ route('quote.create') }}" aria-label="Request a quote"><i data-lucide="clipboard-pen-line"></i><span>Get quote</span></a>
    </div>

    <div class="quote-modal" data-quote-modal data-quote-url="{{ route('quote.create') }}" aria-hidden="true">
        <div class="quote-modal-backdrop" data-quote-modal-close></div>
        <section class="quote-modal-dialog" role="dialog" aria-modal="true" aria-labelledby="quote-modal-title" tabindex="-1">
            <header class="quote-modal-head">
                <div><span>FAST QUOTE REQUEST</span><h2 id="quote-modal-title">Tell us what you need.</h2></div>
                <button type="button" class="quote-modal-close" data-quote-modal-close aria-label="Close quote form"><i data-lucide="x"></i><span>Close</span></button>
            </header>
            <p class="quote-modal-intro">Share the essentials below and our team will respond during operating hours.</p>
            @include('partials.inquiry-form', ['mode' => 'quote'])
            <a class="quote-modal-page-link" href="{{ route('quote.create') }}" data-quote-page-link><i data-lucide="maximize-2"></i>Open the full quote page</a>
        </section>
    </div>
</body>
</html>
