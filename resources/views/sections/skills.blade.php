{{--
    SKILLS: grouped by actual involvement. No ratings, bars or counts.
    Not listed on purpose: Java, C++, Redis, Clean Architecture, AWS EC2/API Gateway, Auth0 (platform context
    in the case study only). AI-assisted items use .skill-chip-assisted AND sit under a text label.
--}}
<section id="skills" class="scroll-mt-16 py-24 lg:py-32" style="background-color:#111827;">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16 reveal">
            <div class="section-label mx-auto">
                <span aria-hidden="true">🛠</span> Technical Skills
            </div>
            <h2 data-title class="text-4xl sm:text-5xl font-extrabold text-white mb-4"
                style="font-family:'Plus Jakarta Sans',sans-serif;">
                Technical <span class="gradient-text">Skills</span>
            </h2>
            <p class="text-gray-400 text-lg max-w-xl mx-auto">
                Grouped by how I've actually used them. No self-ratings.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-6">

            {{-- Hands-on --}}
            <div class="glass-card p-6 sm:p-8 md:col-span-2 reveal" data-delay="0">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center text-lg flex-shrink-0"
                         style="background:rgba(20,184,166,0.15);border:1px solid rgba(20,184,166,0.25);" aria-hidden="true">⚙️</div>
                    <div>
                        <h3 class="text-white font-bold">Hands-on</h3>
                        <p class="text-gray-400 text-xs">Technologies I work with directly in my roles and projects</p>
                    </div>
                </div>
                <div class="grid sm:grid-cols-2 gap-x-8 gap-y-5">
                    @foreach([
                        ['Backend', ['PHP','Laravel','CodeIgniter','Node.js','REST APIs'], ['PHP','Laravel']],
                        ['Admin & frontend', ['Filament','Blade','Vue.js','JavaScript','jQuery','Tailwind CSS','Bootstrap','Smarty'], []],
                        ['Databases', ['MySQL','PostgreSQL','Query optimisation'], []],
                        ['Integrations', ['Stripe subscriptions','Google Maps API','Google Places API'], []],
                        ['Practices', ['Role-based access control','Production debugging'], []],
                    ] as [$group, $items, $core])
                    <div>
                        <h4 class="text-gray-400 text-xs uppercase tracking-widest font-semibold mb-3">{{ $group }}</h4>
                        <ul role="list" class="flex flex-wrap gap-2">
                            @foreach($items as $name)
                            <li class="skill-chip {{ in_array($name, $core) ? 'text-white font-semibold' : '' }}">{{ $name }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- AWS --}}
            <div class="glass-card p-6 sm:p-8 reveal" data-delay="0">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center text-lg flex-shrink-0"
                         style="background:rgba(59,130,246,0.15);border:1px solid rgba(59,130,246,0.25);" aria-hidden="true">☁️</div>
                    <div>
                        <h3 class="text-white font-bold">AWS: hands-on production operations</h3>
                        <p class="text-gray-400 text-xs">Troubleshooting, infrastructure investigation, monitoring and application support</p>
                    </div>
                </div>
                <ul role="list" class="flex flex-wrap gap-2">
                    @foreach(['AWS Lambda','Amazon SQS','Amazon RDS (MySQL)','Amazon S3','Amazon CloudFront','Amazon CloudWatch'] as $name)
                    <li class="skill-chip">{{ $name }}</li>
                    @endforeach
                </ul>
            </div>

            {{-- AI-assisted --}}
            <div class="glass-card p-6 sm:p-8 reveal" data-delay="100">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center text-lg flex-shrink-0"
                         style="background:rgba(139,92,246,0.15);border:1px solid rgba(139,92,246,0.25);" aria-hidden="true">🤖</div>
                    <div>
                        <h3 class="text-white font-bold">AI-assisted production work</h3>
                        <p class="text-gray-400 text-xs">On a client codebase</p>
                    </div>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed mb-5">
                    I define the requirement and approach, Claude Code suggests the implementation, and I review and test it.
                </p>
                <ul role="list" class="flex flex-wrap gap-2 mb-5">
                    @foreach(['Symfony','API Platform','Doctrine','Next.js','React','TypeScript','Material UI','Formik','Yup'] as $name)
                    <li class="skill-chip skill-chip-assisted">{{ $name }}</li>
                    @endforeach
                </ul>
                <h4 class="text-gray-400 text-xs uppercase tracking-widest font-semibold mb-3">Architecture I work within</h4>
                <ul role="list" class="flex flex-wrap gap-2">
                    @foreach(['DDD','CQRS','Hexagonal Architecture'] as $name)
                    <li class="skill-chip skill-chip-assisted">{{ $name }}</li>
                    @endforeach
                </ul>
            </div>

            {{-- Tools & environment --}}
            <div class="glass-card p-6 sm:p-8 reveal" data-delay="0">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center text-lg flex-shrink-0"
                         style="background:rgba(34,197,94,0.15);border:1px solid rgba(34,197,94,0.25);" aria-hidden="true">🔧</div>
                    <div>
                        <h3 class="text-white font-bold">Tools &amp; environment</h3>
                        <p class="text-gray-400 text-xs">Workflow and tooling</p>
                    </div>
                </div>
                <ul role="list" class="flex flex-wrap gap-2 mb-5">
                    @foreach(['Git','GitHub','GitLab','Jenkins','Jira','Azure DevOps','PhpStorm','VS Code'] as $name)
                    <li class="skill-chip">{{ $name }}</li>
                    @endforeach
                </ul>
                <h4 class="text-gray-400 text-xs uppercase tracking-widest font-semibold mb-3">Development environment</h4>
                <ul role="list" class="flex flex-wrap gap-2 mb-5">
                    <li class="skill-chip whitespace-normal">Docker (local development environments only)</li>
                </ul>
                <h4 class="text-gray-400 text-xs uppercase tracking-widest font-semibold mb-3">AI coding tools</h4>
                <ul role="list" class="flex flex-wrap gap-2">
                    @foreach(['Claude Code','Cursor','ChatGPT'] as $name)
                    <li class="skill-chip">{{ $name }}</li>
                    @endforeach
                </ul>
            </div>

            {{-- Personal --}}
            <div class="glass-card p-6 sm:p-8 reveal" data-delay="100">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center text-lg flex-shrink-0"
                         style="background:rgba(139,92,246,0.15);border:1px solid rgba(139,92,246,0.25);" aria-hidden="true">🧪</div>
                    <div>
                        <h3 class="text-white font-bold">Personal projects</h3>
                        <p class="text-gray-400 text-xs">Learning and experimentation, not production work</p>
                    </div>
                </div>
                <ul role="list" class="flex flex-wrap gap-2">
                    @foreach(['Python','FastAPI','PostgreSQL with pgvector','Gemini','Retrieval-augmented generation (RAG)'] as $name)
                    <li class="skill-chip whitespace-normal">{{ $name }}</li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</section>
