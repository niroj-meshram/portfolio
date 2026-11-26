{{-- ABOUT: narrative first (also on mobile), then education and languages. The profile summary lives in
     the hero "At a glance" card, so it is not repeated here. LinkedIn skill badges are intentionally not
     shown on the site; they remain in the résumé. --}}
<section id="about" class="scroll-mt-16 section" style="background-color:#111827;">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <header class="section-head reveal">
            <h2 class="section-title">About Me</h2>
        </header>

        <div class="grid lg:grid-cols-5 gap-8 lg:gap-16 items-start">

            <div class="lg:col-span-3 space-y-5 max-w-2xl reveal">
                <p class="text-gray-200 text-lg leading-relaxed">
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

            <aside class="lg:col-span-2 glass-card p-6 sm:p-8 reveal" data-delay="80">
                <h3 class="meta-label mb-3">Education</h3>
                <p class="text-white font-semibold leading-snug">M.Tech (Integrated), Information Technology</p>
                <p class="text-gray-400 text-sm mt-1.5">International Institute of Professional Studies, DAVV, Indore</p>
                <p class="text-gray-400 text-sm mt-1">2016–2021 · CGPA 7.35</p>

                <h3 class="meta-label mt-6 pt-6 mb-3 border-t border-gray-700/50">Languages</h3>
                <ul role="list" class="flex flex-wrap gap-2">
                    @foreach(['English','Hindi','Marathi'] as $lang)
                    <li class="skill-chip">{{ $lang }}</li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>
</section>
