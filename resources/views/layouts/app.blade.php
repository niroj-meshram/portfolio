<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    {{-- ── SEO ──────────────────────────────────────────────────────── --}}
    {{-- Public domain for canonical/OG/JSON-LD URLs. Hardcoded so metadata never depends on the
         request host or APP_URL (e.g. localhost, www., or a server IP). --}}
    @php($siteUrl = 'https://nirojdev.in')
    <title>@yield('title', 'Niroj Meshram: Full Stack Developer · Backend-focused (PHP, Laravel, AWS)')</title>
    <meta name="description" content="@yield('description', 'Backend-focused Full Stack Developer with 5+ years in PHP and Laravel and hands-on AWS production support. Open to full-time remote and freelance roles.')">
    <meta name="author" content="Niroj Meshram">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#14B8A6">
    <link rel="canonical" href="{{ $siteUrl }}/">

    {{-- ── Open Graph ────────────────────────────────────────────────── --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $siteUrl }}/">
    <meta property="og:title" content="Niroj Meshram: Full Stack Developer · Backend-focused">
    <meta property="og:description" content="Backend-focused Full Stack Developer with 5+ years in PHP and Laravel and hands-on AWS production support. Open to full-time remote and freelance roles.">
    <meta property="og:image" content="{{ $siteUrl }}/images/og-image.jpg">
    <meta property="og:site_name" content="nirojdev.in">
    <meta property="og:locale" content="en_US">

    {{-- ── Twitter Card ─────────────────────────────────────────────── --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Niroj Meshram: Full Stack Developer · Backend-focused">
    <meta name="twitter:description" content="Backend-focused Full Stack Developer with 5+ years in PHP and Laravel and hands-on AWS production support. Open to full-time remote and freelance roles.">
    <meta name="twitter:image" content="{{ $siteUrl }}/images/og-image.jpg">

    {{-- ── Google Fonts ─────────────────────────────────────────────── --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    {{-- ── JSON-LD Structured Data ─────────────────────────────────── --}}
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Person",
        "name": "Niroj Meshram",
        "jobTitle": "Software Engineer",
        "worksFor": {
            "@@type": "Organization",
            "name": "Bacancy Software LLP"
        },
        "description": "Backend-focused Full Stack Developer with 5+ years of experience in PHP and Laravel, hands-on AWS production support, and an AI-assisted workflow on Symfony and Next.js applications.",
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
        "knowsAbout": ["PHP", "Laravel", "Filament", "Vue.js", "JavaScript", "MySQL", "PostgreSQL", "REST APIs", "Stripe", "AWS Lambda", "Amazon SQS", "Amazon RDS", "Amazon S3", "Amazon CloudFront", "Amazon CloudWatch"],
        "sameAs": [
            "https://github.com/niroj-meshram",
            "https://www.linkedin.com/in/nirojmeshram/"
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

    {{-- ── Scroll Progress Bar ───────────────────────────────────────── --}}
    <div id="scroll-progress" class="fixed top-0 left-0 h-0.5 z-200 pointer-events-none" aria-hidden="true"
        style="width:0%;background:linear-gradient(90deg,#14B8A6,#3B82F6);"></div>

    {{-- ── Navbar ───────────────────────────────────────────────────── --}}
    @include('partials.navbar')

    {{-- ── Page Content ─────────────────────────────────────────────── --}}
    {{-- overflow-x-clip: nothing in a section may widen the mobile layout viewport, which would push
         the fixed navbar past the screen edge --}}
    <main class="overflow-x-clip">
        @yield('content')
    </main>

    {{-- ── Footer ──────────────────────────────────────────────────── --}}
    @include('partials.footer')

</body>

</html>
