<section class="page-hero">
    <div class="page-hero-media" aria-hidden="true"><img src="{{ asset($image ?? 'images/optimized/coverage-hopez-tanker-1280.webp') }}" alt="" width="1280" height="720" fetchpriority="high" decoding="async"></div>
    <div class="shell page-hero-inner">
        <div data-reveal>
            <div class="eyebrow"><span></span>{{ $eyebrow }}</div>
            <h1>{{ $title }} @isset($accent)<em>{{ $accent }}</em>@endisset</h1>
            <p>{{ $intro }}</p>
        </div>
        @isset($aside)
            <div class="page-hero-aside" data-reveal="right">{!! $aside !!}</div>
        @endisset
    </div>
</section>
