import Alpine from 'alpinejs';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import Lenis from 'lenis';

window.Alpine = Alpine;

/* ─── Section scrolling (navbar, footer and in-page links all use this) ── */
// Lenis when it is running; otherwise native scrolling, instant under reduced motion.
// Sections carry `scroll-mt-16` so native jumps clear the fixed navbar.
window.scrollToSection = (id) => {
    const el = document.getElementById(id);
    if (!el) return;
    if (window.__lenis) {
        window.__lenis.scrollTo(el, { offset: -10, duration: 1 });
    } else {
        const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        el.scrollIntoView({ behavior: reduce ? 'auto' : 'smooth' });
    }
};

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
════════════════════════════════════════════════════════════════════════ */

const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

document.addEventListener('DOMContentLoaded', () => {
    initScrollProgress();

    if (prefersReduced) {
        document.querySelectorAll('.reveal').forEach(el => el.classList.add('visible'));
        return;
    }

    // Registered here, not at import time: registering wakes the GSAP ticker and ScrollTrigger's
    // rAF loop, which would otherwise keep running (~60 frames/s) under reduced motion too.
    gsap.registerPlugin(ScrollTrigger);
    initSmoothScroll();
    initScrollReveals();
    initTimeline();

    // Recalculate once images/fonts settle
    window.addEventListener('load', () => ScrollTrigger.refresh());
});

/* ─── Lenis smooth scroll (drives ScrollTrigger) ───────────────────────── */
function initSmoothScroll() {
    const lenis = new Lenis({ duration: 1, easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)) });
    window.__lenis = lenis;

    lenis.on('scroll', ScrollTrigger.update);
    gsap.ticker.add((time) => lenis.raf(time * 1000));
    gsap.ticker.lagSmoothing(0);
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
function initScrollReveals() {
    gsap.utils.toArray('.reveal').forEach((el) => {
        const delay = (parseInt(el.dataset.delay || '0', 10)) / 1000;
        gsap.fromTo(el,
            { y: 16, opacity: 0 },
            {
                y: 0, opacity: 1, duration: 0.6, delay, ease: 'power2.out',
                // Hand over to the CSS end state so no inline transform is left behind
                onComplete: () => { el.classList.add('visible'); gsap.set(el, { clearProps: 'transform,opacity' }); },
                scrollTrigger: { trigger: el, start: 'top 92%', once: true },
            }
        );
    });
}

/* ─── Experience timeline: the connecting line follows the scroll ──────── */
function initTimeline() {
    const track = document.querySelector('.timeline-track');
    if (!track) return;
    gsap.fromTo(track,
        { '--timeline-scale': 0 },
        {
            '--timeline-scale': 1, ease: 'none',
            scrollTrigger: { trigger: track, start: 'top 75%', end: 'bottom 75%', scrub: 0.5 },
        }
    );
}
