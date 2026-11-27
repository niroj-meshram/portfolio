{{--
    SKILLS: professional skills by area. No ratings, bars or counts.
    Primary technologies (user-confirmed): PHP, Laravel, React, JavaScript, TypeScript, Node.js, MySQL, AWS.
    Not listed on purpose: Symfony and its stack (not featured publicly), Java, C++, Redis, Clean Architecture,
    AWS EC2/API Gateway, Auth0 (platform context in the case study only).
    AI tools are productivity tools under Tools & environment, not a skill category. Personal projects stay separate.
--}}
<section id="skills" class="scroll-mt-16 section" style="background-color:#111827;">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <header class="section-head reveal">
            <h2 class="section-title">Technical Skills</h2>
            <p class="section-lead">What I use in professional work, grouped by area. No self-ratings.</p>
        </header>

        <div class="grid md:grid-cols-2 gap-6">

            {{-- Professional development --}}
            <article class="glass-card p-6 sm:p-8 md:col-span-2 reveal">
                <div class="flex flex-wrap items-center gap-3 mb-1">
                    <h3 class="card-title">Development</h3>
                    <span class="badge badge-teal">Professional work</span>
                </div>
                <p class="text-gray-400 text-sm mb-6">Technologies I work with directly in my roles and projects. Core technologies are highlighted.</p>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-6">
                    @foreach([
                        ['Backend', ['PHP','Laravel','Node.js','Filament','CodeIgniter','REST APIs'], ['PHP','Laravel','Node.js']],
                        ['Frontend', ['React','TypeScript','JavaScript','Vue.js','Blade','Tailwind CSS','Bootstrap','jQuery','Smarty'], ['React','TypeScript','JavaScript']],
                        ['Databases', ['MySQL','PostgreSQL','Query optimisation'], ['MySQL']],
                        ['Integrations', ['Stripe subscriptions','Google Maps API','Google Places API'], []],
                        ['Practices', ['Role-based access control','Debugging','Code review','Testing'], []],
                    ] as [$group, $items, $core])
                    <div>
                        <h4 class="meta-label mb-3">{{ $group }}</h4>
                        <ul role="list" class="flex flex-wrap gap-2">
                            @foreach($items as $name)
                            <li class="skill-chip {{ in_array($name, $core) ? 'text-white font-semibold' : '' }}">{{ $name }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                </div>
            </article>

            {{-- AWS --}}
            <article class="glass-card p-6 sm:p-8 reveal">
                <div class="flex flex-wrap items-center gap-3 mb-1">
                    <h3 class="card-title">AWS</h3>
                    <span class="badge badge-teal">Production operations</span>
                </div>
                <p class="text-gray-400 text-sm mb-6">Troubleshooting, infrastructure investigation, monitoring and application support.</p>
                <ul role="list" class="flex flex-wrap gap-2">
                    @foreach(['AWS Lambda','Amazon SQS','Amazon RDS (MySQL)','Amazon S3','Amazon CloudFront','Amazon CloudWatch'] as $name)
                    <li class="skill-chip">{{ $name }}</li>
                    @endforeach
                </ul>
            </article>

            {{-- Tools & environment --}}
            <article class="glass-card p-6 sm:p-8 reveal" data-delay="80">
                <h3 class="card-title mb-6">Tools &amp; environment</h3>
                <ul role="list" class="flex flex-wrap gap-2 mb-6">
                    @foreach(['Git','GitHub','GitLab','Jenkins','Jira','Azure DevOps','PhpStorm','VS Code'] as $name)
                    <li class="skill-chip">{{ $name }}</li>
                    @endforeach
                </ul>
                <h4 class="meta-label mb-3">Development environment</h4>
                <ul role="list" class="flex flex-wrap gap-2 mb-6">
                    <li class="skill-chip whitespace-normal">Docker (local development environments only)</li>
                </ul>
                <h4 class="meta-label mb-1">AI-assisted development tools</h4>
                <p class="text-gray-400 text-sm mb-3">For faster implementation and investigation.</p>
                <ul role="list" class="flex flex-wrap gap-2">
                    @foreach(['Claude Code','Cursor','ChatGPT'] as $name)
                    <li class="skill-chip">{{ $name }}</li>
                    @endforeach
                </ul>
            </article>

            {{-- Personal --}}
            <article class="glass-card p-6 sm:p-8 md:col-span-2 reveal">
                <div class="flex flex-wrap items-center gap-3 mb-1">
                    <h3 class="card-title">Personal projects</h3>
                    <span class="badge badge-neutral">Not production work</span>
                </div>
                <p class="text-gray-400 text-sm mb-6">Learning and experimentation.</p>
                <ul role="list" class="flex flex-wrap gap-2">
                    @foreach(['Chrome extensions (Manifest V3)','Vitest','Python','FastAPI','PostgreSQL with pgvector','Gemini','Retrieval-augmented generation (RAG)'] as $name)
                    <li class="skill-chip whitespace-normal">{{ $name }}</li>
                    @endforeach
                </ul>
            </article>

        </div>
    </div>
</section>
