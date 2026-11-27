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

        {{-- Context (replaces the former Overview and Key features blocks) --}}
        <div class="glass-card p-6 sm:p-8 mb-6 reveal">
            <h3 class="card-title mb-3">Context</h3>
            <p class="text-gray-300 leading-relaxed max-w-3xl">
                A multi-tenant platform that housing associations and their contractors use to plan, cost and approve
                long-term maintenance across thousands of rental homes, replacing spreadsheet-based planning. It manages
                property portfolios, multi-year maintenance scenarios, versioned price catalogues with tens of thousands of
                line items, and an approval workflow between contractors and housing associations.
            </p>
            <p class="text-gray-400 text-sm mt-3">The client and product names are withheld for confidentiality.</p>
        </div>

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

        {{-- Two problems I solved: each part uses only details the user supplied. Sentences that depended on
             unanswered questions (how the failures were found, why the geocoding failed silently, the core overview
             query change, trade-offs, whether the backfill has run in production) were left out on purpose:
             don't fill them in without the user's answers. Percentages only, never seconds. --}}
        <div class="mt-10 mb-6">
            <h3 class="group-title mb-5 reveal">Two problems I solved</h3>
            <div class="grid lg:grid-cols-2 gap-6">
                @foreach([
                    [
                        'title' => 'Recovering location data missing for two years',
                        'parts' => [
                            'Problem' => 'The platform\'s map view depends on property coordinates, but 57% of properties had none.',
                            'Investigation' => 'I traced it to the geocoding integration, which had been failing silently for about two years.',
                            'Decision' => 'Instead of a one-off script, I built a resumable backfill, so it can stop and continue safely across a large dataset.',
                            'Result' => 'The backfill can recover 99.8% of the missing locations.',
                        ],
                    ],
                    [
                        'title' => 'Making the heaviest screens fast',
                        'parts' => [
                            'Problem' => 'The project overview slowed down as clients added projects and price items, because the query behind it grew with both. Budget screens were also issuing far more database queries than needed.',
                            'Investigation' => 'The budget screens had N+1 lazy-loading patterns and joins that produced duplicate rows.',
                            'Decision' => 'I added server-side pagination, and on the budget screens replaced lazy loading with eager loading and removed the duplicate-row joins.',
                            'Result' => 'Project-overview load time cut by about 97%; database queries per page down 93%; budget-screen response times down 50%.',
                        ],
                    ],
                ] as $story)
                <article class="glass-card p-6 sm:p-8 reveal" @if(! $loop->first) data-delay="80" @endif>
                    <h4 class="card-title mb-5">{{ $story['title'] }}</h4>
                    <dl class="space-y-4">
                        @foreach($story['parts'] as $label => $text)
                        <div>
                            <dt class="meta-label mb-1">{{ $label }}</dt>
                            <dd class="{{ $label === 'Result' ? 'text-teal-300 font-medium' : 'text-gray-300' }} text-sm leading-relaxed">{{ $text }}</dd>
                        </div>
                        @endforeach
                    </dl>
                </article>
                @endforeach
            </div>
        </div>

        {{-- Other highlights: performance gains as percentages, never seconds (see the note at the top of this file).
             The overview, query-count and location-data items now live in the two stories above. --}}
        <article class="glass-card p-6 sm:p-8 mb-6 reveal">
            <h3 class="card-title mb-5">Other highlights</h3>
            <dl class="grid md:grid-cols-2 gap-x-8 gap-y-6">
                @foreach([
                    ['Faster spreadsheet imports', 'Made processing about 93% faster with a streaming parser that matches the previous output exactly. This fixed imports that were timing out.'],
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
