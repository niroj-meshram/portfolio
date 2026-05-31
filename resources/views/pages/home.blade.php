@extends('layouts.app')

@section('title', 'Niroj Meshram | Full Stack Developer | Laravel, Vue.js & React.js')
@section('description', 'Niroj Meshram — Full Stack Developer with 5+ years building scalable SaaS applications and web platforms using PHP, Laravel, Vue.js & React.js. Based in Indore, India. Open to remote & full-time roles.')

@section('content')

{{-- ════════════════════════════════════════════════════════════════════════
     HERO SECTION
════════════════════════════════════════════════════════════════════════ --}}
<section id="hero"
         class="relative min-h-screen flex items-center justify-center overflow-hidden bg-mesh bg-grid"
         style="background-color:#0B1120;">

    {{-- Ambient glows --}}
    <div class="hero-glow-teal animate-hero-glow" data-parallax="0.25" style="top:-10%;left:-8%;"></div>
    <div class="hero-glow-blue  animate-hero-glow" data-parallax="0.15" style="bottom:5%;right:-5%;animation-delay:1.5s;"></div>

    {{-- Floating tech badges --}}
    <div class="hidden lg:block">
        <div class="tech-icon animate-float"   style="top:18%;left:7%;animation-delay:0s;">PHP</div>
        <div class="tech-icon animate-float-b" style="top:35%;left:3%;animation-delay:0.8s;">Laravel</div>
        <div class="tech-icon animate-float-c" style="top:65%;left:6%;animation-delay:1.5s;">Vue</div>
        <div class="tech-icon animate-float"   style="top:15%;right:8%;animation-delay:0.4s;">React</div>
        <div class="tech-icon animate-float-b" style="top:50%;right:4%;animation-delay:1s;">AWS</div>
        <div class="tech-icon animate-float-c" style="top:75%;right:8%;animation-delay:2s;">MySQL</div>
    </div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-32 lg:py-0 w-full">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            {{-- Left: Text Content --}}
            <div class="order-2 lg:order-1">

                {{-- Available badge --}}
                <div class="flex items-center gap-2.5 mb-6 animate-fade-up">
                    <span class="avail-dot flex-shrink-0"></span>
                    <span class="badge badge-green text-xs font-semibold tracking-wide">
                        Open to Work — Full-time & Remote
                    </span>
                </div>

                {{-- Greeting --}}
                <p class="text-gray-400 text-base font-medium mb-2 animate-fade-up delay-100">
                    Hello World, I'm
                </p>

                {{-- Name --}}
                <h1 class="text-5xl sm:text-6xl lg:text-7xl font-extrabold leading-none mb-4 animate-fade-up delay-200"
                    style="font-family:'Plus Jakarta Sans',sans-serif;">
                    <span class="gradient-text-full">Niroj</span><br>
                    <span class="text-white">Meshram</span>
                </h1>

                {{-- Animated role --}}
                <div x-data="roleTyper()"
                     class="flex items-center gap-1.5 mb-6 animate-fade-up delay-300 min-h-[2rem]">
                    <span class="text-gray-300 text-lg sm:text-xl font-medium" x-text="displayText"></span>
                    <span class="animate-blink text-teal-400 text-xl font-light select-none">|</span>
                </div>

                {{-- Description --}}
                <p class="text-gray-400 text-base sm:text-lg leading-relaxed mb-8 max-w-lg animate-fade-up delay-400">
                    I build <strong class="text-white font-semibold">scalable SaaS applications</strong> and web platforms
                    with <strong class="text-white font-semibold">5+ years</strong> of experience across PHP, Laravel,
                    Vue.js, and React.js — from billing systems and REST APIs to production debugging and database optimization.
                </p>

                {{-- CTAs --}}
                <div class="flex flex-wrap gap-3 mb-10 animate-fade-up delay-500">
                    <a href="{{ asset('resume/Niroj_Resume.pdf') }}" download class="btn-primary" data-magnetic>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        Download Resume
                    </a>
                    <a href="#contact"
                       onclick="if(window.__lenis){window.__lenis.scrollTo('#contact',{duration:1.4})}else{document.getElementById('contact').scrollIntoView({behavior:'smooth'})}return false;"
                       class="btn-secondary" data-magnetic>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                        Hire Me
                    </a>
                </div>

                {{-- Social links --}}
                <div class="flex items-center gap-4 animate-fade-up delay-600">
                    <span class="text-gray-600 text-xs uppercase tracking-widest font-medium">Find me on</span>
                    <div class="h-px flex-1 max-w-12" style="background:linear-gradient(90deg,rgba(55,65,81,0.8),transparent);"></div>

                    {{-- GitHub --}}
                    <a href="https://github.com/" target="_blank" rel="noopener"
                       class="w-9 h-9 rounded-lg flex items-center justify-center text-gray-400 hover:text-white transition-all duration-200 hover:scale-110"
                       style="background:rgba(31,41,55,0.8);border:1px solid rgba(55,65,81,0.5);"
                       aria-label="GitHub">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>

                    {{-- LinkedIn --}}
                    <a href="https://linkedin.com/in/" target="_blank" rel="noopener"
                       class="w-9 h-9 rounded-lg flex items-center justify-center text-gray-400 hover:text-blue-400 transition-all duration-200 hover:scale-110"
                       style="background:rgba(31,41,55,0.8);border:1px solid rgba(55,65,81,0.5);"
                       aria-label="LinkedIn">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>

                    {{-- Email --}}
                    <a href="mailto:nirojmeshram@gmail.com"
                       class="w-9 h-9 rounded-lg flex items-center justify-center text-gray-400 hover:text-teal-400 transition-all duration-200 hover:scale-110"
                       style="background:rgba(31,41,55,0.8);border:1px solid rgba(55,65,81,0.5);"
                       aria-label="Email">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                         style="background:conic-gradient(from 0deg,#14B8A6,#3B82F6,#8B5CF6,#14B8A6);padding:3px;animation:spin-slow 28s linear infinite;">
                        <div class="w-full h-full rounded-full flex items-center justify-center"
                             style="background:#0B1120;">

                            {{-- Avatar circle --}}
                            <div class="w-64 h-64 sm:w-72 sm:h-72 lg:w-88 lg:h-88 rounded-full flex flex-col items-center justify-center relative overflow-hidden"
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
                                    <div class="text-gray-400 text-xs font-medium tracking-widest uppercase">Full Stack Dev</div>
                                </div>

                                {{-- Floating code snippet decoration --}}
                                <div class="absolute bottom-6 left-0 right-0 px-6">
                                    <div class="text-center text-xs font-mono text-teal-400/50">
                                        &lt;/developer&gt;
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Floating stat badges --}}
                    <div class="absolute -top-2 -right-4 glass-card px-3 py-2 text-center animate-float"
                         style="min-width:80px;">
                        <div class="text-2xl font-bold gradient-text">5+</div>
                        <div class="text-gray-400 text-xs">Years Exp.</div>
                    </div>

                    <div class="absolute -bottom-2 -left-6 glass-card px-3 py-2 text-center animate-float-b">
                        <div class="text-2xl font-bold gradient-text-blue-purple">20+</div>
                        <div class="text-gray-400 text-xs">Technologies</div>
                    </div>

                    <div class="absolute top-1/2 -left-8 -translate-y-1/2 glass-card px-3 py-2 text-center animate-float-c">
                        <div class="text-2xl font-bold" style="background:linear-gradient(135deg,#8B5CF6,#14B8A6);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">SaaS</div>
                        <div class="text-gray-400 text-xs">Focused</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Scroll hint --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 opacity-50">
        <span class="text-gray-500 text-xs tracking-widest uppercase">Scroll</span>
        <div class="w-5 h-8 rounded-full border border-gray-600 flex items-start justify-center p-1">
            <div class="w-1 h-2 rounded-full bg-gray-500 animate-bounce"></div>
        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════════════════════════
     ABOUT SECTION
════════════════════════════════════════════════════════════════════════ --}}
<section id="about" class="py-24 lg:py-32 relative" style="background-color:#111827;">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section header --}}
        <div class="text-center mb-16 reveal">
            <div class="section-label mx-auto">
                <span>⚡</span> About Me
            </div>
            <h2 data-title class="text-4xl sm:text-5xl font-extrabold text-white mb-4"
                style="font-family:'Plus Jakarta Sans',sans-serif;">
                Building Scalable <span class="gradient-text">SaaS Platforms</span>
            </h2>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                A full stack engineer who ships reliable, performant software across the entire stack.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            {{-- Left: Visual --}}
            <div class="reveal-left">
                <div class="relative">
                    {{-- Main card --}}
                    <div class="glass-card p-8 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-48 h-48 opacity-5 rounded-full"
                             style="background:radial-gradient(circle,#14B8A6,transparent);transform:translate(30%,-30%);"></div>

                        {{-- Profile summary --}}
                        <div class="flex items-start gap-4 mb-6">
                            <div class="w-14 h-14 rounded-xl flex items-center justify-center font-bold text-white text-lg flex-shrink-0"
                                 style="background:linear-gradient(135deg,#14B8A6,#3B82F6);">
                                NM
                            </div>
                            <div>
                                <h3 class="text-white font-bold text-lg">Niroj Meshram</h3>
                                <p class="text-teal-400 text-sm">Full Stack Developer · Software Engineer</p>
                                <div class="flex items-center gap-1.5 mt-1">
                                    <svg class="w-3 h-3 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"/>
                                    </svg>
                                    <span class="text-gray-400 text-xs">Indore, Madhya Pradesh, India</span>
                                </div>
                            </div>
                        </div>

                        {{-- Stats grid --}}
                        <div class="grid grid-cols-3 gap-4 mb-6 p-4 rounded-xl" style="background:rgba(11,17,32,0.5);">
                            <div class="text-center">
                                <div class="text-2xl font-bold gradient-text">5+</div>
                                <div class="text-gray-500 text-xs mt-1">Years</div>
                            </div>
                            <div class="text-center border-x border-gray-700/50">
                                <div class="text-2xl font-bold gradient-text-blue-purple">10+</div>
                                <div class="text-gray-500 text-xs mt-1">Projects</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold" style="background:linear-gradient(135deg,#8B5CF6,#14B8A6);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">20+</div>
                                <div class="text-gray-500 text-xs mt-1">Technologies</div>
                            </div>
                        </div>

                        {{-- Tech stack quick view --}}
                        <div class="flex flex-wrap gap-2">
                            @foreach(['PHP','Laravel','Vue.js','React.js','Filament','MySQL','PostgreSQL','AWS','Stripe'] as $t)
                            <span class="skill-chip">{{ $t }}</span>
                            @endforeach
                        </div>
                    </div>

                    {{-- Decorative card offset --}}
                    <div class="absolute -bottom-4 -right-4 w-full h-full rounded-2xl -z-10 opacity-30"
                         style="background:linear-gradient(135deg,rgba(20,184,166,0.3),rgba(59,130,246,0.3));"></div>
                </div>
            </div>

            {{-- Right: Text --}}
            <div class="reveal-right">
                <p class="text-gray-300 text-lg leading-relaxed mb-6">
                    I'm a <strong class="text-white">Full Stack Developer</strong> based in Indore, India, with 5+ years
                    of experience building <strong class="text-teal-400">scalable SaaS applications</strong> and web platforms.
                    My core expertise spans PHP & Laravel on the backend, with Vue.js and React.js on the frontend.
                </p>
                <p class="text-gray-400 leading-relaxed mb-8">
                    I've worked across <strong class="text-white">billing systems, REST APIs, and third-party integrations</strong>,
                    with a strong track record in debugging production systems, optimizing database performance, and delivering
                    solutions with cross-functional teams. I also leverage AI-assisted tools like
                    <strong class="text-white">Cursor, Claude Code, and ChatGPT</strong> to accelerate engineering productivity.
                </p>

                {{-- Key traits --}}
                <div class="space-y-4">
                    @foreach([
                        ['🏗️','Scalable Architecture','I design SaaS systems built to grow — modular, maintainable, and production-ready.'],
                        ['⚡','Performance & Debugging','I resolve critical production issues and optimize queries for speed and reliability.'],
                        ['🤖','AI-Assisted Engineering','I integrate Cursor, Claude Code & ChatGPT into my workflow to ship faster.'],
                    ] as [$icon,$title,$desc])
                    <div class="flex items-start gap-4 p-4 rounded-xl transition-colors duration-200"
                         style="background:rgba(31,41,55,0.4);border:1px solid rgba(55,65,81,0.3);">
                        <span class="text-2xl flex-shrink-0 mt-0.5">{{ $icon }}</span>
                        <div>
                            <h4 class="text-white font-semibold mb-0.5">{{ $title }}</h4>
                            <p class="text-gray-400 text-sm">{{ $desc }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════════════════════════
     EXPERIENCE SECTION
════════════════════════════════════════════════════════════════════════ --}}
<section id="experience" class="py-24 lg:py-32 relative bg-mesh" style="background-color:#0B1120;">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16 reveal">
            <div class="section-label mx-auto">
                <span>📋</span> Experience
            </div>
            <h2 data-title class="text-4xl sm:text-5xl font-extrabold text-white mb-4"
                style="font-family:'Plus Jakarta Sans',sans-serif;">
                Professional <span class="gradient-text">Journey</span>
            </h2>
            <p class="text-gray-400 text-lg max-w-xl mx-auto">
                5+ years across product companies and SaaS platforms.
            </p>
        </div>

        <div class="timeline-track pl-8 space-y-10">

            {{-- Experience Item 1: Bacancy --}}
            <div class="flex gap-6 reveal" data-delay="0">
                <div class="flex flex-col items-center flex-shrink-0" style="margin-left:-32px;">
                    <div class="timeline-dot"></div>
                    <div class="w-0.5 flex-1 mt-2" style="background:linear-gradient(to bottom,rgba(20,184,166,0.4),rgba(59,130,246,0.2));min-height:40px;"></div>
                </div>
                <div class="glass-card p-6 flex-1 mb-2">
                    <div class="flex flex-wrap items-start justify-between gap-3 mb-3">
                        <div>
                            <h3 class="text-white font-bold text-xl">Software Engineer</h3>
                            <p class="text-teal-400 font-medium mt-0.5">Bacancy Software LLP · Ahmedabad, India</p>
                        </div>
                        <span class="badge badge-teal text-xs flex-shrink-0">Apr 2025 – Present</span>
                    </div>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li class="flex items-start gap-2">
                            <span class="text-teal-400 mt-0.5 flex-shrink-0">›</span>
                            Built and customized Filament Builder Blocks to support modular content creation with flexible field structures and dynamic rendering logic.
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-teal-400 mt-0.5 flex-shrink-0">›</span>
                            Enhanced the editor experience by implementing search and filtering in Filament block pickers through customized Blade view overrides.
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-teal-400 mt-0.5 flex-shrink-0">›</span>
                            Integrated advanced media upload and preview functionality using Ralph J. Media Library within Filament forms and admin workflows.
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-teal-400 mt-0.5 flex-shrink-0">›</span>
                            Implemented scalable role-based access control using Filament Shield for secure resource-level authorization.
                        </li>
                    </ul>
                    <div class="flex flex-wrap gap-2 mt-4">
                        @foreach(['Laravel','Filament','PHP','Blade','RBAC','Media Library'] as $t)
                        <span class="skill-chip">{{ $t }}</span>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Experience Item 2: Entrata --}}
            <div class="flex gap-6 reveal" data-delay="100">
                <div class="flex flex-col items-center flex-shrink-0" style="margin-left:-32px;">
                    <div class="timeline-dot" style="background:linear-gradient(135deg,#3B82F6,#8B5CF6);box-shadow:0 0 12px rgba(59,130,246,0.6);"></div>
                    <div class="w-0.5 flex-1 mt-2" style="background:linear-gradient(to bottom,rgba(59,130,246,0.4),rgba(139,92,246,0.2));min-height:40px;"></div>
                </div>
                <div class="glass-card p-6 flex-1 mb-2">
                    <div class="flex flex-wrap items-start justify-between gap-3 mb-3">
                        <div>
                            <h3 class="text-white font-bold text-xl">Software Engineer</h3>
                            <p class="text-blue-400 font-medium mt-0.5">Entrata · Pune, India</p>
                        </div>
                        <span class="badge badge-blue text-xs flex-shrink-0">Jan 2024 – Apr 2025</span>
                    </div>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li class="flex items-start gap-2">
                            <span class="text-blue-400 mt-0.5 flex-shrink-0">›</span>
                            Contributed to automated billing workflows for a SaaS-based platform, improving billing accuracy and operational efficiency based on lease status management.
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-blue-400 mt-0.5 flex-shrink-0">›</span>
                            Debugged and resolved critical production issues within large-scale codebases, improving reliability and reducing recurring failures.
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-blue-400 mt-0.5 flex-shrink-0">›</span>
                            Optimized database queries and backend logic to improve scalability, response times, and overall system performance.
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-blue-400 mt-0.5 flex-shrink-0">›</span>
                            Collaborated with stakeholders to gather requirements, translate them into technical solutions, and support testing and deployment.
                        </li>
                    </ul>
                    <div class="flex flex-wrap gap-2 mt-4">
                        @foreach(['PHP','Laravel','SaaS Billing','MySQL','Database Optimization'] as $t)
                        <span class="skill-chip">{{ $t }}</span>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Experience Item 3: Sofmen --}}
            <div class="flex gap-6 reveal" data-delay="200">
                <div class="flex flex-col items-center flex-shrink-0" style="margin-left:-32px;">
                    <div class="timeline-dot" style="background:linear-gradient(135deg,#8B5CF6,#14B8A6);box-shadow:0 0 12px rgba(139,92,246,0.6);"></div>
                </div>
                <div class="glass-card p-6 flex-1">
                    <div class="flex flex-wrap items-start justify-between gap-3 mb-3">
                        <div>
                            <h3 class="text-white font-bold text-xl">Full Stack Developer</h3>
                            <p class="text-purple-400 font-medium mt-0.5">Sofmen Technologies Pvt Ltd · Indore, India</p>
                        </div>
                        <span class="badge badge-purple text-xs flex-shrink-0">Mar 2021 – Dec 2023</span>
                    </div>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li class="flex items-start gap-2">
                            <span class="text-purple-400 mt-0.5 flex-shrink-0">›</span>
                            Designed and developed scalable web applications using PHP, Laravel, and Node.js while collaborating with cross-functional teams and clients.
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-purple-400 mt-0.5 flex-shrink-0">›</span>
                            Troubleshot complex implementation issues in Laravel and CI environments, ensuring seamless integration between frontend and backend systems.
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-purple-400 mt-0.5 flex-shrink-0">›</span>
                            Developed and maintained REST APIs, backend services, and core application features with a focus on maintainability and quality.
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-purple-400 mt-0.5 flex-shrink-0">›</span>
                            Participated in requirement discussions, sprint planning, client communication, and feature delivery across multiple web projects.
                        </li>
                    </ul>
                    <div class="flex flex-wrap gap-2 mt-4">
                        @foreach(['PHP','Laravel','Node.js','Vue.js','REST APIs','MySQL'] as $t)
                        <span class="skill-chip">{{ $t }}</span>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════════════════════════
     SKILLS SECTION
════════════════════════════════════════════════════════════════════════ --}}
<section id="skills" class="py-24 lg:py-32" style="background-color:#111827;">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16 reveal">
            <div class="section-label mx-auto">
                <span>🛠</span> Technical Skills
            </div>
            <h2 data-title class="text-4xl sm:text-5xl font-extrabold text-white mb-4"
                style="font-family:'Plus Jakarta Sans',sans-serif;">
                My <span class="gradient-text">Tech Arsenal</span>
            </h2>
            <p class="text-gray-400 text-lg max-w-xl mx-auto">
                The languages, frameworks, and tools I use to ship production software.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 gap-6">

            {{-- Languages & Frameworks --}}
            <div class="glass-card p-6 reveal" data-delay="0">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center text-lg"
                         style="background:rgba(20,184,166,0.15);border:1px solid rgba(20,184,166,0.25);">⚙️</div>
                    <div>
                        <h3 class="text-white font-bold">Languages & Frameworks</h3>
                        <p class="text-gray-500 text-xs">Core development stack</p>
                    </div>
                </div>
                <div class="space-y-4">
                    @foreach([
                        ['PHP',95],['Laravel',95],['JavaScript',88],['Vue.js',85],['React.js',78],
                    ] as [$name,$pct])
                    <div>
                        <div class="flex justify-between items-center mb-1.5">
                            <span class="text-gray-300 text-sm font-medium">{{ $name }}</span>
                            <span class="text-teal-400 text-xs font-semibold">{{ $pct }}%</span>
                        </div>
                        <div class="skill-bar-track">
                            <div class="skill-bar-fill" data-width="{{ $pct }}" data-delay="{{ $loop->index * 100 }}"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Databases & Cloud --}}
            <div class="glass-card p-6 reveal" data-delay="100">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center text-lg"
                         style="background:rgba(139,92,246,0.15);border:1px solid rgba(139,92,246,0.25);">🗄️</div>
                    <div>
                        <h3 class="text-white font-bold">Databases & Cloud / DevOps</h3>
                        <p class="text-gray-500 text-xs">Data & infrastructure</p>
                    </div>
                </div>
                <div class="space-y-4 mb-5">
                    @foreach([
                        ['MySQL',92],['PostgreSQL',80],
                    ] as [$name,$pct])
                    <div>
                        <div class="flex justify-between items-center mb-1.5">
                            <span class="text-gray-300 text-sm font-medium">{{ $name }}</span>
                            <span class="text-purple-400 text-xs font-semibold">{{ $pct }}%</span>
                        </div>
                        <div class="skill-bar-track">
                            <div class="skill-bar-fill" data-width="{{ $pct }}" data-delay="{{ $loop->index * 100 }}"
                                 style="background:linear-gradient(90deg,#8B5CF6,#3B82F6);"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach(['AWS EC2','RDS','CloudFront','CloudWatch','Jenkins'] as $tool)
                    <span class="skill-chip">{{ $tool }}</span>
                    @endforeach
                </div>
            </div>

            {{-- Libraries & Styling --}}
            <div class="glass-card p-6 reveal" data-delay="200">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center text-lg"
                         style="background:rgba(59,130,246,0.15);border:1px solid rgba(59,130,246,0.25);">🎨</div>
                    <div>
                        <h3 class="text-white font-bold">Libraries & Styling</h3>
                        <p class="text-gray-500 text-xs">UI & frontend tooling</p>
                    </div>
                </div>
                <div class="flex flex-wrap gap-2 mb-5">
                    @foreach(['Filament','jQuery','Bootstrap','Tailwind CSS','Blade','Responsive Design'] as $lib)
                    <span class="skill-chip">{{ $lib }}</span>
                    @endforeach
                </div>
                <h4 class="text-gray-500 text-xs uppercase tracking-widest font-semibold mb-3">Core Concepts</h4>
                <div class="flex flex-wrap gap-2">
                    @foreach(['MVC Architecture','API Integration','RBAC','Database Optimization'] as $c)
                    <span class="skill-chip">{{ $c }}</span>
                    @endforeach
                </div>
            </div>

            {{-- APIs, Tools & AI --}}
            <div class="glass-card p-6 reveal" data-delay="300">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center text-lg"
                         style="background:rgba(34,197,94,0.15);border:1px solid rgba(34,197,94,0.25);">🔧</div>
                    <div>
                        <h3 class="text-white font-bold">APIs, Tools & AI</h3>
                        <p class="text-gray-500 text-xs">Integrations & workflow</p>
                    </div>
                </div>
                <h4 class="text-gray-500 text-xs uppercase tracking-widest font-semibold mb-3">APIs & Integrations</h4>
                <div class="flex flex-wrap gap-2 mb-5">
                    @foreach(['REST APIs','Stripe','Auth0','Google Maps API','Google Places API'] as $api)
                    <span class="skill-chip">{{ $api }}</span>
                    @endforeach
                </div>
                <h4 class="text-gray-500 text-xs uppercase tracking-widest font-semibold mb-3">Tools & AI-Assisted Dev</h4>
                <div class="flex flex-wrap gap-2">
                    @foreach(['Git','GitHub','GitLab','Jira','Azure DevOps','PhpStorm','VS Code','Cursor','Claude Code','ChatGPT'] as $tool)
                    <span class="skill-chip">{{ $tool }}</span>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════════════════════════
     PROJECTS SECTION
════════════════════════════════════════════════════════════════════════ --}}
<section id="projects" class="py-24 lg:py-32 bg-mesh" style="background-color:#0B1120;">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16 reveal">
            <div class="section-label mx-auto">
                <span>🚀</span> Featured Projects
            </div>
            <h2 data-title class="text-4xl sm:text-5xl font-extrabold text-white mb-4"
                style="font-family:'Plus Jakarta Sans',sans-serif;">
                Things I've <span class="gradient-text">Built</span>
            </h2>
            <p class="text-gray-400 text-lg max-w-xl mx-auto">
                Production platforms shipping to real businesses and users.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-8 tilt-grid">

            {{-- Project: FranApp --}}
            <div class="project-card reveal" data-tilt data-delay="0">
                <div class="h-2 w-full" style="background:linear-gradient(90deg,#14B8A6,#3B82F6);"></div>
                <div class="p-6 sm:p-8">
                    <div class="flex items-start justify-between gap-4 mb-5">
                        <div>
                            <div class="flex items-center gap-2 mb-2">
                                <div class="project-icon-wrap w-10 h-10 rounded-xl flex items-center justify-center text-xl transition-all duration-300"
                                     style="background:rgba(20,184,166,0.15);border:1px solid rgba(20,184,166,0.25);">📊</div>
                                <span class="badge badge-green text-xs">SaaS Platform</span>
                            </div>
                            <h3 class="text-white text-xl font-bold">FranApp</h3>
                            <p class="text-teal-400 text-sm mt-0.5">Franchise Billing & Management Platform</p>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed mb-5">
                        An admin platform for franchise billing, reporting, and franchisee job management across multiple
                        business units, with Stripe subscription billing and performance analytics.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Admin platform for franchise billing, reporting & franchisee job management across business units',
                            'Stripe subscription-based payment workflows for premium access & recurring billing',
                            'KPI tracking & reporting modules for monitoring franchisee performance metrics',
                            'Direct client collaboration for requirement gathering, demos & feature implementation',
                        ] as $feat)
                        <li class="flex items-start gap-2.5 text-gray-400 text-sm">
                            <svg class="w-4 h-4 text-teal-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            {{ $feat }}
                        </li>
                        @endforeach
                    </ul>
                    <div class="flex flex-wrap gap-2 pt-4 border-t border-gray-700/50">
                        @foreach(['PHP','Laravel','jQuery','Datatables','Stripe','Ajax'] as $t)
                        <span class="skill-chip text-xs">{{ $t }}</span>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Project: Everlease --}}
            <div class="project-card reveal" data-tilt data-delay="150">
                <div class="h-2 w-full" style="background:linear-gradient(90deg,#3B82F6,#8B5CF6);"></div>
                <div class="p-6 sm:p-8">
                    <div class="flex items-start justify-between gap-4 mb-5">
                        <div>
                            <div class="flex items-center gap-2 mb-2">
                                <div class="project-icon-wrap w-10 h-10 rounded-xl flex items-center justify-center text-xl transition-all duration-300"
                                     style="background:rgba(59,130,246,0.15);border:1px solid rgba(59,130,246,0.25);">🚗</div>
                                <span class="badge badge-blue text-xs">Marketplace</span>
                            </div>
                            <h3 class="text-white text-xl font-bold">Everlease</h3>
                            <p class="text-blue-400 text-sm mt-0.5">Vehicle Rental Platform</p>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed mb-5">
                        A vehicle rental platform with role-based access control, rental listing management, and
                        inventory-based workflows, plus real-time communication between renters and dealers.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Role-based access control, rental listing management & inventory-based workflows',
                            'Real-time notifications & chat to improve renter-dealer communication',
                            'Advanced vehicle search & filtering by credit score, mileage, drivetrain & pricing',
                        ] as $feat)
                        <li class="flex items-start gap-2.5 text-gray-400 text-sm">
                            <svg class="w-4 h-4 text-blue-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            {{ $feat }}
                        </li>
                        @endforeach
                    </ul>
                    <div class="flex flex-wrap gap-2 pt-4 border-t border-gray-700/50">
                        @foreach(['PHP','Laravel','Vue.js','MySQL'] as $t)
                        <span class="skill-chip text-xs">{{ $t }}</span>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Project: TheWayApp --}}
            <div class="project-card reveal" data-tilt data-delay="0">
                <div class="h-2 w-full" style="background:linear-gradient(90deg,#8B5CF6,#14B8A6);"></div>
                <div class="p-6 sm:p-8">
                    <div class="flex items-start justify-between gap-4 mb-5">
                        <div>
                            <div class="flex items-center gap-2 mb-2">
                                <div class="project-icon-wrap w-10 h-10 rounded-xl flex items-center justify-center text-xl transition-all duration-300"
                                     style="background:rgba(139,92,246,0.15);border:1px solid rgba(139,92,246,0.25);">🎬</div>
                                <span class="badge badge-purple text-xs">Mobile Backend</span>
                            </div>
                            <h3 class="text-white text-xl font-bold">TheWayApp</h3>
                            <p class="text-purple-400 text-sm mt-0.5">Video Content & Subscription Platform</p>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed mb-5">
                        Admin panel and backend APIs powering subscription management and video content workflows for
                        companion Android and iOS applications.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Admin panel for managing users, subscriptions, authentication & video content workflows',
                            'Backend APIs & subscription management for Android and iOS applications',
                            'In-app purchase & subscription workflows powered by Laravel backend services',
                        ] as $feat)
                        <li class="flex items-start gap-2.5 text-gray-400 text-sm">
                            <svg class="w-4 h-4 text-purple-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            {{ $feat }}
                        </li>
                        @endforeach
                    </ul>
                    <div class="flex flex-wrap gap-2 pt-4 border-t border-gray-700/50">
                        @foreach(['PHP','Laravel','Tailwind CSS','REST APIs'] as $t)
                        <span class="skill-chip text-xs">{{ $t }}</span>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Project: Wallaby Windows --}}
            <div class="project-card reveal" data-tilt data-delay="150">
                <div class="h-2 w-full" style="background:linear-gradient(90deg,#14B8A6,#8B5CF6);"></div>
                <div class="p-6 sm:p-8">
                    <div class="flex items-start justify-between gap-4 mb-5">
                        <div>
                            <div class="flex items-center gap-2 mb-2">
                                <div class="project-icon-wrap w-10 h-10 rounded-xl flex items-center justify-center text-xl transition-all duration-300"
                                     style="background:rgba(20,184,166,0.15);border:1px solid rgba(20,184,166,0.25);">📍</div>
                                <span class="badge badge-teal text-xs">Location Services</span>
                            </div>
                            <h3 class="text-white text-xl font-bold">Wallaby Windows</h3>
                            <p class="text-teal-400 text-sm mt-0.5">Franchise Locator & Booking</p>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed mb-5">
                        Franchise locator functionality with ZIP-code search and interactive Google Maps integration,
                        plus address autofill to streamline booking workflows.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Franchise locator with ZIP code-based search & interactive Google Maps integration',
                            'Google Places API for dynamic autofill of address fields in booking flows',
                            'Custom map markers for franchise microsites & location discovery features',
                        ] as $feat)
                        <li class="flex items-start gap-2.5 text-gray-400 text-sm">
                            <svg class="w-4 h-4 text-teal-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            {{ $feat }}
                        </li>
                        @endforeach
                    </ul>
                    <div class="flex flex-wrap gap-2 pt-4 border-t border-gray-700/50">
                        @foreach(['PHP','Laravel','Google Maps API','Google Places API'] as $t)
                        <span class="skill-chip text-xs">{{ $t }}</span>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════════════════════════
     STATS / ACHIEVEMENTS SECTION
════════════════════════════════════════════════════════════════════════ --}}
<section class="py-20 lg:py-28 relative overflow-hidden" style="background-color:#111827;">

    <div class="absolute inset-0 bg-mesh pointer-events-none"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 rounded-full pointer-events-none"
         style="background:radial-gradient(circle,rgba(20,184,166,0.06) 0%,transparent 70%);"></div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative">

        <div class="text-center mb-14 reveal">
            <div class="section-label mx-auto">
                <span>🏆</span> Achievements
            </div>
            <h2 data-title class="text-4xl sm:text-5xl font-extrabold text-white"
                style="font-family:'Plus Jakarta Sans',sans-serif;">
                By the <span class="gradient-text">Numbers</span>
            </h2>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 tilt-grid">
            @foreach([
                ['5','+','Years of Experience','Calendar','#14B8A6'],
                ['10','+','Projects Delivered','Rocket','#3B82F6'],
                ['20','+','Technologies Used','Code','#8B5CF6'],
                ['100','%','Client Satisfaction','Star','#22C55E'],
            ] as [$num,$suf,$label,$icon,$color])
            <div class="glass-card p-6 text-center reveal" data-tilt data-delay="{{ $loop->index * 80 }}">
                <div class="w-12 h-12 rounded-xl flex items-center justify-center mx-auto mb-4"
                     style="background:{{ $color }}1a;border:1px solid {{ $color }}40;">
                    @if($icon === 'Calendar')
                    <svg class="w-6 h-6" style="color:{{ $color }};" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    @elseif($icon === 'Rocket')
                    <svg class="w-6 h-6" style="color:{{ $color }};" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    @elseif($icon === 'Code')
                    <svg class="w-6 h-6" style="color:{{ $color }};" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                    </svg>
                    @else
                    <svg class="w-6 h-6" style="color:{{ $color }};" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                    </svg>
                    @endif
                </div>
                <div class="text-4xl font-extrabold mb-1" style="color:{{ $color }};">
                    <span data-counter="{{ $num }}" data-suffix="{{ $suf }}">0{{ $suf }}</span>
                </div>
                <p class="text-gray-400 text-sm font-medium">{{ $label }}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>


{{-- ════════════════════════════════════════════════════════════════════════
     EDUCATION & CERTIFICATIONS SECTION
════════════════════════════════════════════════════════════════════════ --}}
<section id="education" class="py-24 lg:py-32 bg-mesh" style="background-color:#0B1120;">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16 reveal">
            <div class="section-label mx-auto">
                <span>🎓</span> Education & Credentials
            </div>
            <h2 data-title class="text-4xl sm:text-5xl font-extrabold text-white mb-4"
                style="font-family:'Plus Jakarta Sans',sans-serif;">
                Academic <span class="gradient-text">Background</span>
            </h2>
        </div>

        <div class="grid lg:grid-cols-2 gap-8 items-start">

            {{-- Education --}}
            <div class="glass-card p-8 reveal-left">
                <div class="flex items-start gap-4 mb-4">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center text-xl flex-shrink-0"
                         style="background:rgba(20,184,166,0.12);border:1px solid rgba(20,184,166,0.25);">🎓</div>
                    <div class="flex-1">
                        <div class="flex flex-wrap items-start justify-between gap-2">
                            <h3 class="text-white font-bold text-lg">Master of Technology (Integrated)</h3>
                            <span class="badge badge-teal text-xs flex-shrink-0">2016 – 2021</span>
                        </div>
                        <p class="text-teal-400 text-sm mt-0.5">Information Technology · CGPA 7.35</p>
                    </div>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed pl-16">
                    International Institute of Professional Studies, DAVV — Indore, India.
                    A 5-year integrated program covering core computer science, software engineering, and IT systems.
                </p>
            </div>

            {{-- Certifications & Languages --}}
            <div class="space-y-8">

                {{-- Certifications --}}
                <div class="glass-card p-8 reveal-right">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center text-xl flex-shrink-0"
                             style="background:rgba(59,130,246,0.12);border:1px solid rgba(59,130,246,0.25);">🏅</div>
                        <h3 class="text-white font-bold text-lg">Certifications</h3>
                    </div>
                    <p class="text-gray-400 text-sm mb-3 pl-16">LinkedIn Skill Badges earned in:</p>
                    <div class="flex flex-wrap gap-2 pl-16">
                        @foreach(['PHP','Java','C++','MySQL'] as $cert)
                        <span class="skill-chip">{{ $cert }}</span>
                        @endforeach
                    </div>
                </div>

                {{-- Languages --}}
                <div class="glass-card p-8 reveal-right" data-delay="100">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center text-xl flex-shrink-0"
                             style="background:rgba(139,92,246,0.12);border:1px solid rgba(139,92,246,0.25);">🌐</div>
                        <h3 class="text-white font-bold text-lg">Languages</h3>
                    </div>
                    <div class="flex flex-wrap gap-2 pl-16">
                        @foreach(['English','Hindi','Marathi'] as $lang)
                        <span class="skill-chip">{{ $lang }}</span>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════════════════════════
     CONTACT SECTION
════════════════════════════════════════════════════════════════════════ --}}
<section id="contact" class="py-24 lg:py-32 relative bg-mesh" style="background-color:#111827;">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16 reveal">
            <div class="section-label mx-auto">
                <span>✉️</span> Contact
            </div>
            <h2 data-title class="text-4xl sm:text-5xl font-extrabold text-white mb-4"
                style="font-family:'Plus Jakarta Sans',sans-serif;">
                Let's <span class="gradient-text">Work Together</span>
            </h2>
            <p class="text-gray-400 text-lg max-w-xl mx-auto">
                Open to full-time remote roles, SaaS product teams, and freelance engagements.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-start">

            {{-- Left: Contact Info --}}
            <div class="reveal-left">

                <p class="text-gray-300 text-lg leading-relaxed mb-8">
                    I'm open to new opportunities — full-time remote positions, SaaS product teams, or freelance projects.
                    If your team could use a <strong class="text-white">Full Stack Developer</strong> with deep Laravel and
                    modern JavaScript experience, let's talk.
                </p>

                <div class="space-y-4 mb-8">
                    @foreach([
                        ['📧','Email','nirojmeshram@gmail.com','mailto:nirojmeshram@gmail.com'],
                        ['📱','Phone','+91 79872 06996','tel:+917987206996'],
                        ['📍','Location','Indore, Madhya Pradesh, India',null],
                    ] as [$icon,$label,$value,$href])
                    <div class="glass-card p-4 flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center text-xl flex-shrink-0"
                             style="background:rgba(20,184,166,0.1);border:1px solid rgba(20,184,166,0.2);">
                            {{ $icon }}
                        </div>
                        <div>
                            <p class="text-gray-500 text-xs uppercase tracking-widest font-medium mb-0.5">{{ $label }}</p>
                            @if($href)
                            <a href="{{ $href }}" class="text-white font-medium hover:text-teal-400 transition-colors">{{ $value }}</a>
                            @else
                            <p class="text-white font-medium">{{ $value }}</p>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- Availability --}}
                <div class="glass-card p-5 flex items-center gap-4">
                    <span class="avail-dot flex-shrink-0"></span>
                    <div>
                        <p class="text-white font-semibold">Available for Work</p>
                        <p class="text-gray-400 text-sm">Open to remote full-time & freelance opportunities</p>
                    </div>
                </div>
            </div>

            {{-- Right: Contact Form --}}
            <div class="reveal-right" x-data="contactForm()">

                {{-- Success message --}}
                <div x-show="submitted"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 translate-y-4"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     class="glass-card p-6 text-center mb-4"
                     style="border-color:rgba(34,197,94,0.3);background:rgba(34,197,94,0.05);display:none;">
                    <div class="text-4xl mb-3">✅</div>
                    <h4 class="text-white font-bold text-lg mb-1">Message Sent!</h4>
                    <p class="text-gray-400 text-sm">Thanks for reaching out. I'll get back to you within 24 hours.</p>
                </div>

                <form x-show="!submitted"
                      @submit.prevent="submit()"
                      class="glass-card p-6 sm:p-8 space-y-5">

                    <div class="grid sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-gray-300 text-sm font-medium mb-2">Full Name</label>
                            <input type="text" x-model="form.name" placeholder="John Smith" required class="form-input">
                        </div>
                        <div>
                            <label class="block text-gray-300 text-sm font-medium mb-2">Email Address</label>
                            <input type="email" x-model="form.email" placeholder="john@company.com" required class="form-input">
                        </div>
                    </div>

                    <div>
                        <label class="block text-gray-300 text-sm font-medium mb-2">Subject</label>
                        <input type="text" x-model="form.subject" placeholder="Full-time role / Freelance project / Collaboration…" required class="form-input">
                    </div>

                    <div>
                        <label class="block text-gray-300 text-sm font-medium mb-2">Message</label>
                        <textarea x-model="form.message" rows="5" placeholder="Tell me about your project, role, or opportunity…" required class="form-input"></textarea>
                    </div>

                    <button type="submit"
                            :disabled="submitting"
                            class="btn-primary w-full justify-center"
                            :class="submitting ? 'opacity-80 cursor-wait' : ''">
                        <span x-show="!submitting" class="flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                            </svg>
                            Send Message
                        </span>
                        <span x-show="submitting" class="flex items-center gap-2" style="display:none;">
                            <svg class="w-4 h-4 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                            </svg>
                            Sending…
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
