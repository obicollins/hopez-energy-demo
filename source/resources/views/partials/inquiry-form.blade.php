@php($isQuote = ($mode ?? 'quote') === 'quote')

@if (session('success'))
    <div class="form-success" role="status">
        <i data-lucide="circle-check-big"></i>
        <div>
            <strong>{{ session('success') }}</strong>
            @if (session('reference'))<span>Your reference is {{ session('reference') }}.</span>@endif
        </div>
    </div>
@endif

@if ($errors->any())
    <div class="form-errors" role="alert">
        <strong>Please check the highlighted fields.</strong>
        <ul>
            @foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach
        </ul>
    </div>
@endif

<form class="inquiry-form" action="{{ route('inquiries.store') }}" method="POST">
    @csrf
    <input type="hidden" name="type" value="{{ $isQuote ? 'quote' : 'contact' }}">
    <div class="honeypot" aria-hidden="true"><label>Website<input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>

    <div class="form-grid">
        <label class="field">
            <span>Full name <b>*</b></span>
            <input type="text" name="name" value="{{ old('name') }}" autocomplete="name" required placeholder="Your full name">
        </label>
        <label class="field">
            <span>Company / organisation</span>
            <input type="text" name="company" value="{{ old('company') }}" autocomplete="organization" placeholder="Optional">
        </label>
        <label class="field">
            <span>Phone number <b>*</b></span>
            <input type="tel" name="phone" value="{{ old('phone') }}" autocomplete="tel" required placeholder="e.g. 0802 000 0000">
        </label>
        <label class="field">
            <span>Email address</span>
            <input type="email" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="you@company.com">
        </label>

        @if ($isQuote)
            <label class="field">
                <span>Customer type</span>
                <select name="customer_type">
                    <option value="">Select one</option>
                    @foreach (['Corporate organisation', 'Healthcare facility', 'School / institution', 'Estate / residence', 'Construction site', 'Individual home', 'Other'] as $option)
                        <option @selected(old('customer_type') === $option)>{{ $option }}</option>
                    @endforeach
                </select>
            </label>
            <label class="field">
                <span>Service required <b>*</b></span>
                <select name="service" required>
                    <option value="">Select a service</option>
                    @foreach (['Diesel / AGO supply', 'Petrol / PMS supply', 'Storage tank construction', 'Other enquiry'] as $option)
                        <option @selected(old('service') === $option)>{{ $option }}</option>
                    @endforeach
                </select>
            </label>
            <label class="field">
                <span>Estimated quantity (litres)</span>
                <input type="number" name="quantity_litres" value="{{ old('quantity_litres') }}" min="1" max="10000000" inputmode="numeric" placeholder="e.g. 5,000">
            </label>
            <label class="field">
                <span>Preferred delivery date</span>
                <input type="date" name="preferred_delivery_date" value="{{ old('preferred_delivery_date') }}" min="{{ now()->format('Y-m-d') }}">
            </label>
            <label class="field field-wide">
                <span>Delivery location</span>
                <input type="text" name="delivery_address" value="{{ old('delivery_address') }}" autocomplete="street-address" placeholder="Street, area and nearest landmark">
            </label>
        @else
            <input type="hidden" name="service" value="General enquiry">
        @endif

        <label class="field {{ $isQuote ? '' : 'field-wide' }}">
            <span>Preferred response</span>
            <select name="preferred_contact" required>
                <option value="phone" @selected(old('preferred_contact') === 'phone')>Phone call</option>
                <option value="whatsapp" @selected(old('preferred_contact') === 'whatsapp')>WhatsApp</option>
                <option value="email" @selected(old('preferred_contact') === 'email')>Email</option>
            </select>
        </label>
        <label class="field field-wide">
            <span>{{ $isQuote ? 'Additional details' : 'How can we help?' }}</span>
            <textarea name="message" rows="5" placeholder="Tell us what you need, timing, access details or any special requirements">{{ old('message') }}</textarea>
        </label>
    </div>

    <label class="consent-field">
        <input type="checkbox" name="consent" value="1" required @checked(old('consent'))>
        <span>I agree that HOPEZ may use these details to review and respond to my request, as explained in the <a href="{{ route('privacy') }}" target="_blank">privacy notice</a>.</span>
    </label>

    <button class="button button-primary button-submit" type="submit">
        {{ $isQuote ? 'Send quote request' : 'Send enquiry' }} <i data-lucide="arrow-right"></i>
    </button>
    <p class="form-assurance"><i data-lucide="shield-check"></i>Your details are handled securely and used only to respond to this enquiry.</p>
</form>
