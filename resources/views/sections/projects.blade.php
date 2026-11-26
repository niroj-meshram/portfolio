{{--
    PROJECTS: the four Sofmen Technologies projects use résumé wording only (no added responsibilities,
    outcomes or badges). The RAG card is a personal prototype; its source is not published, so no repo link.
--}}
<section id="projects" class="scroll-mt-16 py-24 lg:py-32 bg-mesh" style="background-color:#0B1120;">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16 reveal">
            <div class="section-label mx-auto">
                <span aria-hidden="true">🚀</span> Projects
            </div>
            <h2 data-title class="text-4xl sm:text-5xl font-extrabold text-white mb-4"
                style="font-family:'Plus Jakarta Sans',sans-serif;">
                Selected <span class="gradient-text">Projects</span>
            </h2>
            <p class="text-gray-400 text-lg max-w-xl mx-auto">
                Projects from my time at Sofmen Technologies, plus a personal prototype.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-8 tilt-grid">
            @foreach([
                [
                    'name' => 'FranApp', 'subtitle' => 'Franchise billing and reporting admin platform', 'icon' => '📊',
                    'bar' => '#14B8A6,#3B82F6', 'accent' => 'text-teal-400',
                    'points' => [
                        'Managed the admin platform for franchise billing, reporting, and franchisee job management across multiple business units.',
                        'Integrated Stripe subscription-based payment workflows for premium service access and recurring billing management.',
                        'Designed and developed KPI tracking and reporting modules for monitoring franchisee performance metrics.',
                        'Collaborated directly with clients for requirement gathering, product demonstrations, and feature implementation.',
                    ],
                    'stack' => ['PHP','Laravel','jQuery','DataTables','Stripe','Ajax'],
                ],
                [
                    'name' => 'Everlease', 'subtitle' => 'Vehicle rental platform', 'icon' => '🚗',
                    'bar' => '#3B82F6,#8B5CF6', 'accent' => 'text-blue-400',
                    'points' => [
                        'Developed a vehicle rental platform with role-based access control, rental listing management, and inventory-based workflows.',
                        'Implemented real-time notifications and chat functionality to improve communication between renters and dealers.',
                        'Built vehicle search and filtering features based on credit score, mileage, drivetrain, and pricing criteria.',
                    ],
                    'stack' => ['PHP','Laravel','Vue.js','MySQL'],
                ],
                [
                    'name' => 'TheWayApp', 'subtitle' => 'Admin panel and mobile app backend', 'icon' => '🎬',
                    'bar' => '#8B5CF6,#14B8A6', 'accent' => 'text-purple-400',
                    'points' => [
                        'Developed and maintained the admin panel for managing users, subscriptions, authentication, and video content workflows.',
                        'Implemented backend APIs and subscription management functionality for Android and iOS applications.',
                        'Managed in-app purchase and subscription workflows using Laravel-based backend services.',
                    ],
                    'stack' => ['PHP','Laravel','Tailwind CSS','REST APIs'],
                ],
                [
                    'name' => 'Wallaby Windows', 'subtitle' => 'Franchise locator', 'icon' => '📍',
                    'bar' => '#14B8A6,#8B5CF6', 'accent' => 'text-teal-400',
                    'points' => [
                        'Developed franchise locator functionality using ZIP code-based search and interactive Google Maps integration.',
                        'Integrated Google Places API for dynamic autofill of address-related fields to streamline booking workflows.',
                        'Implemented custom map marker functionality for franchise microsites and location discovery features.',
                    ],
                    'stack' => ['PHP','Laravel','Google Maps API','Google Places API'],
                ],
            ] as $i => $p)
            <article class="project-card reveal" data-tilt data-delay="{{ $i % 2 ? 150 : 0 }}">
                <div class="h-2 w-full" style="background:linear-gradient(90deg,{{ $p['bar'] }});" aria-hidden="true"></div>
                <div class="p-6 sm:p-8">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="project-icon-wrap w-10 h-10 rounded-xl flex items-center justify-center text-xl transition-all duration-300"
                             style="background:rgba(31,41,55,0.8);border:1px solid rgba(55,65,81,0.5);" aria-hidden="true">{{ $p['icon'] }}</div>
                        <span class="badge badge-purple text-xs">Sofmen Technologies</span>
                    </div>
                    <h3 class="text-white text-xl font-bold">{{ $p['name'] }}</h3>
                    <p class="{{ $p['accent'] }} text-sm mt-0.5 mb-5">{{ $p['subtitle'] }}</p>
                    <ul role="list" class="space-y-2 mb-6">
                        @foreach($p['points'] as $point)
                        <li class="flex items-start gap-2.5 text-gray-400 text-sm">
                            <svg class="w-4 h-4 {{ $p['accent'] }} flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <ul role="list" class="flex flex-wrap gap-2 pt-4 border-t border-gray-700/50" aria-label="{{ $p['name'] }} technologies">
                        @foreach($p['stack'] as $t)
                        <li class="skill-chip text-xs">{{ $t }}</li>
                        @endforeach
                    </ul>
                </div>
            </article>
            @endforeach

            {{-- Personal prototype: clearly labelled, not production or commercial work --}}
            <article class="project-card reveal lg:col-span-2" data-delay="0">
                <div class="h-2 w-full" style="background:linear-gradient(90deg,#8B5CF6,#3B82F6);" aria-hidden="true"></div>
                <div class="p-6 sm:p-8">
                    <div class="flex flex-wrap items-center gap-2 mb-3">
                        <div class="project-icon-wrap w-10 h-10 rounded-xl flex items-center justify-center text-xl transition-all duration-300"
                             style="background:rgba(139,92,246,0.12);border:1px solid rgba(139,92,246,0.25);" aria-hidden="true">🧪</div>
                        <span class="badge badge-blue text-xs">Personal project</span>
                        <span class="badge badge-blue text-xs">Working prototype</span>
                    </div>
                    <h3 class="text-white text-xl font-bold">Employee Handbook RAG</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mt-3 mb-5 max-w-3xl">
                        A working prototype that applies retrieval-augmented generation to an employee handbook, built with
                        FastAPI, PostgreSQL with pgvector for vector search, and Gemini for generation. A personal learning
                        project, not commercial or production work. The source isn't published.
                    </p>
                    <ul role="list" class="flex flex-wrap gap-2 pt-4 border-t border-gray-700/50" aria-label="Employee Handbook RAG technologies">
                        @foreach(['Python','FastAPI','PostgreSQL','pgvector','Gemini'] as $t)
                        <li class="skill-chip text-xs">{{ $t }}</li>
                        @endforeach
                    </ul>
                </div>
            </article>
        </div>
    </div>
</section>
