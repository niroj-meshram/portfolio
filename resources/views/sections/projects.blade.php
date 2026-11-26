{{--
    PROJECTS: the four Sofmen Technologies projects use résumé wording only (no added responsibilities,
    outcomes or badges). The RAG card is a personal prototype; its source is not published, so no repo link.
    Cards are flex columns so the stack row sits at the bottom of equal-height cards.
--}}
<section id="projects" class="scroll-mt-16 section" style="background-color:#0B1120;">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <header class="section-head reveal">
            <h2 class="section-title">Selected Projects</h2>
            <p class="section-lead">Projects from my time at Sofmen Technologies, plus a personal prototype.</p>
        </header>

        <div class="grid lg:grid-cols-2 gap-6">
            @foreach([
                [
                    'name' => 'FranApp', 'subtitle' => 'Franchise billing and reporting admin platform',
                    'points' => [
                        'Managed the admin platform for franchise billing, reporting, and franchisee job management across multiple business units.',
                        'Integrated Stripe subscription-based payment workflows for premium service access and recurring billing management.',
                        'Designed and developed KPI tracking and reporting modules for monitoring franchisee performance metrics.',
                        'Collaborated directly with clients for requirement gathering, product demonstrations, and feature implementation.',
                    ],
                    'stack' => ['PHP','Laravel','jQuery','DataTables','Stripe','Ajax'],
                ],
                [
                    'name' => 'Everlease', 'subtitle' => 'Vehicle rental platform',
                    'points' => [
                        'Developed a vehicle rental platform with role-based access control, rental listing management, and inventory-based workflows.',
                        'Implemented real-time notifications and chat functionality to improve communication between renters and dealers.',
                        'Built vehicle search and filtering features based on credit score, mileage, drivetrain, and pricing criteria.',
                    ],
                    'stack' => ['PHP','Laravel','Vue.js','MySQL'],
                ],
                [
                    'name' => 'TheWayApp', 'subtitle' => 'Admin panel and mobile app backend',
                    'points' => [
                        'Developed and maintained the admin panel for managing users, subscriptions, authentication, and video content workflows.',
                        'Implemented backend APIs and subscription management functionality for Android and iOS applications.',
                        'Managed in-app purchase and subscription workflows using Laravel-based backend services.',
                    ],
                    'stack' => ['PHP','Laravel','Tailwind CSS','REST APIs'],
                ],
                [
                    'name' => 'Wallaby Windows', 'subtitle' => 'Franchise locator',
                    'points' => [
                        'Developed franchise locator functionality using ZIP code-based search and interactive Google Maps integration.',
                        'Integrated Google Places API for dynamic autofill of address-related fields to streamline booking workflows.',
                        'Implemented custom map marker functionality for franchise microsites and location discovery features.',
                    ],
                    'stack' => ['PHP','Laravel','Google Maps API','Google Places API'],
                ],
            ] as $i => $p)
            <article class="project-card p-6 sm:p-8 reveal" data-delay="{{ $i % 2 ? 80 : 0 }}">
                <p class="meta-label mb-2">Sofmen Technologies</p>
                <h3 class="card-title">{{ $p['name'] }}</h3>
                <p class="text-gray-300 text-sm mt-1 mb-5">{{ $p['subtitle'] }}</p>
                <ul role="list" class="bullets space-y-2.5 text-gray-400 text-sm leading-relaxed mb-6">
                    @foreach($p['points'] as $point)
                    <li>{{ $point }}</li>
                    @endforeach
                </ul>
                <ul role="list" class="flex flex-wrap gap-2 pt-5 mt-auto border-t border-gray-700/50" aria-label="{{ $p['name'] }} technologies">
                    @foreach($p['stack'] as $t)
                    <li class="skill-chip">{{ $t }}</li>
                    @endforeach
                </ul>
            </article>
            @endforeach

            {{-- Personal prototype: clearly labelled, not production or commercial work --}}
            <article class="project-card p-6 sm:p-8 lg:col-span-2 reveal">
                <div class="flex flex-wrap items-center gap-2 mb-3">
                    <span class="badge badge-neutral">Personal project</span>
                    <span class="badge badge-neutral">Working prototype</span>
                </div>
                <h3 class="card-title">Employee Handbook RAG</h3>
                <p class="text-gray-400 text-sm leading-relaxed mt-3 mb-6 max-w-3xl">
                    A working prototype that applies retrieval-augmented generation to an employee handbook, built with
                    FastAPI, PostgreSQL with pgvector for vector search, and Gemini for generation. A personal learning
                    project, not commercial or production work. The source isn't published.
                </p>
                <ul role="list" class="flex flex-wrap gap-2 pt-5 mt-auto border-t border-gray-700/50" aria-label="Employee Handbook RAG technologies">
                    @foreach(['Python','FastAPI','PostgreSQL','pgvector','Gemini'] as $t)
                    <li class="skill-chip">{{ $t }}</li>
                    @endforeach
                </ul>
            </article>
        </div>
    </div>
</section>
