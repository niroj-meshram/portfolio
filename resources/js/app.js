import Alpine from 'alpinejs';
import Lenis from 'lenis';

window.Alpine = Alpine;

/* ─── Section scrolling (navbar, footer and in-page links all use this) ── */
// Behaves like a native anchor link, only smoother: it scrolls (Lenis when it is running, otherwise
// native, instant under reduced motion), records the section in the URL so links can be shared and
// Back/Forward work, and moves focus into the section so the next Tab continues there instead of in
// the navbar. Sections carry `scroll-mt-16` so native jumps clear the fixed navbar.
function scrollToElement(el, smooth = true) {
    if (window.__lenis) {
        window.__lenis.scrollTo(el, { offset: -10, duration: 1, immediate: !smooth });
        window.__lenisWake(); // the frame loop sleeps while idle (see initSmoothScroll)
    } else {
        const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        el.scrollIntoView({ behavior: smooth && !reduce ? 'smooth' : 'auto' });
    }
}

window.scrollToSection = (id) => {
    const el = document.getElementById(id);
    if (!el) return;
    // The hero is the top of the page, so it keeps the clean URL (https://nirojdev.in/)
    const hash = id === 'hero' ? '' : '#' + id;
    if (location.hash !== hash) history.pushState(null, '', hash || location.pathname + location.search);
    scrollToElement(el);
    if (!el.hasAttribute('tabindex')) el.setAttribute('tabindex', '-1'); // focusable from code only
    el.focus({ preventScroll: true });
};

// Back/Forward between sections recorded above
window.addEventListener('popstate', () => {
    const el = document.getElementById(decodeURIComponent(location.hash.slice(1)) || 'hero');
    if (el) scrollToElement(el);
});

/* ════════════════════════════════════════════════════════════════════════
   ALPINE COMPONENTS
════════════════════════════════════════════════════════════════════════ */

/* ─── Navbar ───────────────────────────────────────────────────────────── */
Alpine.data('navbar', () => ({
    scrolled: false,
    mobileOpen: false,
    activeSection: 'hero',

    init() {
        this._onScroll();
        window.addEventListener('scroll', () => this._onScroll(), { passive: true });
    },

    _onScroll() {
        this.scrolled = window.scrollY > 40;
        // Must match the page order of the sections (checked from last to first).
        const sections = ['hero', 'experience', 'case-study', 'skills', 'projects', 'about', 'contact'];
        const offset = 100;
        for (let i = sections.length - 1; i >= 0; i--) {
            const el = document.getElementById(sections[i]);
            if (el && window.scrollY >= el.offsetTop - offset) { this.activeSection = sections[i]; break; }
        }
    },

    scrollTo(id) {
        this.mobileOpen = false;
        window.scrollToSection(id);
    },
}));

/* ─── Copy Email ───────────────────────────────────────────────────────── */
Alpine.data('copyEmail', (email) => ({
    email,
    copied: false,
    failed: false,
    status: '',
    _timer: null,

    async copy() {
        let ok = false;
        try {
            await navigator.clipboard.writeText(this.email);
            ok = true;
        } catch {
            // Clipboard API needs a secure context; fall back to a temporary textarea.
            const ta = Object.assign(document.createElement('textarea'), { value: this.email, readOnly: true });
            ta.style.cssText = 'position:fixed;opacity:0;pointer-events:none';
            document.body.appendChild(ta);
            ta.select();
            try { ok = document.execCommand('copy'); } catch { ok = false; }
            ta.remove();
        }
        this.copied = ok;
        this.failed = !ok;
        this.status = ok ? 'Email address copied to clipboard.' : 'Could not copy automatically. Please copy the address above.';
        clearTimeout(this._timer);
        this._timer = setTimeout(() => { this.copied = false; this.failed = false; this.status = ''; }, 4000);
    },
}));

Alpine.start();

/* ════════════════════════════════════════════════════════════════════════
   MOTION
   Deliberately small: smooth scrolling, a scroll progress bar, one fade-up
   reveal and the experience timeline line. Everything is skipped under
   prefers-reduced-motion, and hidden content is made visible instead.
   The hero entrance is CSS-only (.animate-fade-up).
   No animation library: the browser's IntersectionObserver and CSS
   transitions do the work (GSAP + ScrollTrigger were ~46 KB gzipped).
════════════════════════════════════════════════════════════════════════ */

const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

document.addEventListener('DOMContentLoaded', () => {
    initScrollProgress();

    if (prefersReduced) {
        document.querySelectorAll('.reveal').forEach(el => el.classList.add('visible'));
        return;
    }

    initSmoothScroll();
    initScrollReveals();
    initTimeline();
});

/* ─── Lenis smooth scroll ──────────────────────────────────────────────── */
function initSmoothScroll() {
    const lenis = new Lenis({ duration: 1, easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)) });
    window.__lenis = lenis;

    // Lenis needs a frame loop only while it animates: after a wheel gesture ('virtual-scroll') or a
    // scrollTo(), until the scroll settles. Touch, keyboard and scrollbar scrolling are native and need
    // no loop. An always-on loop would wake the main thread ~60 times a second on an idle page.
    // The clock fed to Lenis advances at most 50 ms per frame, so the first frame after a sleep doesn't
    // look like one huge time step (which would finish the scroll animation instantly).
    let running = false, idleFrames = 0, clock = 0, last = 0;
    const frame = (now) => {
        clock += Math.min(Math.max(now - last, 0), 50);
        last = now;
        lenis.raf(clock);
        idleFrames = lenis.isScrolling ? 0 : idleFrames + 1;
        if (idleFrames < 10) requestAnimationFrame(frame);
        else running = false;
    };
    window.__lenisWake = () => {
        idleFrames = 0;
        if (!running) { running = true; last = performance.now(); requestAnimationFrame(frame); }
    };
    lenis.on('virtual-scroll', window.__lenisWake);

    // Lenis takes over scrolling before the browser's own jump to a URL fragment sticks, so a shared
    // link such as /#case-study would stay at the top. Jump there explicitly, and again after the page
    // load and the web fonts (their swap reflows the text above the target), unless the visitor has
    // already started scrolling.
    const target = location.hash && document.getElementById(decodeURIComponent(location.hash.slice(1)));
    if (target) {
        let userScrolled = false;
        for (const type of ['wheel', 'touchstart', 'keydown']) {
            window.addEventListener(type, () => { userScrolled = true; }, { once: true, passive: true });
        }
        const jump = () => {
            if (userScrolled) return;
            lenis.scrollTo(target, { offset: -10, immediate: true, force: true });
            window.__lenisWake();
        };
        jump();
        window.addEventListener('load', jump, { once: true });
        document.fonts?.ready.then(jump);
    }
}

/* ─── Scroll progress bar ──────────────────────────────────────────────── */
function initScrollProgress() {
    const bar = document.getElementById('scroll-progress');
    if (!bar) return;
    const update = () => {
        const max = document.documentElement.scrollHeight - window.innerHeight;
        bar.style.width = (max > 0 ? Math.min((window.scrollY / max) * 100, 100) : 0) + '%';
    };
    window.addEventListener('scroll', update, { passive: true });
    update();
}

/* ─── Reveal on scroll: short fade-up, no blur or sideways motion ───────── */
// Fires once when an element's top crosses 92% of the viewport height. The fade itself is the CSS
// transition on .reveal → .reveal.visible; data-delay (ms) staggers neighbouring cards.
function initScrollReveals() {
    const io = new IntersectionObserver((entries) => {
        for (const { isIntersecting, target: el } of entries) {
            if (!isIntersecting) continue;
            if (el.dataset.delay) el.style.transitionDelay = `${parseInt(el.dataset.delay, 10)}ms`;
            el.classList.add('visible');
            io.unobserve(el);
        }
    }, { rootMargin: '0px 0px -8% 0px' });
    document.querySelectorAll('.reveal').forEach(el => io.observe(el));
}

/* ─── Experience timeline: the connecting line follows the scroll ──────── */
// Draws the rail (--timeline-scale, 0 → 1) as the track passes a line at 75% of the viewport height:
// starts when the track's top reaches it, complete when its bottom does. Updated once per frame at most.
function initTimeline() {
    const track = document.querySelector('.timeline-track');
    if (!track) return;
    let queued = false;
    const update = () => {
        queued = false;
        const r = track.getBoundingClientRect();
        const progress = Math.min(1, Math.max(0, (window.innerHeight * 0.75 - r.top) / r.height));
        track.style.setProperty('--timeline-scale', progress.toFixed(4));
    };
    const schedule = () => { if (!queued) { queued = true; requestAnimationFrame(update); } };
    window.addEventListener('scroll', schedule, { passive: true });
    window.addEventListener('resize', schedule, { passive: true });
    update();
}
