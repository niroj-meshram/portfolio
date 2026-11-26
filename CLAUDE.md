# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project

A single-page personal portfolio for Niroj Meshram, built on a Laravel 12 skeleton (PHP ^8.2). There is no backend business logic: one route (`/` → `pages.home`), no controllers, and the default `User` model and migrations are untouched. Almost all work happens in Blade views, `resources/css/app.css` and `resources/js/app.js`.

**Goal:** turn the site into a credible engineering portfolio for international SaaS/product companies and remote-first teams (recruiters and hiring managers for backend and full-stack roles). The goal is engineering depth, shown through real projects and technical decisions, not marketing language.

## Professional profile and content rules

**Positioning:** a backend-focused full-stack developer with 5+ years of experience, strongest in PHP/Laravel, with hands-on AWS production support and an AI-assisted workflow on a Symfony/Next.js codebase. Don't present Niroj as only a Laravel developer, a generic web developer, an AI expert or an engineering manager.

**Titles (user-confirmed):**
- Site headline and positioning: **"Full Stack Developer · Backend-focused"**.
- Official designations: Bacancy = **Software Engineer** (Apr 2025–present, Ahmedabad); Entrata = Software Engineer; Sofmen Technologies = Full Stack Developer. Never present the headline as an official job title (JSON-LD `jobTitle` is "Software Engineer" alongside `worksFor`).
- **Never use "Senior"** until the user provides an updated résumé.
- Professional location: **Ahmedabad, India**, IST (UTC+5:30). Indore appears only for Sofmen and the university.

### Technology classification (user-confirmed)

| Involvement | Items | How to present |
|---|---|---|
| Hands-on | PHP, Laravel, Filament, Blade, CodeIgniter (Sofmen), Node.js, Vue.js, JavaScript, jQuery, Tailwind CSS, Bootstrap, Smarty (Entrata), MySQL, PostgreSQL, REST APIs, Stripe, Google Maps/Places APIs, RBAC | Professional experience |
| AWS, hands-on and independent | Lambda, SQS, RDS (MySQL), S3, CloudFront, CloudWatch: production troubleshooting, infrastructure investigation, monitoring, application support | Always separate from AI-assisted work. EC2 and API Gateway are **not** confirmed; don't list them |
| AI-assisted production work | Symfony, API Platform, Doctrine, Next.js, React, TypeScript, Material UI, Formik, Yup; works within DDD, CQRS, Hexagonal Architecture | Niroj defines the requirement/approach, Claude Code suggests the implementation, he reviews and tests. **Never** claim independent proficiency, that he wrote the codebase, or that he designed the architecture |
| Platform context only | Auth0 (authentication on the client platform); async processing for imports/exports | Mention in the case study only; no MFA/RBAC or implementation-expertise claims |
| Development only | Docker | Local development environments, not production infrastructure |
| Personal projects | Python; Employee Handbook RAG (working prototype: FastAPI, PostgreSQL + pgvector, Gemini; not published, so no repo link) | Clearly labelled personal; not professional AI product work |
| AI coding tools | Claude Code, Cursor, ChatGPT | A productivity practice, never AI product experience |
| Don't list | Redis, Clean Architecture, Java, C++ | Unless the user verifies them later |

**Employer facts:** Entrata used a custom PHP framework (Fuse) with Smarty templates. Never call Fuse Laravel, CodeIgniter or Symfony. FranApp, Everlease, TheWayApp and Wallaby Windows were **Sofmen Technologies** projects; describe them only with the résumé bullets (no added responsibilities or outcomes). The Filament media library package is unconfirmed, so say "a Filament media library plugin". LinkedIn skill badges are not certifications and are not shown on the site.

### Confidentiality: the enterprise SaaS client project

Niroj is the only active Bacancy developer on an enterprise SaaS platform for a client. **Its name is not approved for publication: never write it in the site, metadata, commits or this repo.** Also never publish screenshots, URLs, entity/table/service names, data volumes or metrics. The "large data imports" challenge (timeouts and memory issues) stays qualitative: he investigated it with Claude and they identified a solution together. Don't claim he discovered or implemented the fix alone, don't describe the fix, and don't claim an outcome.

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

**Fresh checkout state:** there's no `vendor/`, no `node_modules/`, no `.env` and no `database/database.sqlite`, so builds, tests and Pint all fail until `composer setup` runs. The page needs migrations even to render, because `.env.example` sets `SESSION_DRIVER=database`. If migrate reports the SQLite file missing, create it with `touch database/database.sqlite`. `MAIL_MAILER=log`, so mail isn't delivered locally.

**Node version:** Vite 7 needs Node ≥20.19. The shell's default `node` is 20.10, so prefix npm/composer commands with a newer nvm Node, e.g. `PATH=$HOME/.nvm/versions/node/v24.19.0/bin:$PATH npm run build`. `npm install` may rewrite the `name` field in `package-lock.json`; don't leave that as an unrelated change.

There's no JS linter and no JS test setup. **Playwright is not installed; don't assume it is.** `google-chrome` is available for headless screenshots, e.g. `google-chrome --headless --window-size=375,812 --screenshot=out.png http://127.0.0.1:8001`. Port 8000 may be taken by an unrelated local app; check which port `php artisan serve` actually bound. `.reveal*` elements start at `opacity: 0` and only appear when scrolled into view, so a static screenshot can show blank areas below the fold.

## Views

- `layouts/app.blade.php` holds:
  - SEO meta, the canonical URL, Open Graph/Twitter tags and the JSON-LD `Person` schema
  - Google Fonts
  - `#scroll-progress` (the only global fixed decoration; the mouse glow and particle canvas were removed in Phase 3)
  - includes `partials/navbar` and `partials/footer`
  - yields `title`, `description`, `head`, `content`
  - a `<noscript>` style that makes `.reveal` content visible without JavaScript
  - `<main class="overflow-x-clip">`: **keep it.** Anything wider than the viewport (e.g. a long unbreakable email in a grid track) would otherwise widen the mobile layout viewport and push the fixed navbar and menu button past the screen edge. Give grid children `min-w-0` and long strings `break-all`/`break-words`; with the clip they would be cut off instead

  In JSON-LD inside Blade, write `@` as `@@` (e.g. `"@@context"`).
- `pages/home.blade.php` sets the page title/description and `@include`s the section partials in page order.
- `sections/*.blade.php`: one partial per section (`hero`, `experience`, `case-study`, `skills`, `projects`, `about`, `contact`). Content is hardcoded inline, often as `@foreach([...] as ...)` over literal arrays. Each file starts with a comment stating its content constraints.
- `welcome.blade.php` is the unused Laravel default.

### Sections and the navigation contract

Sections in page order: `hero`, `experience`, `case-study`, `skills`, `projects`, `about`, `contact` (education lives inside `about`). Every section has `scroll-mt-16` so native anchor jumps clear the fixed navbar. (The unverifiable "By the Numbers" stats section was removed in Phase 1; don't reintroduce unverified metrics.) A proposed new `engineering-notes` section doesn't exist yet. If it's added, it needs an ID, nav entries and a place in the order.

Section IDs are hardcoded in **five places**, which must all change together:

1. `resources/js/app.js`: the `sections` array in `Alpine.data('navbar')` (active-section tracking; checked from last to first)
2. `resources/views/partials/navbar.blade.php` ~line 22: desktop nav `@foreach` (`[$id, $label]` pairs, uses `scrollTo()`)
3. `resources/views/partials/navbar.blade.php` ~line 68: mobile nav `@foreach` (same list)
4. `resources/views/partials/footer.blade.php` ~line 28: footer nav `@foreach` (`$id => $label`, no `hero`)
5. `resources/views/pages/home.blade.php`: the `@include` order

In-page links (hero CTAs, "Read the case study", "See projects", footer) use `onclick="return !window.scrollToSection || (scrollToSection('id'), false);"`, so they fall back to the plain `href` if JS hasn't loaded. `window.scrollToSection(id)` in `app.js` is the single scroll implementation: Lenis when running, otherwise `scrollIntoView` (instant under reduced motion). `navbar.scrollTo()` calls it too. At 768px the desktop nav has 24px gaps between links; re-measure if labels change.

## JavaScript

**Alpine components** (registered in `app.js` via `Alpine.data`):
- `navbar`: also owns `mobileOpen`; the toggle button has `aria-controls="mobile-menu"` and a bound `aria-expanded`, and Escape closes the menu
- `copyEmail(email)`: the contact section's "Copy Email" button. Uses the Clipboard API with a `textarea` + `execCommand` fallback and reports the result in an `aria-live` region

There is **no contact form**. Contact is `mailto:` plus copy-email. Never add a form that shows success without actually delivering the message.

### Motion (deliberately minimal since Phase 3)

| Hook | Effect |
|---|---|
| `.reveal` + optional `data-delay` (ms) | GSAP fade + 16px rise once, at `top 92%`; on completion it adds `.visible` and clears the inline styles |
| `.timeline-track` (first one only) | scrubs the `--timeline-scale` CSS var that draws the experience rail (`::before`) |
| `#scroll-progress` | width follows scroll position (runs under reduced motion too; it isn't an animation) |
| `.animate-fade-up` + `.delay-100`…`.delay-400` | **CSS-only** hero entrance; no JS involved |

Removed in Phase 3, don't reintroduce: particles canvas, mouse glow, floating hero tech chips, parallax, card tilt, magnetic buttons, word-split headings (`data-title`), sideways reveals (`.reveal-left/right`), blur, infinite CSS animations, hover lift on non-interactive cards.

**Reduced motion:** with `prefers-reduced-motion: reduce`:
- Lenis and all GSAP setup are skipped, and `gsap.registerPlugin(ScrollTrigger)` isn't even called (registering wakes the GSAP ticker and a ScrollTrigger rAF loop that would otherwise run ~60 frames/s). Measured: 0 rAF callbacks per second
- `.reveal` elements get `.visible` (CSS end state)
- a `@media (prefers-reduced-motion: reduce)` block at the end of `app.css` zeroes animation durations **and delays** and transitions

Every new animated hook needs a matching reduced-motion path. Elements that start hidden must still become visible.

**Lenis:** created only when motion is allowed; exposed as `window.__lenis`, drives `ScrollTrigger.update` through the GSAP ticker. Anchor scrolls take 1s.

## Styling

- Tailwind v4 is configured in CSS (`@import 'tailwindcss'`, `@source`, `@theme`) through `@tailwindcss/vite`. There is no `tailwind.config.js`.
- **Palette** (dark only):
  - backgrounds: page `#0B1120`, alternating sections `#111827`
  - accents: teal `#14B8A6` (primary accent; `#2DD4BF` for text), blue `#3B82F6` (gradients only), violet for AI-assisted markers; green `#22C55E` only for the availability dot
  - text: `#F9FAFB`
  - section backgrounds are inline `style="background-color:…"` on each section (alternating `#0B1120` / `#111827` in page order); most other colours now come from component classes
- **Fonts:** Inter (body, `font-sans`) and Plus Jakarta Sans (headings, `font-heading` / `var(--font-heading)`), both from Google Fonts.
- **Custom classes in `app.css` live inside `@layer components`.** Keep new ones there. In Tailwind v4, unlayered CSS beats every utility, which previously made `hidden sm:inline-flex btn-primary` ignore `hidden`. With the layer, utilities override component classes as expected.
- `.btn-primary` uses a darker teal-to-blue gradient (`#0F766E` → `#1D4ED8`) so white text passes WCAG AA. Don't put white text on `#14B8A6` (2.5:1). Use `text-gray-400` or lighter for readable text on the dark backgrounds; `gray-500`/`gray-600` fail contrast.
- `:focus-visible` gets a 2px `#2DD4BF` outline (base layer).
- **Design system (`@layer components`)**, use these instead of ad-hoc utilities:
  - section rhythm: `.section` (64/80/104px vertical padding) on every section except the hero
  - section header: `<header class="section-head reveal">` + optional `.section-eyebrow` + `h2.section-title` + `p.section-lead`. Headers are left-aligned; no emoji or pill labels; no gradient words in `h2`
  - cards: `.glass-card` / `.project-card` (one surface style, static, radius 16px) with `p-6 sm:p-8`; `.panel` for inset items; `.card-title` for card headings; `.meta-label` for small uppercase labels and `<dt>`s
  - lists: `.bullets` (teal dot markers) with `role="list"` on every `ul`/`ol` (Tailwind's `list-none` drops list semantics in Safari)
  - buttons: `.btn-primary`, `.btn-secondary` (both 48px min height), `.btn-sm` (navbar), `.icon-btn` (44px social icons), `.text-link` (44px min height)
  - badges: `.badge` + `-teal` (hands-on), `-assisted` (AI-assisted, dashed violet), `-neutral` (personal/dates), `-blue`, `-purple`, `-green`
  - chips: `.skill-chip` (labels, no hover; `white-space: nowrap`, add `whitespace-normal` to long ones), `.skill-chip-assisted`
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
  - group by actual involvement (Hands-on, AWS hands-on, AI-assisted production work, Tools & environment, Personal projects). AI-assisted chips use `.skill-chip-assisted` (dashed border) **and** always sit under a text label
  - no percentage ratings or unverified counts (skill bars, "100% Client Satisfaction", "10+ Projects", "20+ Technologies" were removed in Phase 1)
  - keep production experience visibly separate from experimentation
- **Projects:** prefer a few detailed case studies to many shallow cards. Cover the problem, architecture, stack, Niroj's responsibilities, challenges, decisions and verified outcomes. Label personal and experimental work.
- Prefer existing dependencies. Don't add frameworks without a strong reason.

## Known broken links and assets

- `public/images/og-image.jpg` is referenced by the OG/Twitter meta but **doesn't exist**.
- `public/favicon.ico` is empty (0 bytes).
- Confirmed profile URLs (user-approved; used in the hero, contact section, footer and JSON-LD `sameAs`): GitHub `https://github.com/niroj-meshram`, LinkedIn `https://www.linkedin.com/in/nirojmeshram/`. Never invent other profile URLs.
- **The phone number must not appear on the site** (user decision). It stays in the downloadable résumé PDF on purpose.
- **Domain: `nirojdev.in`** (not `niroj.dev`). `layouts/app.blade.php` sets `$siteUrl = 'https://nirojdev.in'` and uses it for canonical, `og:url`, OG/Twitter image URLs and JSON-LD `url`, so metadata never depends on the request host or `APP_URL`. The logo text "nirojdev.in" (navbar and footer) is hidden at 768–1023px, where the desktop nav has no room for it.
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
