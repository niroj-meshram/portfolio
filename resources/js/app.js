import './bootstrap';
import Alpine from 'alpinejs';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import Lenis from 'lenis';

gsap.registerPlugin(ScrollTrigger);
window.Alpine = Alpine;

/* ════════════════════════════════════════════════════════════════════════
   ALPINE COMPONENTS
════════════════════════════════════════════════════════════════════════ */

/* ─── Typed Role Text ──────────────────────────────────────────────────── */
Alpine.data('roleTyper', () => ({
    roles: ['Full Stack Developer', 'Software Engineer', 'Laravel Developer', 'SaaS Application Engineer'],
    currentIndex: 0,
    displayText: '',
    isDeleting: false,
    typingSpeed: 90,
    deletingSpeed: 45,
    pauseDelay: 2200,
    _timer: null,

    init() { this._tick(); },

    _tick() {
        const current = this.roles[this.currentIndex];
        this.displayText = this.isDeleting
            ? current.slice(0, this.displayText.length - 1)
            : current.slice(0, this.displayText.length + 1);

        if (!this.isDeleting && this.displayText === current) {
            this._timer = setTimeout(() => { this.isDeleting = true; this._tick(); }, this.pauseDelay);
            return;
        }
        if (this.isDeleting && this.displayText === '') {
            this.isDeleting = false;
            this.currentIndex = (this.currentIndex + 1) % this.roles.length;
        }
        this._timer = setTimeout(() => this._tick(), this.isDeleting ? this.deletingSpeed : this.typingSpeed);
    },
}));

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
        const sections = ['hero', 'about', 'experience', 'skills', 'projects', 'education', 'contact'];
        const offset = 100;
        for (let i = sections.length - 1; i >= 0; i--) {
            const el = document.getElementById(sections[i]);
            if (el && window.scrollY >= el.offsetTop - offset) { this.activeSection = sections[i]; break; }
        }
    },

    scrollTo(id) {
        this.mobileOpen = false;
        const el = document.getElementById(id);
        if (!el) return;
        if (window.__lenis) window.__lenis.scrollTo(el, { offset: -10, duration: 1.4 });
        else el.scrollIntoView({ behavior: 'smooth' });
    },
}));

/* ─── Contact Form ─────────────────────────────────────────────────────── */
Alpine.data('contactForm', () => ({
    form: { name: '', email: '', subject: '', message: '' },
    submitted: false,
    submitting: false,

    async submit() {
        this.submitting = true;
        await new Promise(r => setTimeout(r, 1200));
        this.submitted = true;
        this.submitting = false;
        this.form = { name: '', email: '', subject: '', message: '' };
        setTimeout(() => (this.submitted = false), 5000);
    },
}));

Alpine.start();

/* ════════════════════════════════════════════════════════════════════════
   ANIMATION ENGINE
════════════════════════════════════════════════════════════════════════ */

const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

document.addEventListener('DOMContentLoaded', () => {
    initSmoothScroll();
    initScrollProgress();
    initMouseGlow();
    initParticles();

    if (prefersReduced) {
        // Just make everything visible, skip motion
        document.querySelectorAll('.reveal, .reveal-left, .reveal-right, [data-animate]')
            .forEach(el => el.classList.add('visible'));
        runCountersImmediately();
        fillSkillBarsImmediately();
        return;
    }

    initHeroIntro();
    initScrollReveals();
    initSectionTitles();
    initTimeline();
    initSkillBars();
    initCounters();
    initParallax();
    initTiltCards();
    initMagneticButtons();

    // Recalculate once images/fonts settle
    window.addEventListener('load', () => ScrollTrigger.refresh());
});

/* ─── Lenis Smooth Scroll (drives ScrollTrigger) ───────────────────────── */
function initSmoothScroll() {
    if (prefersReduced) return;
    const lenis = new Lenis({
        duration: 1.1,
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
        smoothWheel: true,
        touchMultiplier: 1.6,
    });
    window.__lenis = lenis;

    lenis.on('scroll', ScrollTrigger.update);
    gsap.ticker.add((time) => lenis.raf(time * 1000));
    gsap.ticker.lagSmoothing(0);
}

/* ─── Scroll Progress Bar ──────────────────────────────────────────────── */
function initScrollProgress() {
    const bar = document.getElementById('scroll-progress');
    if (!bar) return;
    const update = () => {
        const pct = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
        bar.style.width = Math.min(pct, 100) + '%';
    };
    window.addEventListener('scroll', update, { passive: true });
    update();
}

/* ─── Mouse Follow Glow ────────────────────────────────────────────────── */
function initMouseGlow() {
    const glow = document.getElementById('mouse-glow');
    if (!glow || prefersReduced) return;
    let mx = innerWidth / 2, my = innerHeight / 2, cx = mx, cy = my;
    document.addEventListener('mousemove', e => { mx = e.clientX; my = e.clientY; }, { passive: true });
    (function raf() {
        cx += (mx - cx) * 0.08; cy += (my - cy) * 0.08;
        glow.style.transform = `translate(${cx}px, ${cy}px) translate(-50%, -50%)`;
        requestAnimationFrame(raf);
    })();
}

/* ─── Hero Entrance Timeline ───────────────────────────────────────────── */
function initHeroIntro() {
    const hero = document.getElementById('hero');
    if (!hero) return;

    // The CSS animate-fade-up classes pre-position elements; let GSAP own them instead.
    const items = hero.querySelectorAll('[class*="animate-fade-up"]');
    items.forEach(el => el.classList.remove(
        'animate-fade-up', 'delay-100', 'delay-200', 'delay-300',
        'delay-400', 'delay-500', 'delay-600'
    ));

    const tl = gsap.timeline({ defaults: { ease: 'power3.out' } });
    tl.from(items, { y: 34, opacity: 0, duration: 0.9, stagger: 0.12 }, 0.15);

    // Avatar pops in with a subtle scale + rotate settle
    const avatar = hero.querySelector('.order-1, .lg\\:order-2');
    if (avatar) {
        gsap.from(avatar, { scale: 0.86, opacity: 0, rotate: -6, duration: 1.2, ease: 'expo.out', delay: 0.2 });
    }
    // Floating stat badges drift in
    gsap.from(hero.querySelectorAll('.glass-card'), {
        scale: 0.6, opacity: 0, duration: 0.8, ease: 'back.out(1.7)', stagger: 0.12, delay: 0.7,
    });
    // Floating tech chips fade in
    gsap.from(hero.querySelectorAll('.tech-icon'), {
        opacity: 0, scale: 0.5, duration: 0.6, stagger: 0.08, delay: 0.9, ease: 'power2.out',
    });
}

/* ─── Generic Scroll Reveals (cards, paragraphs, list rows) ────────────── */
function initScrollReveals() {
    // Reveal blocks: fade + rise + slight blur
    const reveals = gsap.utils.toArray('.reveal');
    reveals.forEach((el) => {
        const delay = (parseInt(el.dataset.delay || '0')) / 1000;
        gsap.fromTo(el,
            { y: 46, opacity: 0, filter: 'blur(6px)' },
            {
                y: 0, opacity: 1, filter: 'blur(0px)', duration: 0.95, delay, ease: 'power3.out',
                scrollTrigger: { trigger: el, start: 'top 86%', toggleActions: 'play none none none' },
            }
        );
    });

    // Directional reveals
    gsap.utils.toArray('.reveal-left').forEach((el) => {
        gsap.fromTo(el, { x: -56, opacity: 0 }, {
            x: 0, opacity: 1, duration: 1, ease: 'power3.out',
            scrollTrigger: { trigger: el, start: 'top 85%' },
        });
    });
    gsap.utils.toArray('.reveal-right').forEach((el) => {
        gsap.fromTo(el, { x: 56, opacity: 0 }, {
            x: 0, opacity: 1, duration: 1, ease: 'power3.out',
            scrollTrigger: { trigger: el, start: 'top 85%' },
        });
    });

    // Stagger the cards inside each skills/projects/stats grid for a cascade effect
    gsap.utils.toArray('.stagger-grid').forEach((grid) => {
        const cards = grid.querySelectorAll('.stagger-item');
        gsap.fromTo(cards,
            { y: 60, opacity: 0, scale: 0.95 },
            {
                y: 0, opacity: 1, scale: 1, duration: 0.85, ease: 'power3.out', stagger: 0.12,
                scrollTrigger: { trigger: grid, start: 'top 80%' },
            }
        );
    });
}

/* ─── Section Titles: word-by-word rise ────────────────────────────────── */
function initSectionTitles() {
    gsap.utils.toArray('[data-title]').forEach((title) => {
        // Wrap each word in a span (preserve gradient spans)
        if (!title.dataset.split) {
            const wrap = (node) => {
                node.childNodes.forEach((child) => {
                    if (child.nodeType === 3) { // text node
                        const frag = document.createDocumentFragment();
                        child.textContent.split(/(\s+)/).forEach((word) => {
                            if (word.trim() === '') { frag.appendChild(document.createTextNode(word)); return; }
                            const span = document.createElement('span');
                            span.textContent = word;
                            span.style.display = 'inline-block';
                            span.style.willChange = 'transform, opacity';
                            frag.appendChild(span);
                        });
                        node.replaceChild(frag, child);
                    } else if (child.nodeType === 1) {
                        child.style.display = 'inline-block';
                    }
                });
            };
            wrap(title);
            title.dataset.split = '1';
        }
        const words = title.querySelectorAll('span');
        gsap.fromTo(words,
            { y: '110%', opacity: 0 },
            {
                y: '0%', opacity: 1, duration: 0.8, ease: 'power4.out', stagger: 0.05,
                scrollTrigger: { trigger: title, start: 'top 88%' },
            }
        );
    });
}

/* ─── Experience Timeline: draw line + reveal dots ─────────────────────── */
function initTimeline() {
    const track = document.querySelector('.timeline-track');
    if (!track) return;
    // Animate the gradient connector (::before) by scrubbing the --timeline-scale CSS var
    gsap.fromTo(track,
        { '--timeline-scale': 0 },
        {
            '--timeline-scale': 1, ease: 'none',
            scrollTrigger: { trigger: track, start: 'top 70%', end: 'bottom 80%', scrub: 1 },
        }
    );
    // Dots pop
    gsap.utils.toArray('.timeline-dot').forEach((dot) => {
        gsap.fromTo(dot, { scale: 0 }, {
            scale: 1, duration: 0.5, ease: 'back.out(2.5)',
            scrollTrigger: { trigger: dot, start: 'top 85%' },
        });
    });
}

/* ─── Skill Bars ───────────────────────────────────────────────────────── */
function initSkillBars() {
    gsap.utils.toArray('.skill-bar-fill[data-width]').forEach((bar) => {
        const delay = (parseInt(bar.dataset.delay || '0')) / 1000;
        gsap.fromTo(bar, { width: '0%' }, {
            width: bar.dataset.width + '%', duration: 1.4, delay, ease: 'power2.out',
            scrollTrigger: { trigger: bar, start: 'top 92%' },
        });
    });
}
function fillSkillBarsImmediately() {
    document.querySelectorAll('.skill-bar-fill[data-width]').forEach(b => b.style.width = b.dataset.width + '%');
}

/* ─── Animated Counters ────────────────────────────────────────────────── */
function initCounters() {
    gsap.utils.toArray('[data-counter]').forEach((el) => {
        const target = parseInt(el.dataset.counter);
        const suffix = el.dataset.suffix || '';
        const obj = { val: 0 };
        gsap.to(obj, {
            val: target, duration: 2, ease: 'power2.out',
            onUpdate: () => { el.textContent = Math.floor(obj.val) + suffix; },
            scrollTrigger: { trigger: el, start: 'top 90%' },
        });
    });
}
function runCountersImmediately() {
    document.querySelectorAll('[data-counter]').forEach(el => {
        el.textContent = el.dataset.counter + (el.dataset.suffix || '');
    });
}

/* ─── Parallax (hero glows, floating chips, section meshes) ────────────── */
function initParallax() {
    gsap.utils.toArray('[data-parallax]').forEach((el) => {
        const speed = parseFloat(el.dataset.parallax) || 0.3;
        gsap.to(el, {
            yPercent: -speed * 100, ease: 'none',
            scrollTrigger: { trigger: el.closest('section') || el, start: 'top bottom', end: 'bottom top', scrub: true },
        });
    });

    // Hero floating chips drift at varied speeds for depth
    gsap.utils.toArray('#hero .tech-icon').forEach((chip, i) => {
        gsap.to(chip, {
            y: (i % 2 === 0 ? -1 : 1) * (60 + i * 12), ease: 'none',
            scrollTrigger: { trigger: '#hero', start: 'top top', end: 'bottom top', scrub: true },
        });
    });
}

/* ─── 3D Tilt on cards ─────────────────────────────────────────────────── */
function initTiltCards() {
    if (matchMedia('(hover: none)').matches) return; // skip touch
    document.querySelectorAll('[data-tilt]').forEach((card) => {
        const strength = 8;
        const onMove = (e) => {
            const r = card.getBoundingClientRect();
            const px = (e.clientX - r.left) / r.width - 0.5;
            const py = (e.clientY - r.top) / r.height - 0.5;
            gsap.to(card, {
                rotateY: px * strength, rotateX: -py * strength, transformPerspective: 900,
                duration: 0.4, ease: 'power2.out', transformOrigin: 'center',
            });
        };
        const reset = () => gsap.to(card, { rotateX: 0, rotateY: 0, duration: 0.6, ease: 'power3.out' });
        card.addEventListener('mousemove', onMove);
        card.addEventListener('mouseleave', reset);
    });
}

/* ─── Magnetic buttons ─────────────────────────────────────────────────── */
function initMagneticButtons() {
    if (matchMedia('(hover: none)').matches) return;
    document.querySelectorAll('[data-magnetic]').forEach((btn) => {
        const onMove = (e) => {
            const r = btn.getBoundingClientRect();
            const x = e.clientX - r.left - r.width / 2;
            const y = e.clientY - r.top - r.height / 2;
            gsap.to(btn, { x: x * 0.3, y: y * 0.4, duration: 0.4, ease: 'power2.out' });
        };
        const reset = () => gsap.to(btn, { x: 0, y: 0, duration: 0.6, ease: 'elastic.out(1, 0.4)' });
        btn.addEventListener('mousemove', onMove);
        btn.addEventListener('mouseleave', reset);
    });
}

/* ─── Canvas Particles ─────────────────────────────────────────────────── */
function initParticles() {
    const canvas = document.getElementById('particles-canvas');
    if (!canvas) return;
    const ctx = canvas.getContext('2d');
    const colors = ['#14B8A6', '#3B82F6', '#8B5CF6'];
    let W = canvas.width = innerWidth, H = canvas.height = innerHeight;

    const particles = Array.from({ length: prefersReduced ? 0 : 55 }, () => ({
        x: Math.random() * W, y: Math.random() * H,
        vx: (Math.random() - 0.5) * 0.45, vy: (Math.random() - 0.5) * 0.45,
        r: Math.random() * 1.8 + 0.4,
        c: colors[Math.floor(Math.random() * 3)],
        a: Math.random() * 0.45 + 0.08,
    }));

    addEventListener('resize', () => { W = canvas.width = innerWidth; H = canvas.height = innerHeight; }, { passive: true });

    (function draw() {
        ctx.clearRect(0, 0, W, H);
        for (const p of particles) {
            p.x = (p.x + p.vx + W) % W;
            p.y = (p.y + p.vy + H) % H;
            ctx.beginPath();
            ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
            ctx.fillStyle = p.c + Math.round(p.a * 255).toString(16).padStart(2, '0');
            ctx.fill();
        }
        requestAnimationFrame(draw);
    })();
}
