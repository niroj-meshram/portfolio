{{-- ABOUT: includes education and languages (the former Education section). LinkedIn skill badges are
     intentionally not shown on the site; they remain in the résumé. --}}
<section id="about" class="scroll-mt-16 py-24 lg:py-32 relative" style="background-color:#111827;">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16 reveal">
            <div class="section-label mx-auto">
                <span aria-hidden="true">👋</span> About
            </div>
            <h2 data-title class="text-4xl sm:text-5xl font-extrabold text-white mb-4"
                style="font-family:'Plus Jakarta Sans',sans-serif;">
                About <span class="gradient-text">Me</span>
            </h2>
        </div>

        <div class="grid lg:grid-cols-5 gap-12 lg:gap-16 items-start">

            {{-- Left: profile, education, languages --}}
            <div class="lg:col-span-2 space-y-6 reveal-left">
                <div class="glass-card p-6 sm:p-8">
                    <div class="flex items-start gap-4">
                        <div class="w-14 h-14 rounded-xl flex items-center justify-center font-bold text-white text-lg flex-shrink-0"
                             style="background:linear-gradient(135deg,#14B8A6,#3B82F6);" aria-hidden="true">
                            NM
                        </div>
                        <div class="min-w-0">
                            <h3 class="text-white font-bold text-lg">Niroj Meshram</h3>
                            <p class="text-teal-400 text-sm">Full Stack Developer · <span class="whitespace-nowrap">Backend-focused</span></p>
                            <p class="text-gray-400 text-sm mt-1">Software Engineer at Bacancy</p>
                            <p class="text-gray-400 text-sm mt-1">Ahmedabad, India · IST (UTC+5:30)</p>
                        </div>
                    </div>
                </div>

                <div class="glass-card p-6 sm:p-8">
                    <h3 class="text-white font-bold text-lg mb-3">Education</h3>
                    <p class="text-white font-medium">M.Tech (Integrated), Information Technology</p>
                    <p class="text-gray-400 text-sm mt-1">International Institute of Professional Studies, DAVV, Indore</p>
                    <p class="text-gray-400 text-sm mt-1">2016–2021 · CGPA 7.35</p>

                    <h3 class="text-white font-bold text-lg mt-6 mb-3">Languages</h3>
                    <ul role="list" class="flex flex-wrap gap-2">
                        @foreach(['English','Hindi','Marathi'] as $lang)
                        <li class="skill-chip">{{ $lang }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            {{-- Right: narrative --}}
            <div class="lg:col-span-3 space-y-5 reveal-right">
                <p class="text-gray-300 text-lg leading-relaxed">
                    I'm a <strong class="text-white">backend-focused Full Stack Developer</strong> based in Ahmedabad, India,
                    with 5+ years of professional experience. I'm currently a Software Engineer at Bacancy. My strongest area
                    is backend development in <strong class="text-white">PHP and Laravel</strong>: REST APIs, backend services,
                    Filament admin panels, Stripe payment integrations and database query optimisation.
                </p>
                <p class="text-gray-400 leading-relaxed">
                    At Bacancy I'm the only active developer from the company on an enterprise SaaS client platform. I deliver
                    features within its existing Symfony and Next.js architecture through an AI-assisted workflow: I work out
                    the requirement and approach, Claude Code suggests the implementation, and I review and test it.
                    Separately, I handle the platform's production troubleshooting and AWS operations hands-on.
                </p>
                <p class="text-gray-400 leading-relaxed">
                    Before Bacancy, I worked at Entrata on SaaS billing workflows and production issues in a large custom PHP
                    codebase, and at Sofmen Technologies on client web applications using Laravel and CodeIgniter.
                </p>
                <p class="text-gray-400 leading-relaxed">
                    Outside work, I'm exploring retrieval-augmented generation through a personal prototype built with
                    FastAPI, pgvector and Gemini.
                </p>
            </div>
        </div>
    </div>
</section>
