{{-- HERO: entrance is CSS-only (.animate-fade-up + .delay-*), neutralised under reduced motion.
     No JS hooks depend on this markup. The "At a glance" card restates confirmed facts only. --}}
<section id="hero"
         class="scroll-mt-16 relative overflow-hidden bg-mesh bg-grid lg:min-h-screen flex items-center"
         style="background-color:#0B1120;">

    <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 pt-28 pb-16 sm:pt-32 sm:pb-20 lg:py-28 w-full">
        <div class="grid lg:grid-cols-[minmax(0,1fr)_22rem] xl:grid-cols-[minmax(0,1fr)_24rem] gap-10 lg:gap-16 items-center">

            {{-- Identity, summary and actions --}}
            <div class="min-w-0">
                <p class="inline-flex items-center gap-2.5 mb-6 animate-fade-up">
                    <span class="avail-dot flex-shrink-0" aria-hidden="true"></span>
                    <span class="text-green-400 text-sm font-medium">Open to full-time remote roles &amp; freelance projects</span>
                </p>

                <p class="text-gray-400 text-base font-medium mb-2 animate-fade-up delay-100">Hi, I'm</p>

                <h1 class="font-heading text-5xl sm:text-6xl lg:text-7xl font-extrabold leading-[0.95] tracking-tight mb-5 animate-fade-up delay-100">
                    <span class="gradient-text-full">Niroj</span>
                    <span class="text-white">Meshram</span>
                </h1>

                <p class="text-gray-200 text-lg sm:text-xl font-semibold mb-5 animate-fade-up delay-200">
                    Full Stack Developer · <span class="whitespace-nowrap">Backend-focused</span>
                </p>

                <div class="max-w-xl animate-fade-up delay-200">
                    <p class="text-gray-300 text-base sm:text-lg leading-relaxed mb-4">
                        I build and support web applications with a focus on the backend, mainly in
                        <strong class="text-white font-semibold">PHP and Laravel</strong>. At Bacancy I deliver features on an
                        enterprise SaaS platform built with Symfony and Next.js through an AI-assisted workflow, and I handle
                        its <strong class="text-white font-semibold">AWS production support hands-on</strong>.
                    </p>
                    <p class="text-gray-400 text-base leading-relaxed mb-6">
                        5+ years across SaaS billing, admin platforms, mobile app backends and client web projects.
                    </p>
                    <ul role="list" class="flex flex-wrap gap-2 mb-8" aria-label="Core hands-on stack">
                        @foreach(['PHP','Laravel','Filament','Vue.js','MySQL','AWS'] as $t)
                        <li class="skill-chip">{{ $t }}</li>
                        @endforeach
                    </ul>
                </div>

                {{-- Mobile: primary full width, two secondaries side by side. sm+: one row. --}}
                <div class="grid grid-cols-2 gap-3 sm:flex sm:flex-wrap mb-8 animate-fade-up delay-300">
                    <a href="#case-study" onclick="return !window.scrollToSection || (scrollToSection('case-study'), false);"
                       class="btn-primary col-span-2">
                        View Case Study
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                    <a href="{{ asset('resume/Niroj_Resume.pdf') }}" download class="btn-secondary px-4 sm:px-6">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        Résumé
                    </a>
                    <a href="#contact" onclick="return !window.scrollToSection || (scrollToSection('contact'), false);"
                       class="btn-secondary px-4 sm:px-6">
                        Get in Touch
                    </a>
                </div>

                <div class="flex items-center gap-3 animate-fade-up delay-400">
                    <a href="https://github.com/niroj-meshram" target="_blank" rel="noopener noreferrer" class="icon-btn" aria-label="GitHub">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/in/nirojmeshram/" target="_blank" rel="noopener noreferrer" class="icon-btn" aria-label="LinkedIn">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                    <a href="mailto:nirojmeshram@gmail.com" class="icon-btn" aria-label="Email">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- At a glance (replaces the decorative monogram) --}}
            <aside class="glass-card p-6 sm:p-7 animate-fade-up delay-300" aria-labelledby="glance-title">
                <h2 id="glance-title" class="meta-label mb-5">At a glance</h2>
                <dl class="space-y-4 text-sm">
                    @foreach([
                        ['Current role', 'Software Engineer, Bacancy'],
                        ['Previously', 'Entrata · Sofmen Technologies'],
                        ['Focus', 'Backend development in PHP and Laravel'],
                        ['Cloud', 'AWS production support, hands-on'],
                        ['Location', 'Ahmedabad, India · IST (UTC+5:30)'],
                        ['Open to', 'Full-time remote roles · Freelance projects'],
                    ] as [$term, $value])
                    <div class="grid grid-cols-[6.5rem_minmax(0,1fr)] gap-3 {{ $loop->first ? '' : 'pt-4 border-t border-gray-700/50' }}">
                        <dt class="text-gray-400">{{ $term }}</dt>
                        <dd class="text-gray-100 font-medium">{{ $value }}</dd>
                    </div>
                    @endforeach
                </dl>
            </aside>
        </div>
    </div>
</section>
