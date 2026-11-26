{{-- HERO: initHeroIntro()/initParallax() in app.js rely on [class*="animate-fade-up"], .order-1 / .lg:order-2 and .tech-icon here. --}}
<section id="hero"
         class="scroll-mt-16 relative min-h-screen flex items-center justify-center overflow-hidden bg-mesh bg-grid"
         style="background-color:#0B1120;">

    {{-- Ambient glows --}}
    <div class="hero-glow-teal animate-hero-glow" data-parallax="0.25" style="top:-10%;left:-8%;"></div>
    <div class="hero-glow-blue  animate-hero-glow" data-parallax="0.15" style="bottom:5%;right:-5%;animation-delay:1.5s;"></div>

    {{-- Floating tech badges --}}
    <div class="hidden lg:block" aria-hidden="true">
        <div class="tech-icon animate-float"   style="top:18%;left:7%;animation-delay:0s;">PHP</div>
        <div class="tech-icon animate-float-b" style="top:35%;left:3%;animation-delay:0.8s;">Laravel</div>
        <div class="tech-icon animate-float-c" style="top:65%;left:6%;animation-delay:1.5s;">Vue</div>
        <div class="tech-icon animate-float"   style="top:15%;right:8%;animation-delay:0.4s;">Filament</div>
        <div class="tech-icon animate-float-b" style="top:50%;right:4%;animation-delay:1s;">AWS</div>
        <div class="tech-icon animate-float-c" style="top:75%;right:8%;animation-delay:2s;">MySQL</div>
    </div>

    {{-- Vertical padding keeps the content clear of the fixed navbar when it is taller than the viewport --}}
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 pt-28 pb-32 lg:pt-28 lg:pb-24 w-full">
        <div class="grid lg:grid-cols-[minmax(0,1fr)_auto] gap-12 lg:gap-16 items-center">

            {{-- Left: Text Content --}}
            <div class="order-2 lg:order-1">

                {{-- Available badge --}}
                <div class="flex items-center gap-2.5 mb-6 animate-fade-up">
                    <span class="avail-dot flex-shrink-0"></span>
                    <span class="badge badge-green text-xs font-semibold tracking-wide">
                        Open to full-time remote roles &amp; freelance projects
                    </span>
                </div>

                {{-- Greeting --}}
                <p class="text-gray-400 text-base font-medium mb-2 animate-fade-up delay-100">
                    Hi, I'm
                </p>

                {{-- Name --}}
                <h1 class="text-5xl sm:text-6xl lg:text-7xl font-extrabold leading-none mb-4 animate-fade-up delay-200"
                    style="font-family:'Plus Jakarta Sans',sans-serif;">
                    <span class="gradient-text-full">Niroj</span><br>
                    <span class="text-white">Meshram</span>
                </h1>

                {{-- Headline: positioning title. The official job title (Software Engineer) is stated below. --}}
                <p class="text-gray-300 text-lg sm:text-xl font-medium mb-6 animate-fade-up delay-300">
                    Full Stack Developer · <span class="whitespace-nowrap">Backend-focused</span>
                </p>

                {{-- Description --}}
                <div class="mb-8 max-w-lg animate-fade-up delay-400">
                    <p class="text-gray-400 text-base sm:text-lg leading-relaxed mb-4">
                        I build and support web applications with a focus on the backend, mainly in
                        <strong class="text-white font-semibold">PHP and Laravel</strong>. At Bacancy I deliver features on an
                        enterprise SaaS platform built with Symfony and Next.js through an AI-assisted workflow, and I handle
                        its <strong class="text-white font-semibold">AWS production support hands-on</strong>.
                    </p>
                    <p class="text-gray-400 text-sm sm:text-base leading-relaxed mb-4">
                        5+ years across SaaS billing, admin platforms, mobile app backends and client web projects.
                    </p>
                    <p class="text-gray-400 text-sm mb-4">
                        <span class="text-white font-medium">Software Engineer at Bacancy</span>
                        · Previously at Entrata and Sofmen Technologies · Ahmedabad, India
                    </p>
                    <ul role="list" class="flex flex-wrap gap-2" aria-label="Core hands-on stack">
                        @foreach(['PHP','Laravel','Filament','Vue.js','MySQL','AWS'] as $t)
                        <li class="skill-chip">{{ $t }}</li>
                        @endforeach
                    </ul>
                </div>

                {{-- CTAs --}}
                <div class="flex flex-wrap gap-3 mb-10 animate-fade-up delay-500">
                    <a href="#case-study" onclick="return !window.scrollToSection || (scrollToSection('case-study'), false);"
                       class="btn-primary" data-magnetic>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 17v-2a2 2 0 012-2h2a2 2 0 012 2v2m-9 4h12a2 2 0 002-2V7l-5-4H6a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                        View Case Study
                    </a>
                    <a href="{{ asset('resume/Niroj_Resume.pdf') }}" download class="btn-secondary" data-magnetic>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        Download Résumé
                    </a>
                    <a href="#contact" onclick="return !window.scrollToSection || (scrollToSection('contact'), false);"
                       class="btn-secondary" data-magnetic>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                        Get in Touch
                    </a>
                </div>

                {{-- Social links --}}
                <div class="flex items-center gap-4 animate-fade-up delay-600">
                    <span class="text-gray-400 text-xs uppercase tracking-widest font-medium">Find me on</span>
                    <div class="h-px flex-1 max-w-12" style="background:linear-gradient(90deg,rgba(55,65,81,0.8),transparent);" aria-hidden="true"></div>

                    {{-- GitHub --}}
                    <a href="https://github.com/niroj-meshram" target="_blank" rel="noopener noreferrer"
                       class="w-11 h-11 rounded-lg flex items-center justify-center text-gray-400 hover:text-white transition-all duration-200 hover:scale-110"
                       style="background:rgba(31,41,55,0.8);border:1px solid rgba(55,65,81,0.5);"
                       aria-label="GitHub">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>

                    {{-- LinkedIn --}}
                    <a href="https://www.linkedin.com/in/nirojmeshram/" target="_blank" rel="noopener noreferrer"
                       class="w-11 h-11 rounded-lg flex items-center justify-center text-gray-400 hover:text-blue-400 transition-all duration-200 hover:scale-110"
                       style="background:rgba(31,41,55,0.8);border:1px solid rgba(55,65,81,0.5);"
                       aria-label="LinkedIn">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>

                    {{-- Email --}}
                    <a href="mailto:nirojmeshram@gmail.com"
                       class="w-11 h-11 rounded-lg flex items-center justify-center text-gray-400 hover:text-teal-400 transition-all duration-200 hover:scale-110"
                       style="background:rgba(31,41,55,0.8);border:1px solid rgba(55,65,81,0.5);"
                       aria-label="Email">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Right: Avatar --}}
            <div class="order-1 lg:order-2 flex justify-center lg:justify-end">
                <div class="relative">

                    {{-- Outer ring --}}
                    <div class="w-72 h-72 sm:w-80 sm:h-80 lg:w-96 lg:h-96 rounded-full"
                         style="background:conic-gradient(from 0deg,#14B8A6,#3B82F6,#8B5CF6,#14B8A6);padding:3px;">
                        <div class="w-full h-full rounded-full flex items-center justify-center"
                             style="background:#0B1120;">

                            {{-- Avatar circle --}}
                            <div aria-hidden="true" class="w-64 h-64 sm:w-72 sm:h-72 lg:w-88 lg:h-88 rounded-full flex flex-col items-center justify-center relative overflow-hidden"
                                 style="background:linear-gradient(135deg,rgba(20,184,166,0.15),rgba(59,130,246,0.15));border:1px solid rgba(20,184,166,0.2);">

                                {{-- Decorative rings inside --}}
                                <div class="absolute inset-6 rounded-full opacity-20"
                                     style="border:1px solid rgba(20,184,166,0.5);"></div>
                                <div class="absolute inset-12 rounded-full opacity-15"
                                     style="border:1px solid rgba(59,130,246,0.5);"></div>

                                {{-- Initials --}}
                                <div class="relative z-10 text-center">
                                    <div class="text-5xl sm:text-6xl font-extrabold gradient-text-full leading-none mb-2"
                                         style="font-family:'Plus Jakarta Sans',sans-serif;">NM</div>
                                    <div class="text-gray-400 text-xs font-medium tracking-widest uppercase">Full Stack Developer</div>
                                    <div class="text-teal-400 text-xs font-medium tracking-widest uppercase mt-1">Backend-focused</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Scroll hint --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 opacity-50" aria-hidden="true">
        <span class="text-gray-400 text-xs tracking-widest uppercase">Scroll</span>
        <div class="w-5 h-8 rounded-full border border-gray-600 flex items-start justify-center p-1">
            <div class="w-1 h-2 rounded-full bg-gray-500 animate-bounce"></div>
        </div>
    </div>
</section>
