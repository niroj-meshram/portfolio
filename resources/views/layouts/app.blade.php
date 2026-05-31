<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    {{-- ── SEO ──────────────────────────────────────────────────────── --}}
    <title>@yield('title', 'Niroj Meshram | Full Stack Developer | Laravel, Vue.js & React.js')</title>
    <meta name="description" content="@yield('description', 'Niroj Meshram is a Full Stack Developer with 5+ years of experience building scalable SaaS applications and web platforms using PHP, Laravel, Vue.js, and React.js. Available for freelance & remote opportunities.')">
    <meta name="keywords"
        content="Niroj Meshram, Full Stack Developer, Laravel Developer, PHP Developer, Vue.js Developer, React.js Developer, SaaS Developer, Software Engineer, Indore, India, Remote Developer">
    <meta name="author" content="Niroj Meshram">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#14B8A6">
    <link rel="canonical" href="{{ url('/') }}">

    {{-- ── Open Graph ────────────────────────────────────────────────── --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="Niroj Meshram | Full Stack Developer">
    <meta property="og:description"
        content="5+ years building scalable SaaS apps with Laravel, PHP, Vue.js & React.js. Available for remote & freelance work.">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
    <meta property="og:site_name" content="Niroj Meshram – Portfolio">
    <meta property="og:locale" content="en_US">

    {{-- ── Twitter Card ─────────────────────────────────────────────── --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Niroj Meshram | Full Stack Developer">
    <meta name="twitter:description" content="5+ years building scalable SaaS apps with Laravel, PHP, Vue.js & React.js.">
    <meta name="twitter:image" content="{{ asset('images/og-image.jpg') }}">

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
        "jobTitle": "Full Stack Developer",
        "description": "Full Stack Developer with 5+ years of experience building scalable SaaS applications using PHP, Laravel, Vue.js, and React.js.",
        "email": "nirojmeshram@gmail.com",
        "telephone": "+91-7987206996",
        "url": "{{ url('/') }}",
        "address": {
            "@@type": "PostalAddress",
            "addressLocality": "Indore",
            "addressRegion": "Madhya Pradesh",
            "addressCountry": "IN"
        },
        "alumniOf": {
            "@@type": "CollegeOrUniversity",
            "name": "International Institute of Professional Studies, DAVV",
            "address": "Indore, India"
        },
        "knowsLanguage": ["English", "Hindi", "Marathi"],
        "knowsAbout": ["PHP", "Laravel", "Vue.js", "React.js", "Filament", "JavaScript", "MySQL", "PostgreSQL", "AWS", "REST APIs", "Stripe"],
        "sameAs": []
    }
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('head')
</head>

<body class="antialiased overflow-x-hidden" style="background-color:#0B1120;color:#F9FAFB;">

    {{-- ── Scroll Progress Bar ───────────────────────────────────────── --}}
    <div id="scroll-progress" class="fixed top-0 left-0 h-0.75 z-200 pointer-events-none"
        style="width:0%;background:linear-gradient(90deg,#14B8A6,#3B82F6,#8B5CF6);"></div>

    {{-- ── Mouse Follow Glow ────────────────────────────────────────── --}}
    <div id="mouse-glow" class="fixed pointer-events-none z-0 hidden lg:block"
        style="width:700px;height:700px;border-radius:50%;background:radial-gradient(circle,rgba(20,184,166,0.055) 0%,transparent 68%);transform:translate(-50%,-50%);left:-9999px;top:-9999px;">
    </div>

    {{-- ── Particle Canvas ──────────────────────────────────────────── --}}
    <canvas id="particles-canvas" class="fixed inset-0 pointer-events-none z-0" style="opacity:0.35;"></canvas>

    {{-- ── Navbar ───────────────────────────────────────────────────── --}}
    @include('partials.navbar')

    {{-- ── Page Content ─────────────────────────────────────────────── --}}
    <main>
        @yield('content')
    </main>

    {{-- ── Footer ──────────────────────────────────────────────────── --}}
    @include('partials.footer')

</body>

</html>
