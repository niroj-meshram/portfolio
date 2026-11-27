{{--
    CASE STUDY: enterprise SaaS client project at Bacancy (content supplied by the user, 2026-11-26).
    CONFIDENTIAL: never name the client or product, and never add screenshots, URLs or entity/table/service names.
    FIGURES: user-approved for publication (2026-11-26). Performance gains are shown as percentages, never as
    seconds (user decision). Security work is described by scope, never by the specific vulnerabilities found.
    STACK: Laravel backend, React/TypeScript frontend, AWS (user-confirmed; an earlier Symfony record
    was wrong, so never mention Symfony). Never mention Next.js (user decision). Filament is NOT part of this platform: it belongs to the separate
    Laravel/Filament workstream in the experience section.
    Do not add a .timeline-track here (app.js only animates the first one on the page).
--}}
<section id="case-study" class="scroll-mt-16 section" style="background-color:#0B1120;">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <header class="section-head reveal">
            <p class="section-eyebrow">Case study · Client project</p>
            <h2 class="section-title">Enterprise SaaS Platform</h2>
            <p class="section-lead">
                Long-term maintenance planning for housing associations · Client project at Bacancy · Sole developer
            </p>
        </header>

        {{-- Overview --}}
        <div class="glass-card p-6 sm:p-8 mb-6 reveal">
            <h3 class="card-title mb-3">Overview</h3>
            <p class="text-gray-300 leading-relaxed max-w-3xl">
                A multi-tenant web platform that housing associations and their contractors use to plan, cost and approve
                long-term maintenance across thousands of rental homes. It replaces spreadsheet-based planning: users manage
                their property portfolios in one place, build maintenance scenarios over a multi-year horizon, and turn
                them into approved budgets with full cost breakdowns.
            </p>
            <p class="text-gray-400 text-sm mt-3">The client and product names are withheld for confidentiality.</p>
        </div>

        {{-- Key features --}}
        <article class="glass-card p-6 sm:p-8 mb-6 reveal">
            <h3 class="card-title mb-5">Key features</h3>
            <dl class="grid sm:grid-cols-2 lg:grid-cols-3 gap-3">
                @foreach([
                    ['Portfolio management', 'Building complexes and individual rental units, with property details, energy labels, photos and an interactive map view.'],
                    ['Scenario planning', 'Multiple maintenance scenarios per project, with yearly cost projections, inflation and indexation, cost cycles, and comparisons by theme, building element and maintenance type.'],
                    ['Price catalogues', 'Versioned unit-price lists with tens of thousands of line items, VAT handling and configurable surcharge matrices that calculate overhead costs.'],
                    ['Approval workflow', 'Role-based collaboration between contractors and housing associations. Scenarios move through review phases, and price changes are flagged for approval.'],
                    ['Reporting and exports', 'Excel and PDF reports, production-plan exports and a nightly business-intelligence pipeline for management reporting.'],
                    ['Bulk data import', 'Large spreadsheet imports for units, prices and scenarios, validated before anything is saved.'],
                ] as [$feature, $text])
                <div class="panel p-4">
                    <dt class="text-white font-semibold text-sm mb-1">{{ $feature }}</dt>
                    <dd class="text-gray-400 text-sm leading-relaxed">{{ $text }}</dd>
                </div>
                @endforeach
            </dl>
        </article>

        <div class="grid lg:grid-cols-2 gap-6 mb-6">
            {{-- My role --}}
            <article class="glass-card p-6 sm:p-8 reveal">
                <h3 class="card-title mb-3">My role</h3>
                <p class="text-gray-300 text-sm leading-relaxed mb-5">
                    I'm the sole developer, responsible for the full stack, performance, data integrity, security and
                    cloud infrastructure: features across the Laravel backend and the React and TypeScript frontend, and
                    the platform's AWS production operations.
                </p>
                <p class="meta-label mb-3">Technologies</p>
                <ul role="list" class="flex flex-wrap gap-2" aria-label="Technologies I work with on this platform">
                    @foreach(['PHP','Laravel','React','TypeScript','JavaScript','MySQL','AWS'] as $t)
                    <li class="skill-chip">{{ $t }}</li>
                    @endforeach
                </ul>
            </article>

            {{-- Platform context: facts about the platform, not a skills list --}}
            <article class="glass-card p-6 sm:p-8 reveal" data-delay="80">
                <h3 class="card-title mb-5">Platform stack</h3>
                <dl class="grid sm:grid-cols-2 gap-3">
                    @foreach([
                        ['Backend', 'PHP · Laravel'],
                        ['Frontend', 'React · TypeScript · Material UI · Formik · Yup'],
                        ['Authentication', 'Auth0'],
                        ['Background processing', 'Asynchronous imports and exports'],
                        ['Infrastructure', 'AWS Lambda · SQS · RDS (MySQL) · S3 · CloudFront · CloudWatch'],
                    ] as [$layer, $parts])
                    {{-- Five items: the last one spans both columns so the grid doesn't end with a gap --}}
                    <div class="panel p-4 {{ $loop->last ? 'sm:col-span-2' : '' }}">
                        <dt class="meta-label mb-1">{{ $layer }}</dt>
                        <dd class="text-gray-200 text-sm leading-relaxed">{{ $parts }}</dd>
                    </div>
                    @endforeach
                </dl>
            </article>
        </div>

        {{-- Highlights: performance gains as percentages, never seconds (see the note at the top of this file) --}}
        <article class="glass-card p-6 sm:p-8 mb-6 reveal">
            <h3 class="card-title mb-5">Highlights</h3>
            <dl class="grid md:grid-cols-2 gap-x-8 gap-y-6">
                @foreach([
                    ['Faster project overview', 'Cut load time by about 97% by reworking a query that grew with the number of projects and price items, and added server-side pagination.'],
                    ['Faster spreadsheet imports', 'Made processing about 93% faster with a streaming parser that matches the previous output exactly. This fixed imports that were timing out.'],
                    ['Fewer database queries', 'Reduced queries per page by 93% and cut response times on budget screens by 50% by removing duplicate-row joins and N+1 lazy-loading patterns.'],
                    ['Location data recovery', 'Found a geocoding integration that had been failing silently for about two years and left 57% of properties without coordinates. Built a resumable backfill that can recover 99.8% of the missing locations.'],
                    ['Calculation correctness', 'Found and fixed edge cases in the cost engine, including VAT splits, surcharge bases and missing cycle factors that were quietly zeroing budget lines.'],
                    ['Security review', 'Ran a full security review covering endpoint protection, authorisation and cross-site scripting, and prioritised the fixes.'],
                    ['Infrastructure', 'Upgraded the runtime platform before its end of life with no downtime, and cut monitoring costs by consolidating redundant alerts.'],
                    ['Client data operations', 'Carried out large data corrections for clients, such as bulk updates of thousands of maintenance lines, with a dry run first and a full audit trail for rollback.'],
                ] as [$title, $text])
                <div>
                    <dt class="text-teal-300 text-sm font-semibold mb-1">{{ $title }}</dt>
                    <dd class="text-gray-300 text-sm leading-relaxed">{{ $text }}</dd>
                </div>
                @endforeach
            </dl>
        </article>

        {{-- Impact --}}
        <div class="glass-card p-6 sm:p-8 reveal">
            <h3 class="card-title mb-3">Impact</h3>
            <p class="text-gray-300 leading-relaxed max-w-3xl">
                Housing associations get one source of truth for long-term maintenance budgets, with faster screens,
                reliable calculations and a clear approval process between them and their contractors.
            </p>
        </div>

    </div>
</section>
