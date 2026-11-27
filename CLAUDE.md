# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project

A single-page personal portfolio for Niroj Meshram, built on a Laravel 12 skeleton (PHP ^8.2). There is no backend business logic: one route (`/` → `pages.home`), no controllers, and the default `User` model and migrations are untouched. Almost all work happens in Blade views, `resources/css/app.css` and `resources/js/app.js`.

**Goal:** turn the site into a credible engineering portfolio for international SaaS/product companies and remote-first teams (recruiters and hiring managers for backend and full-stack roles). The goal is engineering depth, shown through real projects and technical decisions, not marketing language.

## Professional profile and content rules

**Positioning (user-confirmed, replaces the earlier AI-assisted framing):** a backend-focused full-stack developer with 5+ years of experience, strongest in PHP/Laravel, who also develops React/TypeScript frontends and runs AWS production operations. He codes in Laravel and React himself; present them as professional development skills. Primary technologies, in this order: **PHP, Laravel, React, JavaScript, TypeScript, Node.js, MySQL, AWS** (the hero chips). Don't present Niroj as only a Laravel developer, a generic web developer, an AI expert or an engineering manager.

- **Never mention Symfony.** An earlier record said the enterprise SaaS backend was Symfony with API Platform and Doctrine. **The user corrected this on 2026-11-26: the backend is Laravel.** Don't use Symfony, API Platform or Doctrine anywhere (`HomePageTest` fails if they appear), and don't use the architecture terms recorded with them (DDD, CQRS, Hexagonal) unless the user confirms them.
- **Bacancy has two separate workstreams; keep them as separate entries:**
  - Laravel and Filament development: Laravel applications, custom Filament components and Builder blocks, Blade customisation, search and filtering, media management, RBAC (Filament Shield).
  - Enterprise SaaS platform (client): a **Laravel backend** and a React/TypeScript frontend. He is the **sole developer** (user-confirmed), responsible for the full stack, performance, data integrity, security and cloud infrastructure (AWS).
- **Filament belongs only to the Laravel/Filament workstream.** Never attribute Filament (or the Filament bullets) to the enterprise SaaS platform. `HomePageTest` requires Laravel, React and TypeScript in the case-study section and fails on "Filament" there.
- Don't attach "5+ years" to React or TypeScript; the 5+ years is PHP/Laravel. TypeScript isn't on the résumé (React.js is).
- **AI tools are productivity tools, not a defining trait.** Approved wording: "I use AI-assisted development tools such as Claude Code to accelerate implementation, investigate technical issues and improve development efficiency while retaining responsibility for technical decisions, code review and testing." It appears once, in About. **One user-approved exception (2026-11-27):** the Oopsie entry in Projects has a "Built with an AI-Assisted Engineering Workflow" block naming Claude Code. It presents AI as an accelerator and lists what Niroj owned (requirements, technical decisions, code review, testing and validation). Keep AI wording scoped to that block; don't spread it to other sections. Never describe Niroj as someone who only reviews AI-generated code. Don't use "Claude Code suggests the implementation" (also checked by the test), and don't use "AI-assisted" badges or dashed chips (removed).

**Titles (user-confirmed):**
- Site headline and positioning: **"Full Stack Developer · Backend-focused"**.
- Official designations: Bacancy = **Software Engineer** (Apr 2025–present, Ahmedabad); Entrata = Software Engineer; Sofmen Technologies = Full Stack Developer. Never present the headline as an official job title (JSON-LD `jobTitle` is "Software Engineer" alongside `worksFor`).
- **Never use "Senior"** until the user provides an updated résumé.
- Professional location: **Ahmedabad, India**, IST (UTC+5:30). Indore appears only for Sofmen and the university.

### Technology classification (user-confirmed)

| Involvement | Items | How to present |
|---|---|---|
| Professional (hands-on) | PHP, Laravel, React, JavaScript, TypeScript, Node.js, MySQL (primary); Filament, Blade, CodeIgniter (Sofmen), Vue.js, jQuery, Tailwind CSS, Bootstrap, Smarty (Entrata), PostgreSQL, REST APIs, Stripe, Google Maps/Places APIs, RBAC; debugging, code review, testing | Professional experience. The enterprise SaaS platform uses Laravel + React/TypeScript; Filament only appears in the separate Laravel/Filament workstream |
| AWS production operations | Lambda, SQS, RDS (MySQL), S3, CloudFront, CloudWatch: production troubleshooting, infrastructure investigation, monitoring, application support | Hands-on, on the enterprise SaaS platform. EC2 and API Gateway are **not** confirmed; don't list them (the résumé lists EC2; ask before using it) |
| Platform context only (case study "Platform context" panel) | Backend: PHP, Laravel. Frontend: Material UI, Formik, Yup. Also Auth0, async imports/exports | Facts about the existing platform, not skill chips; no MFA/RBAC or implementation-expertise claims. He didn't design the architecture |
| Never mention | Next.js (user decision); Symfony, API Platform, Doctrine (wrong earlier record); DDD/CQRS/Hexagonal Architecture (unconfirmed) | See Positioning |
| Development only | Docker | Local development environments, not production infrastructure |
| Personal projects | **Oopsie** (Chrome extension: React 18, TypeScript, Vite, Manifest V3, Gemini, Vitest, ESLint; public repo `https://github.com/niroj-meshram/oopsie`, no live demo, no licence file so never "open source", no published test count, and Testing Library is installed but unused so never list it. Source of truth: its README at `~/project/oopsie`); Python; Employee Handbook RAG (working prototype: FastAPI, PostgreSQL + pgvector, Gemini; not published, so no repo link) | Clearly labelled personal; not professional AI product work |
| AI-assisted development tools | Claude Code, Cursor, ChatGPT | Productivity tools (Skills → Tools & environment), never AI product experience or the defining characteristic |
| Don't list | Redis, Clean Architecture, Java, C++ | Unless the user verifies them later |

**Employer facts:** Entrata used a custom PHP framework (Fuse) with Smarty templates. Never call Fuse Laravel, CodeIgniter or Symfony. FranApp, Everlease, TheWayApp and Wallaby Windows were **Sofmen Technologies** projects; describe them only with the résumé bullets (no added responsibilities or outcomes). The Filament media library package is unconfirmed, so say "a Filament media library plugin". LinkedIn skill badges are not certifications and are not shown on the site.

### Confidentiality: the enterprise SaaS client project

Niroj is the sole developer of an enterprise SaaS platform for a client. **Its name is not approved for publication: never write it in the site, metadata, commits or this repo.** Also never publish screenshots, URLs, or entity/table/service names.

- **User-approved public description (2026-11-26):** a multi-tenant platform that housing associations and their contractors use to plan, cost and approve long-term maintenance for rental homes, replacing spreadsheet-based planning. The case study holds the approved Overview, Key features, My role, Highlights and Impact, and the experience entry condenses it. Treat that wording as the source; don't add features, responsibilities or outcomes beyond it.
- **Figures are approved for publication** (user, 2026-11-26), with one condition: **performance gains are shown as percentages, never as seconds or before/after values.** `HomePageTest::test_client_project_shows_performance_gains_as_percentages_not_seconds` checks the case study and the experience entry.
  - Project-overview load time: about 97% less (from 6.7 s → 0.22 s, i.e. 96.7%)
  - Spreadsheet imports: about 93% faster (from ~20 s → ~1.4 s)
  - Queries per page: 93% fewer (60 → 4)
  - Budget-screen response times: 50% lower ("halved")
  - Location data: 57% of properties had no coordinates, the integration had been failing silently for about two years, and the backfill can recover 99.8% of them
  - Volumes: thousands of rental homes, tens of thousands of price-list line items, and bulk updates of thousands of maintenance lines

  Recompute any percentage from the source values above rather than rounding it differently.
- **Security work is described by scope** (endpoint protection, authorisation, cross-site scripting), never by the specific vulnerabilities found in the client's system.
- **The large-import fix may be described** (a streaming parser matching the previous output, which fixed timeouts), because the user supplied it.

### Accuracy rules (mandatory)

- Never invent metrics, revenue, user counts, team sizes, performance percentages, leadership, certifications, deployments, responsibilities, or technologies used on a project.
- Sources allowed: the existing site, the résumé, or information the user supplies explicitly. If something important is missing, ask the user. Without verified numbers, describe outcomes qualitatively.
- Keep production work, personal projects and experiments clearly separate.
- Don't expose confidential client details, code, customer data or proprietary business information.
- Tone: confident, specific, concise, internationally readable. Avoid clichés ("passionate developer", "ninja", "rock-star", "expert in everything").

## Commands and environment

```bash
composer setup          # install deps, create .env, key:generate, migrate (SQLite), npm install + build
composer dev            # artisan serve + queue:listen + pail + vite, concurrently
npm run dev             # Vite dev server only (HMR)
npm run build           # production assets → public/build
composer test           # config:clear + artisan test (PHPUnit 11, in-memory SQLite)
php artisan test --filter=ExampleTest           # single test
vendor/bin/pint         # PHP formatting
```

**Fresh checkout state:** there's no `vendor/`, no `node_modules/`, no `.env` and no `database/database.sqlite`, so builds, tests and Pint all fail until `composer setup` runs. The home route (`/`) runs without the session/cookie/CSRF middleware (see `routes/web.php`), so it renders without a database; other routes and the default error pages still use `SESSION_DRIVER=database` from `.env.example`. If migrate reports the SQLite file missing, create it with `touch database/database.sqlite`. `MAIL_MAILER=log`, so mail isn't delivered locally.

**Node version:** Vite 7 needs Node ≥20.19. The shell's default `node` is 20.10, so prefix npm/composer commands with a newer nvm Node, e.g. `PATH=$HOME/.nvm/versions/node/v24.19.0/bin:$PATH npm run build`. `npm install` may rewrite the `name` field in `package-lock.json`; don't leave that as an unrelated change.

There's no JS linter and no JS test setup. **Playwright is not installed; don't assume it is.** `google-chrome` is available for headless screenshots, e.g. `google-chrome --headless --window-size=375,812 --screenshot=out.png http://127.0.0.1:8001`. Port 8000 may be taken by an unrelated local app; check which port `php artisan serve` actually bound. `.reveal` elements start at `opacity: 0` and only appear when scrolled into view, so a static screenshot can show blank areas below the fold.

**Lab measurements:** `php artisan serve` doesn't compress or cache, so local Lighthouse numbers are pessimistic. Lighthouse (and its bundled `puppeteer-core`) can be installed in a scratch directory with `npm install lighthouse`, never in the project. To approximate production, put a gzip proxy in front of the dev server, and forward the original `Host` header: Laravel builds absolute asset URLs from it, and a wrong host makes the JS and fonts fail on CORS without breaking the page visibly.

`tests/Feature/HomePageTest.php` guards the SEO metadata and content rules: title ≤ 60 and description ≤ 160 characters, canonical/OG URLs, valid JSON-LD with `jobTitle` "Software Engineer", no phone number, no cookies on `/`, and the sitemap/robots/icon/font files.

## Views

- `layouts/app.blade.php` holds:
  - SEO meta, the canonical URL, Open Graph/Twitter tags and JSON-LD (`@graph` of `WebSite`, `ProfilePage` and `Person`). `og:title`/`twitter:title` and the descriptions reuse the page's `title`/`description` sections (already escaped by `@section`, so echoed raw). There is **no share image by user choice**: no `og:image`/`twitter:image`, and `twitter:card` is `summary`
  - icon links (`/favicon.ico` with 16/32/48 px, `/apple-touch-icon.png` 180 px; both the navbar "NM" monogram)
  - a "Skip to content" link (`.skip-link`, the first tab stop) targeting `<main id="main" tabindex="-1">`
  - `#scroll-progress` (the only global fixed decoration; the mouse glow and particle canvas were removed in Phase 3)
  - includes `partials/navbar` and `partials/footer`
  - yields `title`, `description`, `head`, `content`
  - a `<noscript>` style that makes `.reveal` content visible without JavaScript
  - `<main class="overflow-x-clip">`: **keep it.** Anything wider than the viewport (e.g. a long unbreakable email in a grid track) would otherwise widen the mobile layout viewport and push the fixed navbar and menu button past the screen edge. Give grid children `min-w-0` and long strings `break-all`/`break-words`; with the clip they would be cut off instead

  In JSON-LD inside Blade, write `@` as `@@` (e.g. `"@@context"`).
- `pages/home.blade.php` sets the page title/description and `@include`s the section partials in page order.
- `sections/*.blade.php`: one partial per section (`hero`, `experience`, `case-study`, `skills`, `projects`, `about`, `contact`). Content is hardcoded inline, often as `@foreach([...] as ...)` over literal arrays. Each file starts with a comment stating its content constraints.
- `partials/icon.blade.php`: inline Lucide icons (ISC, copied from lucide-react 0.468.0), `@include('partials.icon', ['name' => 'timer', 'class' => 'w-5 h-5'])`. Decorative (`aria-hidden`); add new icons to its map rather than installing an icon package.
- `welcome.blade.php` is the unused Laravel default.

### Sections and the navigation contract

Sections in page order: `hero`, `experience`, `case-study`, `skills`, `projects`, `about`, `contact` (education lives inside `about`). Every section has `scroll-mt-16` so native anchor jumps clear the fixed navbar. (The unverifiable "By the Numbers" stats section was removed in Phase 1; don't reintroduce unverified metrics.) A proposed new `engineering-notes` section doesn't exist yet. If it's added, it needs an ID, nav entries and a place in the order.

Section IDs are hardcoded in **five places**, which must all change together:

1. `resources/js/app.js`: the `sections` array in `Alpine.data('navbar')` (active-section tracking; checked from last to first)
2. `resources/views/partials/navbar.blade.php` ~line 22: desktop nav `@foreach` (`[$id, $label]` pairs, uses `scrollTo()`)
3. `resources/views/partials/navbar.blade.php` ~line 69: mobile nav `@foreach` (same list)
4. `resources/views/partials/footer.blade.php` ~line 17: footer nav `@foreach` (`$id => $label`, no `hero`)
5. `resources/views/pages/home.blade.php`: the `@include` order

In-page links (hero CTAs, "Read the case study", "See projects", footer) use `onclick="return !window.scrollToSection || (scrollToSection('id'), false);"`, so they fall back to the plain `href` if JS hasn't loaded. `window.scrollToSection(id)` in `app.js` is the single scroll implementation: Lenis when running, otherwise `scrollIntoView` (instant under reduced motion). It also behaves like a native anchor: it pushes `#id` to the URL (the hero keeps the bare `/`), and gives the section `tabindex="-1"` and focuses it so the next Tab continues inside the section (sections get no focus ring for this). A `popstate` listener makes Back/Forward scroll between recorded sections. `navbar.scrollTo()` calls it too, and the navbar marks the active link with `aria-current="true"`. At 768px the desktop nav has 24px gaps between links; re-measure if labels change.

## JavaScript

**Alpine components** (registered in `app.js` via `Alpine.data`):
- `navbar`: also owns `mobileOpen`; the toggle button has `aria-controls="mobile-menu"` and a bound `aria-expanded`, and Escape closes the menu
- `copyEmail(email)`: the contact section's "Copy Email" button. Uses the Clipboard API with a `textarea` + `execCommand` fallback and reports the result in an `aria-live` region

There is **no contact form**. Contact is `mailto:` plus copy-email. Never add a form that shows success without actually delivering the message.

### Motion (deliberately minimal since Phase 3)

| Hook | Effect |
|---|---|
| `.reveal` + optional `data-delay` (ms) | an `IntersectionObserver` adds `.visible` once the element's top passes 92% of the viewport; the fade + 16px rise is the CSS transition on `.reveal` (`data-delay` becomes `transition-delay`) |
| `.timeline-track` (first one only) | a rAF-throttled scroll handler sets `--timeline-scale` (0 → 1 while the track passes 75% of the viewport), which draws the experience rail (`::before`) |
| `#scroll-progress` | width follows scroll position (runs under reduced motion too; it isn't an animation) |
| `.animate-fade-up` + `.delay-100`…`.delay-400` | **CSS-only** hero entrance; no JS involved |

Removed in Phase 3, don't reintroduce: particles canvas, mouse glow, floating hero tech chips, parallax, card tilt, magnetic buttons, word-split headings (`data-title`), sideways reveals (`.reveal-left/right`), blur, infinite CSS animations, hover lift on non-interactive cards. GSAP and ScrollTrigger were removed in Phase 4 (about 46 KB gzipped for two effects); there is no animation library. Don't add one back for effects that IntersectionObserver, CSS transitions or a scroll handler can do.

**Reduced motion:** with `prefers-reduced-motion: reduce`:
- Lenis, the reveal observer and the timeline handler are skipped. Measured: 0 rAF callbacks per second
- `.reveal` elements get `.visible` (CSS end state)
- a `@media (prefers-reduced-motion: reduce)` block at the end of `app.css` zeroes animation durations **and delays** and transitions

Every new animated hook needs a matching reduced-motion path. Elements that start hidden must still become visible.

**Lenis:** created only when motion is allowed; exposed as `window.__lenis`. Anchor scrolls take 1s.
- **Frame loop:** `initSmoothScroll()` runs Lenis's frame loop only while it animates: it is woken by Lenis's `virtual-scroll` event (wheel) and by `window.__lenisWake()`, which any code calling `__lenis.scrollTo()` must call. It sleeps after 10 idle frames, so an idle page runs 0 rAF callbacks per second. The clock fed to `lenis.raf()` advances at most 50 ms per frame, so the first frame after a sleep doesn't finish the animation instantly.
- **Deep links:** Lenis cancels the browser's jump to a URL fragment, so `initSmoothScroll()` jumps to `location.hash` itself, again on `load` and on `document.fonts.ready` (the font swap reflows text), unless the visitor has already scrolled.

## Styling

- Tailwind v4 is configured in CSS (`@import 'tailwindcss'`, `@source`, `@theme`) through `@tailwindcss/vite`. There is no `tailwind.config.js`.
- **Palette** (dark only):
  - backgrounds: page `#0B1120`, alternating sections `#111827`
  - accents: teal `#14B8A6` (primary accent; `#2DD4BF` for text), blue `#3B82F6` (gradients only), violet only in the hero name gradient; green `#22C55E` only for the availability dot
  - text: `#F9FAFB`
  - section backgrounds are inline `style="background-color:…"` on each section (alternating `#0B1120` / `#111827` in page order); most other colours now come from component classes
- **Fonts:** Inter (body, `font-sans`) and Plus Jakarta Sans (headings, `font-heading` / `var(--font-heading)`), **self-hosted** as variable latin-subset woff2 files in `public/fonts/` (`@font-face` at the top of `app.css`, `font-display: swap`). The upstream version is in the file name, because `.htaccess` caches them for a year; rename the file when you update a font. They are deliberately not preloaded: measured, preloading made mobile LCP worse. No Google Fonts requests.
- **Custom classes in `app.css` live inside `@layer components`.** Keep new ones there. In Tailwind v4, unlayered CSS beats every utility, which previously made `hidden sm:inline-flex btn-primary` ignore `hidden`. With the layer, utilities override component classes as expected.
- `.btn-primary` uses a darker teal-to-blue gradient (`#0F766E` → `#1D4ED8`) so white text passes WCAG AA. Don't put white text on `#14B8A6` (2.5:1). Use `text-gray-400` or lighter for readable text on the dark backgrounds; `gray-500`/`gray-600` fail contrast.
- `:focus-visible` gets a 2px `#2DD4BF` outline (base layer).
- **Design system (`@layer components`)**, use these instead of ad-hoc utilities:
  - section rhythm: `.section` (64/80/104px vertical padding) on every section except the hero
  - section header: `<header class="section-head reveal">` + optional `.section-eyebrow` + `h2.section-title` + `p.section-lead`. Headers are left-aligned; no emoji or pill labels; no gradient words in `h2`
  - cards: `.glass-card` / `.project-card` (one surface style, static, radius 16px) with `p-6 sm:p-8`; `.panel` for inset items; `.panel-accent` (teal tint, at most one per project: Oopsie's focus card); `.icon-tile` (40px icon square); `.group-title` (sub-group heading inside a section, e.g. "Personal projects"); `.card-title` for card headings; `.meta-label` for small uppercase labels and `<dt>`s
  - lists: `.bullets` (teal dot markers) with `role="list"` on every `ul`/`ol` (Tailwind's `list-none` drops list semantics in Safari)
  - buttons: `.btn-primary`, `.btn-secondary` (both 48px min height), `.btn-sm` (navbar), `.icon-btn` (44px social icons), `.text-link` (44px min height)
  - badges: `.badge` + `-teal` (professional work, current dates), `-neutral` (personal/dates)
  - accessibility: `.skip-link` (off-screen until focused); elements with `tabindex="-1"` (sections, `<main>`) get no focus ring because they only receive focus from code
  - chips: `.skill-chip` (labels, no hover; `white-space: nowrap`, add `whitespace-normal` to long ones). Core technologies in a group get `text-white font-semibold`
  - hero only: `.bg-mesh`, `.bg-grid`, `.gradient-text-full` (name), `.avail-dot`; `.gradient-text` only for the logo dot
  - nav: `.nav-link` (40px tall target), `.nav-scrolled`; timeline: `.timeline-track`, `.timeline-dot` (rail hidden below 640px); reveal: `.reveal` / `.visible`

## Design constraints

- Premium, restrained and readable: strong typography and hierarchy, consistent spacing, few accent colors, clear CTAs.
- **Avoid:**
  - generic template looks
  - excessive gradients, glows or floating elements
  - fake terminals
  - giant tech logos
  - unnecessary 3D, tilt, magnetic effects or parallax
  - animation that delays access to content
- **Skills:**
  - cards: Development (Backend, Frontend, Databases, Integrations, Practices; primary technologies highlighted), AWS (production operations), Tools & environment (including "AI-assisted development tools" as productivity tools), Personal projects. There is no "AI-assisted" skill category
  - no percentage ratings or unverified counts (skill bars, "100% Client Satisfaction", "10+ Projects", "20+ Technologies" were removed in Phase 1)
  - keep production experience visibly separate from experimentation
- **Projects:** prefer a few detailed case studies to many shallow cards. Cover the problem, architecture, stack, Niroj's responsibilities, challenges, decisions and verified outcomes. Label personal and experimental work. Projects has two groups: the Sofmen cards, then a "Personal projects" `h3` group (Oopsie as the flagship entry `#oopsie`, then the RAG card, both `h4`).
- Prefer existing dependencies. Don't add frameworks without a strong reason.

## Links, assets and hosting

- **Hosting: Hostinger** (LiteSpeed, which reads Apache `.htaccess`). `public/.htaccess` adds gzip, one-year immutable caching for hashed `/build/*` files and `/fonts/*.woff2`, one-week caching for the icons, and `X-Robots-Tag: noindex, nofollow` on PDFs. The rules can't be tested locally (no Apache/LiteSpeed here); check the response headers on the live site after a deploy. HTTP→HTTPS and www→apex redirects belong in hPanel, not in `.htaccess`.
- The HTML for `/` is sent with `Cache-Control: public, max-age=300` and an ETag (`cache.headers` middleware). Keep the max-age short: a Vite build deletes old hashed assets, so long-cached HTML would point at missing files after a deploy.
- **SEO files:** `public/robots.txt` (allows everything, points to the sitemap) and `public/sitemap.xml` (the single URL `https://nirojdev.in/`, no `lastmod`).
- **No share image** (user decision): don't add `og:image` unless the user supplies one.
- Confirmed profile URLs (user-approved; used in the hero, contact section, footer and JSON-LD `sameAs`): GitHub `https://github.com/niroj-meshram`, LinkedIn `https://www.linkedin.com/in/nirojmeshram/`. Never invent other profile URLs.
- **The phone number must not appear on the site** (user decision). It stays in the downloadable résumé PDF on purpose, and that PDF is kept out of search results with the `X-Robots-Tag` header (user decision).
- **Domain: `nirojdev.in`** (not `niroj.dev`). `layouts/app.blade.php` sets `$siteUrl = 'https://nirojdev.in'` and uses it for canonical, `og:url` and the JSON-LD URLs and `@id`s, so metadata never depends on the request host or `APP_URL`. The logo text "nirojdev.in" (navbar and footer) is hidden at 768–1023px, where the desktop nav has no room for it.
- The résumé PDF can't be regenerated here. If site content moves beyond it, point out the mismatch to the user.

## Verification

After meaningful changes:
- run `npm run build`
- run the relevant tests
- run Pint if PHP changed
- check rendering at 375, 390, 768, 1440 and 1920px when browser tooling allows: no horizontal overflow, working nav and CTAs, no console errors, no missing assets, visible focus states, adequate contrast and touch targets, meaningful alt text, reduced motion

A passing build doesn't prove the visuals are right. Never claim a check ran if it didn't. When reporting, list the files changed, the decisions made, the checks actually run, and any limitations or input needed.

## Git

- Creating branches and keeping local backups or diffs as checkpoints is allowed.
- **Don't commit, push, reset or discard changes without the user's explicit approval.** Every milestone commit needs separate approval.
- Check `git status` before substantial work and `git diff` before calling a milestone done.
