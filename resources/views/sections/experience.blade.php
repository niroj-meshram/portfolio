{{-- EXPERIENCE: the only .timeline-track on the page (app.js initTimeline() scrubs the first one).
     The rail and dots are hidden below 640px. --}}
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
                        My work at Bacancy covers two areas: an enterprise SaaS platform for a client, where I'm the only
                        active developer from Bacancy, and Filament-based Laravel development.
                    </p>

                    <div class="pt-6 border-t border-gray-700/50">
                        <div class="flex flex-wrap items-baseline justify-between gap-x-4 gap-y-1 mb-3">
                            <h4 class="text-white font-semibold">Enterprise SaaS platform <span class="text-gray-400 font-normal">(client project)</span></h4>
                            <a href="#case-study" onclick="return !window.scrollToSection || (scrollToSection('case-study'), false);" class="text-link text-sm">
                                Read the case study <span aria-hidden="true">→</span>
                            </a>
                        </div>
                        <ul role="list" class="bullets space-y-2.5 text-gray-400 text-sm leading-relaxed">
                            <li>Implement features within the platform's existing architecture, which I did not design:
                                Symfony, API Platform and Doctrine on the backend, and Next.js, React and TypeScript on the
                                frontend, structured around DDD, CQRS and Hexagonal Architecture.</li>
                            <li><strong class="text-gray-200 font-semibold">AI-assisted development:</strong> I work from the
                                business requirement to a technical approach, Claude Code suggests the implementation, and I
                                review the generated code and test the functionality.</li>
                            <li><strong class="text-gray-200 font-semibold">Hands-on AWS operations:</strong> production
                                troubleshooting, infrastructure investigation, monitoring and application support across AWS
                                Lambda, Amazon SQS, Amazon RDS (MySQL), Amazon S3, Amazon CloudFront and Amazon CloudWatch.</li>
                        </ul>
                    </div>

                    <div class="pt-6 mt-6 border-t border-gray-700/50">
                        <h4 class="text-white font-semibold mb-3">Filament development</h4>
                        <ul role="list" class="bullets space-y-2.5 text-gray-400 text-sm leading-relaxed">
                            <li>Built custom Filament Builder blocks for modular content creation, with flexible field structures and dynamic rendering logic.</li>
                            <li>Added search and filtering to Filament block pickers through customised Blade view overrides.</li>
                            <li>Integrated media upload and preview into Filament forms and admin workflows using a Filament media library plugin.</li>
                            <li>Implemented role-based access control with Filament Shield for resource-level authorisation and permission management.</li>
                        </ul>
                    </div>

                    {{-- Involvement is stated in text, not only by chip style --}}
                    <dl class="mt-6 pt-6 border-t border-gray-700/50 space-y-4">
                        @foreach([
                            ['Hands-on', ['PHP','Laravel','Filament'], false],
                            ['AWS · hands-on', ['Lambda','SQS','RDS','S3','CloudFront','CloudWatch'], false],
                            ['AI-assisted', ['Symfony','API Platform','Doctrine','Next.js','React','TypeScript'], true],
                        ] as [$label, $chips, $assisted])
                        <div class="sm:grid sm:grid-cols-[9rem_minmax(0,1fr)] sm:gap-4">
                            <dt class="meta-label mb-2 sm:mb-0 sm:pt-1.5">{{ $label }}</dt>
                            <dd>
                                <ul role="list" class="flex flex-wrap gap-2" aria-label="{{ $label }}">
                                    @foreach($chips as $t)
                                    <li class="skill-chip {{ $assisted ? 'skill-chip-assisted' : '' }}">{{ $t }}</li>
                                    @endforeach
                                </ul>
                            </dd>
                        </div>
                        @endforeach
                    </dl>
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
