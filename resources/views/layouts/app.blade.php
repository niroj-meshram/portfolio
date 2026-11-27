<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- ── SEO ──────────────────────────────────────────────────────── --}}
    {{-- $siteUrl: public domain for canonical/OG/JSON-LD URLs. Hardcoded so metadata never depends on the
         request host or APP_URL (e.g. localhost, www., or a server IP).
         Title and description come from the page; Open Graph and Twitter reuse them so they cannot drift.
         @section('title', '...') already HTML-escapes its content, hence the raw echo. --}}
    @php
        $siteUrl = 'https://nirojdev.in';
        $metaTitle = trim($__env->yieldContent('title')) ?: e('Niroj Meshram · Backend-focused Full-Stack Engineer');
        $metaDescription = trim($__env->yieldContent('description')) ?: e('Backend-focused full-stack engineer: 5+ years in PHP and Laravel, plus React, TypeScript, MySQL and AWS. Open to full-time remote roles and contract work.');
    @endphp
    <title>{!! $metaTitle !!}</title>
    <meta name="description" content="{!! $metaDescription !!}">
    <meta name="author" content="Niroj Meshram">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#0B1120">
    <link rel="canonical" href="{{ $siteUrl }}/">

    {{-- ── Icons (the "NM" monogram from the navbar) ──────────────────── --}}
    <link rel="icon" href="/favicon.ico" sizes="48x48">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    {{-- ── Open Graph / Twitter: text only (no share image by choice) ─── --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $siteUrl }}/">
    <meta property="og:title" content="{!! $metaTitle !!}">
    <meta property="og:description" content="{!! $metaDescription !!}">
    <meta property="og:site_name" content="nirojdev.in">
    <meta property="og:locale" content="en_US">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="{!! $metaTitle !!}">
    <meta name="twitter:description" content="{!! $metaDescription !!}">

    {{-- ── Fonts: self-hosted (public/fonts, @font-face in app.css, font-display: swap). Deliberately
         not preloaded: in Lighthouse mobile runs with gzip on, preloading both fonts made first paint
         earlier (1.4 s → 1.1 s) but the largest paint later (median 1.4 s → 1.7 s), because the fonts
         compete with the CSS and JS for bandwidth. Same-origin fonts are found as soon as the CSS parses. --}}

    {{-- ── JSON-LD Structured Data ─────────────────────────────────── --}}
    {{-- jobTitle is the official designation (Software Engineer). No phone number, no client details. --}}
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@graph": [
            {
                "@@type": "WebSite",
                "@@id": "{{ $siteUrl }}/#website",
                "url": "{{ $siteUrl }}/",
                "name": "nirojdev.in",
                "inLanguage": "en"
            },
            {
                "@@type": "ProfilePage",
                "@@id": "{{ $siteUrl }}/#profile",
                "url": "{{ $siteUrl }}/",
                "name": "Niroj Meshram · Backend-focused Full-Stack Engineer",
                "inLanguage": "en",
                "isPartOf": { "@@id": "{{ $siteUrl }}/#website" },
                "mainEntity": { "@@id": "{{ $siteUrl }}/#person" }
            },
            {
                "@@type": "Person",
                "@@id": "{{ $siteUrl }}/#person",
                "name": "Niroj Meshram",
                "jobTitle": "Software Engineer",
                "worksFor": {
                    "@@type": "Organization",
                    "name": "Bacancy Software LLP"
                },
                "description": "Backend-focused full-stack engineer with 5+ years of experience in PHP and Laravel, who also develops React and TypeScript frontends and runs AWS production operations.",
                "email": "nirojmeshram@gmail.com",
                "url": "{{ $siteUrl }}/",
                "address": {
                    "@@type": "PostalAddress",
                    "addressLocality": "Ahmedabad",
                    "addressRegion": "Gujarat",
                    "addressCountry": "IN"
                },
                "alumniOf": {
                    "@@type": "CollegeOrUniversity",
                    "name": "International Institute of Professional Studies, DAVV",
                    "address": "Indore, India"
                },
                "knowsLanguage": ["English", "Hindi", "Marathi"],
                "knowsAbout": ["PHP", "Laravel", "React", "JavaScript", "TypeScript", "Node.js", "MySQL", "Amazon Web Services", "Filament", "Vue.js", "PostgreSQL", "REST APIs", "Stripe", "AWS Lambda", "Amazon SQS", "Amazon RDS", "Amazon S3", "Amazon CloudFront", "Amazon CloudWatch"],
                "sameAs": [
                    "https://github.com/niroj-meshram",
                    "https://www.linkedin.com/in/nirojmeshram/"
                ]
            }
        ]
    }
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Without JavaScript, scroll-reveal content would stay at opacity 0 --}}
    <noscript>
        <style>.reveal { opacity: 1 !important; transform: none !important; }</style>
    </noscript>
    @yield('head')
</head>

<body class="antialiased overflow-x-hidden" style="background-color:#0B1120;color:#F9FAFB;">

    {{-- First tab stop: jumps past the navigation. #main is focusable (tabindex=-1) so focus moves too. --}}
    <a href="#main" class="skip-link">Skip to content</a>

    {{-- ── Scroll Progress Bar ───────────────────────────────────────── --}}
    <div id="scroll-progress" class="fixed top-0 left-0 h-0.5 z-200 pointer-events-none" aria-hidden="true"
        style="width:0%;background:linear-gradient(90deg,#14B8A6,#3B82F6);"></div>

    {{-- ── Navbar ───────────────────────────────────────────────────── --}}
    @include('partials.navbar')

    {{-- ── Page Content ─────────────────────────────────────────────── --}}
    {{-- overflow-x-clip: nothing in a section may widen the mobile layout viewport, which would push
         the fixed navbar past the screen edge --}}
    <main id="main" tabindex="-1" class="overflow-x-clip">
        @yield('content')
    </main>

    {{-- ── Footer ──────────────────────────────────────────────────── --}}
    @include('partials.footer')

</body>

</html>
