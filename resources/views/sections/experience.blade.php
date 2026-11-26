{{-- EXPERIENCE: the only .timeline-track on the page (app.js initTimeline() animates the first one). --}}
<section id="experience" class="scroll-mt-16 py-24 lg:py-32 relative" style="background-color:#111827;">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16 reveal">
            <div class="section-label mx-auto">
                <span aria-hidden="true">📋</span> Experience
            </div>
            <h2 data-title class="text-4xl sm:text-5xl font-extrabold text-white mb-4"
                style="font-family:'Plus Jakarta Sans',sans-serif;">
                Professional <span class="gradient-text">Experience</span>
            </h2>
            <p class="text-gray-400 text-lg max-w-xl mx-auto">
                5+ years of professional software engineering.
            </p>
        </div>

        <div class="timeline-track pl-8 space-y-10">

            {{-- Bacancy (official designation: Software Engineer) --}}
            <div class="flex gap-6 reveal" data-delay="0">
                <div class="flex flex-col items-center flex-shrink-0" style="margin-left:-32px;" aria-hidden="true">
                    <div class="timeline-dot"></div>
                    <div class="w-0.5 flex-1 mt-2" style="background:linear-gradient(to bottom,rgba(20,184,166,0.4),rgba(59,130,246,0.2));min-height:40px;"></div>
                </div>
                <div class="glass-card p-6 flex-1 min-w-0 mb-2">
                    <div class="flex flex-wrap items-start justify-between gap-3 mb-4">
                        <div>
                            <h3 class="text-white font-bold text-xl">Software Engineer</h3>
                            <p class="text-teal-400 font-medium mt-0.5">Bacancy Software LLP · Ahmedabad, India</p>
                        </div>
                        <span class="badge badge-teal text-xs flex-shrink-0">Apr 2025 – Present</span>
                    </div>

                    <p class="text-gray-300 text-sm leading-relaxed mb-6">
                        My work at Bacancy covers two areas: an enterprise SaaS platform for a client, where I'm the only
                        active developer from Bacancy, and Filament-based Laravel development.
                    </p>

                    <div class="flex flex-wrap items-baseline justify-between gap-x-4 gap-y-1 mb-3">
                        <h4 class="text-white font-semibold">Enterprise SaaS platform <span class="text-gray-400 font-normal">(client project)</span></h4>
                        <a href="#case-study" onclick="return !window.scrollToSection || (scrollToSection('case-study'), false);"
                           class="text-teal-400 hover:text-teal-300 text-sm font-medium inline-flex items-center gap-1 py-1">
                            Read the case study <span aria-hidden="true">→</span>
                        </a>
                    </div>
                    <ul role="list" class="space-y-2 text-gray-400 text-sm mb-6">
                        <li class="flex items-start gap-2">
                            <span class="text-teal-400 mt-0.5 flex-shrink-0" aria-hidden="true">›</span>
                            <span>Implement features within the platform's existing architecture, which I did not design:
                                Symfony, API Platform and Doctrine on the backend, and Next.js, React and TypeScript on the
                                frontend, structured around DDD, CQRS and Hexagonal Architecture.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-teal-400 mt-0.5 flex-shrink-0" aria-hidden="true">›</span>
                            <span><strong class="text-gray-200 font-semibold">AI-assisted development:</strong> I work from the
                                business requirement to a technical approach, Claude Code suggests the implementation, and I
                                review the generated code and test the functionality.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-teal-400 mt-0.5 flex-shrink-0" aria-hidden="true">›</span>
                            <span><strong class="text-gray-200 font-semibold">Hands-on AWS operations:</strong> production
                                troubleshooting, infrastructure investigation, monitoring and application support across AWS
                                Lambda, Amazon SQS, Amazon RDS (MySQL), Amazon S3, Amazon CloudFront and Amazon CloudWatch.</span>
                        </li>
                    </ul>

                    <h4 class="text-white font-semibold mb-3">Filament development</h4>
                    <ul role="list" class="space-y-2 text-gray-400 text-sm">
                        @foreach([
                            'Built custom Filament Builder blocks for modular content creation, with flexible field structures and dynamic rendering logic.',
                            'Added search and filtering to Filament block pickers through customised Blade view overrides.',
                            'Integrated media upload and preview into Filament forms and admin workflows using a Filament media library plugin.',
                            'Implemented role-based access control with Filament Shield for resource-level authorisation and permission management.',
                        ] as $item)
                        <li class="flex items-start gap-2">
                            <span class="text-teal-400 mt-0.5 flex-shrink-0" aria-hidden="true">›</span>
                            <span>{{ $item }}</span>
                        </li>
                        @endforeach
                    </ul>

                    {{-- Involvement is stated in text, not only by chip style --}}
                    <div class="mt-6 pt-5 border-t border-gray-700/50 space-y-3">
                        @foreach([
                            ['Hands-on', ['PHP','Laravel','Filament'], false],
                            ['AWS · hands-on', ['Lambda','SQS','RDS','S3','CloudFront','CloudWatch'], false],
                            ['AI-assisted', ['Symfony','API Platform','Doctrine','Next.js','React','TypeScript'], true],
                        ] as [$label, $chips, $assisted])
                        <div class="sm:flex sm:items-start sm:gap-3">
                            <p class="text-gray-400 text-xs uppercase tracking-widest font-semibold mb-2 sm:mb-0 sm:w-36 sm:flex-shrink-0 sm:pt-2">{{ $label }}</p>
                            <ul role="list" class="flex flex-wrap gap-2" aria-label="{{ $label }}">
                                @foreach($chips as $t)
                                <li class="skill-chip {{ $assisted ? 'skill-chip-assisted' : '' }}">{{ $t }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Entrata --}}
            <div class="flex gap-6 reveal" data-delay="100">
                <div class="flex flex-col items-center flex-shrink-0" style="margin-left:-32px;" aria-hidden="true">
                    <div class="timeline-dot" style="background:linear-gradient(135deg,#3B82F6,#8B5CF6);box-shadow:0 0 12px rgba(59,130,246,0.6);"></div>
                    <div class="w-0.5 flex-1 mt-2" style="background:linear-gradient(to bottom,rgba(59,130,246,0.4),rgba(139,92,246,0.2));min-height:40px;"></div>
                </div>
                <div class="glass-card p-6 flex-1 min-w-0 mb-2">
                    <div class="flex flex-wrap items-start justify-between gap-3 mb-3">
                        <div>
                            <h3 class="text-white font-bold text-xl">Software Engineer</h3>
                            <p class="text-blue-400 font-medium mt-0.5">Entrata · Pune, India</p>
                        </div>
                        <span class="badge badge-blue text-xs flex-shrink-0">Jan 2024 – Apr 2025</span>
                    </div>
                    <ul role="list" class="space-y-2 text-gray-400 text-sm">
                        @foreach([
                            'Contributed to automated billing workflows for a SaaS platform based on lease status, improving billing accuracy and operational efficiency.',
                            'Debugged and resolved critical production issues in a large codebase, improving reliability and reducing recurring failures.',
                            'Optimised database queries and backend logic to improve response times and overall performance.',
                            'Worked with stakeholders to turn business requirements into technical solutions, and supported testing and deployment.',
                            'Worked in Entrata\'s custom PHP framework (Fuse), with Smarty templates for the UI.',
                        ] as $item)
                        <li class="flex items-start gap-2">
                            <span class="text-blue-400 mt-0.5 flex-shrink-0" aria-hidden="true">›</span>
                            <span>{{ $item }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <ul role="list" class="flex flex-wrap gap-2 mt-4" aria-label="Entrata technologies">
                        @foreach(['PHP','Fuse (custom PHP framework)','Smarty','SaaS billing','Query optimisation'] as $t)
                        <li class="skill-chip">{{ $t }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            {{-- Sofmen Technologies --}}
            <div class="flex gap-6 reveal" data-delay="200">
                <div class="flex flex-col items-center flex-shrink-0" style="margin-left:-32px;" aria-hidden="true">
                    <div class="timeline-dot" style="background:linear-gradient(135deg,#8B5CF6,#14B8A6);box-shadow:0 0 12px rgba(139,92,246,0.6);"></div>
                </div>
                <div class="glass-card p-6 flex-1 min-w-0">
                    <div class="flex flex-wrap items-start justify-between gap-3 mb-3">
                        <div>
                            <h3 class="text-white font-bold text-xl">Full Stack Developer</h3>
                            <p class="text-purple-400 font-medium mt-0.5">Sofmen Technologies Pvt Ltd · Indore, India</p>
                        </div>
                        <span class="badge badge-purple text-xs flex-shrink-0">Mar 2021 – Dec 2023</span>
                    </div>
                    <ul role="list" class="space-y-2 text-gray-400 text-sm">
                        @foreach([
                            'Developed web applications using PHP, Laravel and Node.js, working with cross-functional teams and clients.',
                            'Troubleshot complex implementation issues in Laravel and CodeIgniter applications, keeping frontend and backend integration working smoothly.',
                            'Developed and maintained REST APIs, backend services and core application features, with a focus on maintainability.',
                            'Took part in requirement discussions, sprint planning, client communication and feature delivery across multiple web projects.',
                        ] as $item)
                        <li class="flex items-start gap-2">
                            <span class="text-purple-400 mt-0.5 flex-shrink-0" aria-hidden="true">›</span>
                            <span>{{ $item }}</span>
                        </li>
                        @endforeach
                        <li class="flex items-start gap-2">
                            <span class="text-purple-400 mt-0.5 flex-shrink-0" aria-hidden="true">›</span>
                            <span>Projects included FranApp, Everlease, TheWayApp and Wallaby Windows.
                                <a href="#projects" onclick="return !window.scrollToSection || (scrollToSection('projects'), false);"
                                   class="text-purple-400 hover:text-purple-300 font-medium whitespace-nowrap">See projects <span aria-hidden="true">→</span></a></span>
                        </li>
                    </ul>
                    <ul role="list" class="flex flex-wrap gap-2 mt-4" aria-label="Sofmen Technologies technologies">
                        @foreach(['PHP','Laravel','CodeIgniter','Node.js','Vue.js','MySQL','REST APIs'] as $t)
                        <li class="skill-chip">{{ $t }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
