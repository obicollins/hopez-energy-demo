import './bootstrap';
import { siWhatsapp } from 'simple-icons';
import {
    createIcons,
    Activity, ArrowDown, ArrowLeft, ArrowRight, ArrowUpRight, BadgeCheck, Banknote,
    Building2, CalendarClock, CalendarDays, Check, ChevronDown, CircleCheckBig,
    ClipboardPenLine, Clock3, Container, Database, Download, Droplet, Droplets,
    ExternalLink, Eye, Factory, Fuel, Gauge, Handshake, HardHat, Headset, Hospital, House, Houses,
    Inbox, Info, KeyRound, LayoutDashboard, ListFilter, LogOut, Mail, MapPin,
    MapPinCheck, MapPinned, Maximize2, Menu, MessageCircle, MessageSquareText, MessagesSquare,
    PackageCheck, Phone, Plus, RefreshCw, Route, ScanLine, School, Search, SearchX,
    ShieldCheck, Sparkles, Truck, X,
} from 'lucide';

document.documentElement.classList.add('js');

createIcons({
    icons: {
        Activity, ArrowDown, ArrowLeft, ArrowRight, ArrowUpRight, BadgeCheck, Banknote,
        Building2, CalendarClock, CalendarDays, Check, ChevronDown, CircleCheckBig,
        ClipboardPenLine, Clock3, Container, Database, Download, Droplet, Droplets,
        ExternalLink, Eye, Factory, Fuel, Gauge, Handshake, HardHat, Headset, Hospital, House, Houses,
        Inbox, Info, KeyRound, LayoutDashboard, ListFilter, LogOut, Mail, MapPin,
        MapPinCheck, MapPinned, Maximize2, Menu, MessageCircle, MessageSquareText, MessagesSquare,
        PackageCheck, Phone, Plus, RefreshCw, Route, ScanLine, School, Search, SearchX,
        ShieldCheck, Sparkles, Truck, X,
    },
    attrs: { 'aria-hidden': 'true' },
});

document.querySelectorAll('[data-whatsapp-icon]').forEach((element) => {
    element.innerHTML = `<svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path fill="currentColor" d="${siWhatsapp.path}" /></svg>`;
});

const header = document.querySelector('[data-site-header]');
const navToggle = document.querySelector('[data-nav-toggle]');
const primaryNav = document.querySelector('[data-primary-nav]');
const dropdownToggle = document.querySelector('[data-dropdown-toggle]');
const servicesDropdown = dropdownToggle?.closest('.nav-dropdown');

const closeServicesDropdown = () => {
    servicesDropdown?.classList.remove('is-open');
    dropdownToggle?.setAttribute('aria-expanded', 'false');
};

const updateHeader = () => header?.classList.toggle('is-scrolled', window.scrollY > 18);
updateHeader();
window.addEventListener('scroll', updateHeader, { passive: true });

navToggle?.addEventListener('click', () => {
    const open = document.body.classList.toggle('nav-open');
    navToggle.setAttribute('aria-expanded', String(open));
    navToggle.setAttribute('aria-label', open ? 'Close navigation' : 'Open navigation');
    if (!open) closeServicesDropdown();
});

dropdownToggle?.addEventListener('click', (event) => {
    if (window.matchMedia('(max-width: 900px)').matches) {
        event.preventDefault();
        const open = servicesDropdown?.classList.toggle('is-open') ?? false;
        dropdownToggle.setAttribute('aria-expanded', String(open));
    }
});

primaryNav?.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => {
        document.body.classList.remove('nav-open');
        navToggle?.setAttribute('aria-expanded', 'false');
        closeServicesDropdown();
    });
});

const adminMenu = document.querySelector('[data-admin-menu]');
const adminMenuClose = document.querySelector('[data-admin-menu-close]');
const adminMenuBackdrop = document.querySelector('[data-admin-menu-backdrop]');
const adminSidebar = document.querySelector('[data-admin-sidebar]');

const closeAdminMenu = () => {
    document.body.classList.remove('admin-nav-open');
    adminMenu?.setAttribute('aria-expanded', 'false');
    adminMenu?.setAttribute('aria-label', 'Open admin menu');
};

const toggleAdminMenu = () => {
    const open = document.body.classList.toggle('admin-nav-open');
    adminMenu?.setAttribute('aria-expanded', String(open));
    adminMenu?.setAttribute('aria-label', open ? 'Close admin menu' : 'Open admin menu');
};

adminMenu?.addEventListener('click', toggleAdminMenu);
adminMenuClose?.addEventListener('click', closeAdminMenu);
adminMenuBackdrop?.addEventListener('click', closeAdminMenu);
adminSidebar?.querySelectorAll('nav a, .admin-sidebar-foot a').forEach((link) => {
    link.addEventListener('click', closeAdminMenu);
});
document.addEventListener('click', (event) => {
    if (
        !document.body.classList.contains('admin-nav-open') ||
        adminSidebar?.contains(event.target) ||
        adminMenu?.contains(event.target)
    ) return;

    closeAdminMenu();
});

document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
        document.body.classList.remove('nav-open');
        navToggle?.setAttribute('aria-expanded', 'false');
        closeServicesDropdown();
        closeAdminMenu();
    }
});

document.querySelectorAll('.site-body .section-heading, .site-body .process-list li, .site-body .office-card, .site-body .final-cta-inner > div').forEach((item) => {
    if (!item.hasAttribute('data-reveal')) item.setAttribute('data-reveal', '');
});
const revealItems = document.querySelectorAll('[data-reveal]');
document.querySelectorAll('.site-body .service-showcase, .site-body .values-grid, .site-body .industry-grid, .site-body .process-list').forEach((group) => {
    group.querySelectorAll('[data-reveal]').forEach((item, index) => item.style.setProperty('--reveal-delay', `${Math.min(index, 3) * 100}ms`));
});
if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.09, rootMargin: '0px 0px -30px' });
    revealItems.forEach((item) => observer.observe(item));
} else {
    revealItems.forEach((item) => item.classList.add('is-visible'));
}

// Public-site motion is progressively enhanced; the first slide works without JS.
const motionPreference = window.matchMedia('(prefers-reduced-motion: reduce)');
const hero = document.querySelector('[data-hero-carousel]');
if (hero) {
    const slides = [...hero.querySelectorAll('[data-hero-slide]')];
    const images = [...hero.querySelectorAll('[data-hero-image]')];
    let activeCopy = 0;
    let activeImage = 0;
    let nextImage = 1;
    let visible = true;
    let focused = false;
    let changing = false;
    let imagePlaying = false;
    let copyPlaying = false;
    let imageTimer;
    let copyTimer;
    const imageInterval = 5000;
    const copyInterval = 12000;
    const isPlaying = () => !motionPreference.matches && visible && !document.hidden;
    const isCopyPlaying = () => isPlaying() && !focused;

    const loadImage = async (index) => {
        const visual = images[index];
        const source = visual.querySelector('source');
        const image = visual.querySelector('img');
        if (source?.dataset.srcset) {
            source.srcset = source.dataset.srcset;
            delete source.dataset.srcset;
        }
        if (image.dataset.src) {
            image.src = image.dataset.src;
            delete image.dataset.src;
        }
        let deadline;
        try {
            return await Promise.race([
                image.decode().then(() => image.complete && image.naturalWidth > 0),
                new Promise(resolve => { deadline = setTimeout(() => resolve(false), 4000); }),
            ]);
        } catch {
            return false;
        } finally {
            clearTimeout(deadline);
        }
    };

    const scheduleImages = () => {
        clearTimeout(imageTimer);
        if (isPlaying()) imageTimer = setTimeout(advanceImage, imageInterval);
    };
    const scheduleCopy = () => {
        clearTimeout(copyTimer);
        if (isCopyPlaying()) copyTimer = setTimeout(advanceCopy, copyInterval);
    };
    const schedule = () => {
        const playing = isPlaying();
        hero.classList.toggle('is-playing', playing);
        // Repeated focus/visibility events must not keep resetting the image clock.
        if (imagePlaying !== playing) {
            imagePlaying = playing;
            scheduleImages();
        }
        const playingCopy = isCopyPlaying();
        if (copyPlaying !== playingCopy) {
            copyPlaying = playingCopy;
            scheduleCopy();
        }
    };

    const advanceImage = async () => {
        if (changing || !isPlaying()) return;
        changing = true;
        const index = nextImage;
        const loaded = await loadImage(index);
        if (isPlaying()) {
            nextImage = (index + 1) % images.length;
            if (loaded) {
                images[activeImage].classList.remove('is-active');
                activeImage = index;
                images[activeImage].classList.add('is-active');
            }
            // A failed image cannot trap rotation on the same missing frame.
            loadImage(nextImage);
        }
        changing = false;
        scheduleImages();
    };
    const advanceCopy = () => {
        if (!isCopyPlaying()) return;
        slides[activeCopy].classList.remove('is-active');
        slides[activeCopy].setAttribute('aria-hidden', 'true');
        slides[activeCopy].inert = true;
        activeCopy = (activeCopy + 1) % slides.length;
        slides[activeCopy].inert = false;
        slides[activeCopy].removeAttribute('aria-hidden');
        slides[activeCopy].classList.add('is-active');
        scheduleCopy();
    };

    hero.addEventListener('focusin', () => { focused = true; schedule(); });
    hero.addEventListener('focusout', (event) => {
        if (!hero.contains(event.relatedTarget)) { focused = false; schedule(); }
    });
    // Pointer hover does not stop the slideshow. Keyboard focus holds only copy.
    document.addEventListener('visibilitychange', schedule);
    motionPreference.addEventListener('change', schedule);
    if ('IntersectionObserver' in window) {
        new IntersectionObserver(([entry]) => { visible = entry.isIntersecting; schedule(); }, { threshold: 0.1 }).observe(hero);
    }
    // Give the first image and page content priority before warming the next slide.
    const warmNext = () => setTimeout(() => { if (!motionPreference.matches) loadImage(1); }, 1200);
    if (document.readyState === 'complete') warmNext();
    else window.addEventListener('load', warmNext, { once: true });
    schedule();
}

const marquee = document.querySelector('[data-trust-marquee]');
if (marquee) {
    const track = marquee.querySelector('.trust-marquee-track');
    const original = track.querySelector('.trust-marquee-group');
    const duplicate = original.cloneNode(true);
    duplicate.setAttribute('aria-hidden', 'true');
    duplicate.inert = true;
    track.append(duplicate);
}

document.querySelector('[data-password-toggle]')?.addEventListener('click', (event) => {
    const input = document.querySelector('[data-password-input]');
    if (!input) return;
    const shouldShow = input.type === 'password';
    input.type = shouldShow ? 'text' : 'password';
    event.currentTarget.setAttribute('aria-label', shouldShow ? 'Hide password' : 'Show password');
});

const quoteModal = document.querySelector('[data-quote-modal]');
const quoteUrl = quoteModal?.dataset.quoteUrl;
const quotePath = quoteUrl ? new URL(quoteUrl, window.location.origin).pathname : null;
let lastQuoteTrigger = null;

const isCompactScreen = () => window.matchMedia('(max-width: 640px)').matches;

const openQuoteModal = (trigger = null) => {
    if (!quoteModal || !isCompactScreen()) return;

    lastQuoteTrigger = trigger;
    document.body.classList.add('quote-modal-open');
    quoteModal.setAttribute('aria-hidden', 'false');

    window.requestAnimationFrame(() => {
        quoteModal.querySelector('input[name="name"]')?.focus();
    });
};

const closeQuoteModal = () => {
    if (!quoteModal) return;

    document.body.classList.remove('quote-modal-open');
    quoteModal.setAttribute('aria-hidden', 'true');
    lastQuoteTrigger?.focus();
};

if (quoteModal && quotePath) {
    document.querySelectorAll('a[href]').forEach((link) => {
        if (link.hasAttribute('data-quote-page-link')) return;

        const destination = new URL(link.href, window.location.origin);
        if (destination.origin !== window.location.origin || destination.pathname !== quotePath) return;

        link.addEventListener('click', (event) => {
            if (!isCompactScreen()) return;
            event.preventDefault();
            openQuoteModal(link);
        });
    });

    quoteModal.querySelectorAll('[data-quote-modal-close]').forEach((element) => {
        element.addEventListener('click', closeQuoteModal);
    });

    if (quoteModal.querySelector('.form-success, .form-errors')) {
        openQuoteModal();
    }
}

document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape' && document.body.classList.contains('quote-modal-open')) {
        closeQuoteModal();
    }
});

document.querySelectorAll('.inquiry-form').forEach((form) => {
    form.addEventListener('submit', () => {
        const button = form.querySelector('button[type="submit"]');
        button?.setAttribute('aria-busy', 'true');
    });
});
