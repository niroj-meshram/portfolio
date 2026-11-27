{{--
    PROJECTS: the four Sofmen Technologies projects use résumé wording only (no added responsibilities,
    outcomes or badges). Personal projects follow under their own heading, separate from professional work:
    - Oopsie (user-supplied, 2026-11-27): every claim is checked against the Oopsie README and source.
      It is a Chrome extension, so there is no live demo link. The repo has no licence file, so don't call it
      "open source". Testing Library is installed there but unused, so don't list it. Don't publish a test count.
      The AI-workflow block is a user-requested exception to the "AI wording only in About" rule, scoped to Oopsie.
    - The RAG card is a personal prototype; its source is not published, so no repo link.
    Cards are flex columns so the stack row sits at the bottom of equal-height cards.
--}}
<section id="projects" class="scroll-mt-16 section" style="background-color:#0B1120;">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <header class="section-head reveal">
            <h2 class="section-title">Selected Projects</h2>
            <p class="section-lead">Client projects from my time at Sofmen Technologies, and personal projects I built outside work.</p>
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
        </div>

        {{-- ─── Personal projects: built outside work, kept separate from client and employer work ─── --}}
        <div class="mt-16 lg:mt-20 pt-12 lg:pt-16 border-t border-gray-700/50">
            <header class="mb-8 max-w-2xl reveal">
                <h3 class="group-title">Personal projects</h3>
                <p class="text-gray-400 leading-relaxed mt-2">Built on my own time, separate from client and employer work.</p>
            </header>

            {{-- Oopsie: flagship personal project --}}
            <article id="oopsie" class="project-card scroll-mt-16 p-6 sm:p-8 lg:p-10 mb-6 reveal" aria-labelledby="oopsie-title">

                <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-6">
                    <div class="min-w-0 max-w-3xl">
                        <div class="flex flex-wrap items-center gap-2 mb-4">
                            <span class="badge badge-neutral">Personal project</span>
                            <span class="badge badge-neutral">Chrome extension</span>
                        </div>
                        <h4 id="oopsie-title" class="font-heading text-2xl sm:text-3xl font-extrabold tracking-tight text-white">Oopsie</h4>
                        <p class="text-teal-300 font-medium mt-1">AI-Assisted Personal Productivity Chrome Extension</p>
                        <p class="text-gray-300 leading-relaxed mt-4">
                            A privacy-first Chrome productivity extension I built to improve my daily office workflow, combining
                            natural-language task management, recurring reminders, focus sessions, time tracking and AI-powered
                            timesheet generation.
                        </p>
                    </div>
                    <a href="https://github.com/niroj-meshram/oopsie" target="_blank" rel="noopener noreferrer" class="btn-secondary self-start shrink-0">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/>
                        </svg>
                        Source on GitHub<span class="sr-only"> (opens in a new tab)</span>
                    </a>
                </div>

                {{-- Why I built it + the focus feature, which is the core reason for the project --}}
                <div class="grid lg:grid-cols-5 gap-6 mt-8 lg:mt-10">
                    <div class="lg:col-span-3 min-w-0">
                        <h5 class="meta-label mb-3">Why I built it</h5>
                        <div class="space-y-4 text-gray-300 text-sm sm:text-base leading-relaxed">
                            <p>
                                Oopsie started as a way to solve problems in my everyday office workflow. I wanted one place to
                                manage tasks, remember follow-ups, track working hours, stay focused and prepare timesheets,
                                without switching between different tools.
                            </p>
                            <p>
                                I built it as a lightweight Chrome extension with React, TypeScript and Vite. All data stays in
                                the browser, with no account, server or analytics. The only network request is the optional
                                timesheet call to Google Gemini, made with the user's own API key.
                            </p>
                        </div>
                        <p class="meta-label mt-8 mb-3">Technologies</p>
                        <ul role="list" class="flex flex-wrap gap-2" aria-label="Oopsie technologies">
                            @foreach(['React 18','TypeScript','Vite','Chrome Extension APIs','Manifest V3','Google Gemini API','Vitest','ESLint'] as $t)
                            <li class="skill-chip">{{ $t }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <section class="panel-accent lg:col-span-2 min-w-0 p-5 sm:p-6" aria-labelledby="oopsie-focus">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="icon-tile">@include('partials.icon', ['name' => 'timer'])</span>
                            <h5 id="oopsie-focus" class="card-title text-lg">Focus Sessions &amp; Productivity Timer</h5>
                        </div>
                        <p class="text-gray-300 text-sm leading-relaxed mb-4">
                            A Pomodoro-style focus timer for uninterrupted time on important work, and a core reason I built
                            Oopsie. The countdown runs independently of the popup, and the minutes left show on the Chrome
                            toolbar badge.
                        </p>
                        <ul role="list" class="flex flex-wrap gap-2 mb-4" aria-label="Focus session lengths">
                            @foreach(['15 min','25 min','45 min','60 min','Custom, up to 4 h'] as $length)
                            <li class="skill-chip">{{ $length }}</li>
                            @endforeach
                        </ul>
                        <ul role="list" class="bullets space-y-2 text-gray-400 text-sm leading-relaxed">
                            <li>Minutes left on the toolbar badge, updated every minute</li>
                            <li>An audio chime and a notification when the session ends, even with the popup closed</li>
                            <li>+5 min to extend a running session</li>
                        </ul>
                    </section>
                </div>

                {{-- Key features: seven items in two columns; the last spans both so the grid ends cleanly --}}
                <h5 class="meta-label mt-10 mb-4">Key features</h5>
                <dl class="grid md:grid-cols-2 gap-3">
                    @foreach([
                        ['list-checks', 'Natural-language task management', 'Type "Call the client Friday at 3 PM #work !high" and Oopsie picks out the date, time, label and priority, and creates a linked reminder. Each detected value is previewed before saving and can be undone on its own.'],
                        ['bell-ring', 'Recurring reminders', 'One-time, daily, weekly and monthly reminders with desktop notifications and Snooze and Mark done actions. They keep working when the popup is closed.'],
                        ['clock', 'Work time tracking', 'Tasks move between Pending, Active and Completed. Each active period is recorded as a separate work session, and time from sessions that cross midnight is split between the two days.'],
                        ['sparkles', 'AI-powered timesheet generator', 'Builds a daily summary from tracked work, then uses Google Gemini to rewrite it as client-ready timesheet entries. It can match the style of example timesheets, and falls back to other Gemini models when one is busy, rate-limited or slow.'],
                        ['calendar-check', 'Productivity dashboard', 'Today, Upcoming, Overdue, Completed and Reminders views, with search, filters, labels and a weekly productivity summary.'],
                        ['bookmark-plus', 'Quick capture from any web page', 'Save the current page, a link or selected text as a task from the right-click menu, or save the page with a keyboard shortcut.'],
                        ['file-json', 'Data portability', 'JSON export and import, validated before anything changes, with Merge and Replace modes. Unsafe links such as javascript: URLs are stripped on import.'],
                    ] as [$icon, $feature, $text])
                    <div class="panel min-w-0 p-4 sm:p-5 {{ $loop->last ? 'md:col-span-2' : '' }}">
                        <dt class="flex items-center gap-3 text-white font-semibold text-sm mb-3">
                            <span class="icon-tile">@include('partials.icon', ['name' => $icon])</span>
                            {{ $feature }}
                        </dt>
                        <dd class="text-gray-400 text-sm leading-relaxed">{{ $text }}</dd>
                    </div>
                    @endforeach
                </dl>

                <div class="grid lg:grid-cols-2 gap-6 mt-6">
                    {{-- Technical highlights --}}
                    <section class="panel min-w-0 p-5 sm:p-6" aria-labelledby="oopsie-tech">
                        <h5 id="oopsie-tech" class="card-title text-lg mb-5">Technical highlights</h5>
                        <ul role="list" class="bullets space-y-2.5 text-gray-400 text-sm leading-relaxed">
                            @foreach([
                                'An idempotent service-worker reconcile keeps alarms, notifications and the toolbar badge in sync with storage.',
                                'Reminders use local wall-clock times and calendar-based recurrence, so they handle daylight-saving changes and month-end dates.',
                                'No duplicate alerts after service-worker restarts, and reminders missed while Chrome was closed are recovered with a single alert.',
                                'Local-first chrome.storage with one key per task and reminder, so the popup, dashboard and worker never overwrite each other.',
                                'Manifest V3 with minimal permissions (no tabs, no remote code) and an offscreen document for audio.',
                                'Strict TypeScript, ESLint and Vitest, with tests for DST transitions, restarts and concurrent edits.',
                            ] as $point)
                            <li>{{ $point }}</li>
                            @endforeach
                        </ul>
                    </section>

                    {{-- AI-assisted workflow: AI as an accelerator; Niroj owns requirements, decisions, review and validation --}}
                    <section class="panel min-w-0 p-5 sm:p-6" aria-labelledby="oopsie-ai">
                        <h5 id="oopsie-ai" class="card-title text-lg mb-3">Built with an AI-Assisted Engineering Workflow</h5>
                        <p class="text-gray-300 text-sm leading-relaxed mb-5">
                            I used Claude Code throughout the development lifecycle, for planning, implementation, debugging,
                            exploring technical solutions and testing. It sped up the work; the engineering judgement stayed
                            with me.
                        </p>
                        <p class="text-teal-300 text-sm font-semibold mb-2">Where AI helped</p>
                        <ul role="list" class="bullets space-y-2 text-gray-400 text-sm leading-relaxed mb-5">
                            <li>Turning product ideas into implementation plans</li>
                            <li>Generating and refining application components</li>
                            <li>Exploring the scheduling and recurrence logic</li>
                            <li>Investigating bugs and edge cases</li>
                            <li>Improving code quality and test coverage</li>
                            <li>Integrating Google Gemini for timesheet generation</li>
                        </ul>
                        <p class="text-teal-300 text-sm font-semibold mb-2">What I owned</p>
                        <ul role="list" class="bullets space-y-2 text-gray-400 text-sm leading-relaxed">
                            <li>The product requirements and scope</li>
                            <li>The implementation direction and technical decisions</li>
                            <li>Code review, testing and validation</li>
                        </ul>
                    </section>
                </div>
            </article>

            {{-- Personal prototype: clearly labelled, not production or commercial work --}}
            <article class="project-card p-6 sm:p-8 reveal">
                <div class="flex flex-wrap items-center gap-2 mb-3">
                    <span class="badge badge-neutral">Personal project</span>
                    <span class="badge badge-neutral">Working prototype</span>
                </div>
                <h4 class="card-title">Employee Handbook RAG</h4>
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
