{{-- EXPERIENCE: the only .timeline-track on the page (app.js initTimeline() scrubs the first one).
     The rail and dots are hidden below 640px.
     Bacancy has two separate workstreams: Laravel/Filament development, and the enterprise SaaS platform
     (Laravel backend, React/TypeScript frontend, AWS). Filament belongs only to the first. Never mention Symfony. --}}
<section id="experience" class="scroll-mt-16 section" style="background-color:#111827;">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <header class="section-head reveal">
            <h2 class="section-title">Professional Experience</h2>
            <p class="section-lead">5+ years of professional software engineering.</p>
        </header>

        <ol role="list" class="timeline-track max-w-5xl sm:pl-8 space-y-6 sm:space-y-8">

            {{-- Bacancy (official designation: Software Engineer) --}}
            <li class="sm:flex sm:gap-6 reveal">
                <div class="hidden sm:block flex-shrink-0" style="margin-left:-32px;" aria-hidden="true">
                    <div class="timeline-dot"></div>
                </div>
                <article class="glass-card p-6 sm:p-8 flex-1 min-w-0">
                    <header class="flex flex-wrap items-start justify-between gap-x-4 gap-y-2 mb-5">
                        <div>
                            <h3 class="card-title">Software Engineer</h3>
                            <p class="text-gray-300 font-medium mt-1">Bacancy Software LLP <span class="text-gray-400 font-normal">· Ahmedabad, India</span></p>
                        </div>
                        <p class="badge badge-teal">Apr 2025 – Present</p>
                    </header>

                    <p class="text-gray-300 leading-relaxed mb-6">
                        My work at Bacancy covers two separate workstreams: Laravel and Filament development, and an
                        enterprise SaaS platform for a client, where I'm the sole developer.
                    </p>

                    {{-- Two separate workstreams. Both use Laravel, but Filament belongs only to the first one: never
                         attribute Filament to the enterprise SaaS platform. --}}
                    <div class="pt-6 border-t border-gray-700/50">
                        <h4 class="text-white font-semibold mb-3">Laravel and Filament development</h4>
                        <ul role="list" class="bullets space-y-2.5 text-gray-400 text-sm leading-relaxed">
                            <li>Develop Laravel applications with Filament admin panels.</li>
                            <li>Built custom Filament components and Builder blocks for modular content creation, with flexible field structures and dynamic rendering logic.</li>
                            <li>Customised Blade views to add search and filtering to Filament block pickers.</li>
                            <li>Integrated media upload, preview and management into Filament forms using a Filament media library plugin.</li>
                            <li>Implemented role-based access control with Filament Shield for resource-level authorisation and permission management.</li>
                        </ul>
                        <ul role="list" class="flex flex-wrap gap-2 mt-4" aria-label="Laravel and Filament technologies">
                            @foreach(['PHP','Laravel','Filament','Blade'] as $t)
                            <li class="skill-chip">{{ $t }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="pt-6 mt-6 border-t border-gray-700/50">
                        <div class="flex flex-wrap items-baseline justify-between gap-x-4 gap-y-1 mb-3">
                            <h4 class="text-white font-semibold">Enterprise SaaS platform <span class="text-gray-400 font-normal">(client project)</span></h4>
                            <a href="#case-study" onclick="return !window.scrollToSection || (scrollToSection('case-study'), false);" class="text-link text-sm">
                                Read the case study <span aria-hidden="true">→</span>
                            </a>
                        </div>
                        {{-- Condensed to 5 keyword-led points (user decision); the full detail lives in the case study.
                             CONFIDENTIAL: no client/product name. Figures are user-approved; performance gains are
                             percentages, never seconds. --}}
                        <p class="text-gray-300 text-sm leading-relaxed mb-4">
                            A multi-tenant platform that housing associations and their contractors use to plan, cost and
                            approve long-term maintenance across thousands of rental homes.
                        </p>
                        <ul role="list" class="bullets space-y-2.5 text-gray-400 text-sm leading-relaxed">
                            <li><strong class="text-gray-200 font-semibold">Full-stack ownership:</strong> sole developer of the
                                Laravel (PHP) backend, React and TypeScript frontend, MySQL database and AWS infrastructure.</li>
                            <li><strong class="text-gray-200 font-semibold">Performance optimisation:</strong> cut project-overview
                                load time by about 97% through query optimisation and server-side pagination, and reduced database
                                queries per page by 93% by eliminating N+1 lazy loading, cutting budget-screen response times by 50%.</li>
                            <li><strong class="text-gray-200 font-semibold">Data processing and integrity:</strong> rebuilt bulk
                                spreadsheet imports with a streaming parser (about 93% faster, no more timeouts) and fixed
                                cost-engine calculation bugs in VAT, surcharges and cost cycles.</li>
                            <li><strong class="text-gray-200 font-semibold">Security and reliability:</strong> ran a full application
                                security review (authorisation, endpoint protection, XSS) and upgraded the runtime platform before
                                end of life with zero downtime.</li>
                            <li><strong class="text-gray-200 font-semibold">AWS production operations:</strong> troubleshooting,
                                monitoring and infrastructure investigation across Lambda, SQS, RDS (MySQL), S3, CloudFront and
                                CloudWatch.</li>
                        </ul>
                        <ul role="list" class="flex flex-wrap gap-2 mt-4" aria-label="Enterprise SaaS platform technologies">
                            @foreach(['PHP','Laravel','React','TypeScript','MySQL','AWS Lambda','Amazon SQS','Amazon RDS','Amazon S3','Amazon CloudFront','Amazon CloudWatch'] as $t)
                            <li class="skill-chip">{{ $t }}</li>
                            @endforeach
                        </ul>
                    </div>
                </article>
            </li>

            {{-- Entrata --}}
            <li class="sm:flex sm:gap-6 reveal">
                <div class="hidden sm:block flex-shrink-0" style="margin-left:-32px;" aria-hidden="true">
                    <div class="timeline-dot"></div>
                </div>
                <article class="glass-card p-6 sm:p-8 flex-1 min-w-0">
                    <header class="flex flex-wrap items-start justify-between gap-x-4 gap-y-2 mb-5">
                        <div>
                            <h3 class="card-title">Software Engineer</h3>
                            <p class="text-gray-300 font-medium mt-1">Entrata <span class="text-gray-400 font-normal">· Pune, India</span></p>
                        </div>
                        <p class="badge badge-neutral">Jan 2024 – Apr 2025</p>
                    </header>
                    <ul role="list" class="bullets space-y-2.5 text-gray-400 text-sm leading-relaxed">
                        @foreach([
                            'Contributed to automated billing workflows for a SaaS platform based on lease status, improving billing accuracy and operational efficiency.',
                            'Debugged and resolved critical production issues in a large codebase, improving reliability and reducing recurring failures.',
                            'Optimised database queries and backend logic to improve response times and overall performance.',
                            'Worked with stakeholders to turn business requirements into technical solutions, and supported testing and deployment.',
                            'Worked in Entrata\'s custom PHP framework (Fuse), with Smarty templates for the UI.',
                        ] as $item)
                        <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                    <ul role="list" class="flex flex-wrap gap-2 mt-6" aria-label="Entrata technologies">
                        @foreach(['PHP','Fuse (custom PHP framework)','Smarty','SaaS billing','Query optimisation'] as $t)
                        <li class="skill-chip">{{ $t }}</li>
                        @endforeach
                    </ul>
                </article>
            </li>

            {{-- Sofmen Technologies --}}
            <li class="sm:flex sm:gap-6 reveal">
                <div class="hidden sm:block flex-shrink-0" style="margin-left:-32px;" aria-hidden="true">
                    <div class="timeline-dot"></div>
                </div>
                <article class="glass-card p-6 sm:p-8 flex-1 min-w-0">
                    <header class="flex flex-wrap items-start justify-between gap-x-4 gap-y-2 mb-5">
                        <div>
                            <h3 class="card-title">Full Stack Developer</h3>
                            <p class="text-gray-300 font-medium mt-1">Sofmen Technologies Pvt Ltd <span class="text-gray-400 font-normal">· Indore, India</span></p>
                        </div>
                        <p class="badge badge-neutral">Mar 2021 – Dec 2023</p>
                    </header>
                    <ul role="list" class="bullets space-y-2.5 text-gray-400 text-sm leading-relaxed">
                        @foreach([
                            'Developed web applications using PHP, Laravel and Node.js, working with cross-functional teams and clients.',
                            'Troubleshot complex implementation issues in Laravel and CodeIgniter applications, keeping frontend and backend integration working smoothly.',
                            'Developed and maintained REST APIs, backend services and core application features, with a focus on maintainability.',
                            'Took part in requirement discussions, sprint planning, client communication and feature delivery across multiple web projects.',
                        ] as $item)
                        <li>{{ $item }}</li>
                        @endforeach
                        <li>Projects included FranApp, Everlease, TheWayApp and Wallaby Windows.
                            <a href="#projects" onclick="return !window.scrollToSection || (scrollToSection('projects'), false);"
                               class="text-link whitespace-nowrap">See projects <span aria-hidden="true">→</span></a></li>
                    </ul>
                    <ul role="list" class="flex flex-wrap gap-2 mt-6" aria-label="Sofmen Technologies technologies">
                        @foreach(['PHP','Laravel','CodeIgniter','Node.js','Vue.js','MySQL','REST APIs'] as $t)
                        <li class="skill-chip">{{ $t }}</li>
                        @endforeach
                    </ul>
                </article>
            </li>

        </ol>
    </div>
</section>
