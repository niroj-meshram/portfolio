{{--
    CASE STUDY: enterprise SaaS client project at Bacancy.
    CONFIDENTIAL: never name the client or product, and never add screenshots, URLs, entity/table/service
    names, data volumes or metrics. Keep AI-assisted application work and hands-on AWS work separate
    (each card carries a text badge saying which it is).
    Do not add a .timeline-track here (app.js only animates the first one on the page).
--}}
<section id="case-study" class="scroll-mt-16 section" style="background-color:#0B1120;">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <header class="section-head reveal">
            <p class="section-eyebrow">Case study · Client project</p>
            <h2 class="section-title">Enterprise SaaS Platform</h2>
            <p class="section-lead">
                Client project at Bacancy · Software Engineer · the only active developer from Bacancy on the project
            </p>
        </header>

        {{-- Overview --}}
        <div class="glass-card p-6 sm:p-8 mb-6 reveal">
            <h3 class="card-title mb-3">Overview</h3>
            <p class="text-gray-300 leading-relaxed max-w-3xl">
                An enterprise SaaS platform built for a Bacancy client. I joined an established codebase whose
                architecture was already in place. My work covers feature delivery within that architecture, production
                troubleshooting and AWS operations.
            </p>
            <p class="text-gray-400 text-sm mt-3">The client and product names are withheld for confidentiality.</p>
        </div>

        {{-- Two kinds of involvement, kept separate --}}
        <div class="grid lg:grid-cols-2 gap-6 mb-6">
            <article class="glass-card p-6 sm:p-8 reveal">
                <p class="badge badge-assisted mb-4">AI-assisted</p>
                <h3 class="card-title mb-3">Application development</h3>
                <p class="text-gray-400 text-sm leading-relaxed mb-5">
                    I work from the business requirement to a technical approach within the existing architecture.
                    Claude Code suggests the implementation; I review the generated code and test the functionality.
                </p>
                <ul role="list" class="flex flex-wrap gap-2" aria-label="AI-assisted technologies">
                    @foreach(['Symfony','API Platform','Doctrine','Next.js','React','TypeScript','Material UI','Formik','Yup'] as $t)
                    <li class="skill-chip skill-chip-assisted">{{ $t }}</li>
                    @endforeach
                </ul>
            </article>

            <article class="glass-card p-6 sm:p-8 reveal" data-delay="80">
                <p class="badge badge-teal mb-4">Hands-on</p>
                <h3 class="card-title mb-3">AWS operations</h3>
                <p class="text-gray-400 text-sm leading-relaxed mb-5">
                    Production troubleshooting, infrastructure investigation, monitoring and application support.
                </p>
                <ul role="list" class="flex flex-wrap gap-2" aria-label="AWS services, hands-on">
                    @foreach(['AWS Lambda','Amazon SQS','Amazon RDS (MySQL)','Amazon S3','Amazon CloudFront','Amazon CloudWatch'] as $t)
                    <li class="skill-chip">{{ $t }}</li>
                    @endforeach
                </ul>
            </article>
        </div>

        <div class="grid lg:grid-cols-2 gap-6 mb-6">
            {{-- Workflow --}}
            <article class="glass-card p-6 sm:p-8 reveal">
                <h3 class="card-title mb-5">How I work on it</h3>
                <ol role="list" class="space-y-4">
                    @foreach([
                        'Understand the business requirement.',
                        'Work out a technical approach that fits the existing architecture.',
                        'Claude Code suggests the implementation.',
                        'I review the generated code and test the functionality.',
                        'In production, I monitor, troubleshoot and investigate on the AWS side hands-on.',
                    ] as $i => $step)
                    <li class="flex items-start gap-3">
                        <span class="w-7 h-7 rounded-full flex items-center justify-center text-xs font-bold text-teal-300 flex-shrink-0"
                              style="background:rgba(20,184,166,0.12);border:1px solid rgba(20,184,166,0.3);" aria-hidden="true">{{ $i + 1 }}</span>
                        <span class="text-gray-300 text-sm leading-relaxed pt-1">{{ $step }}</span>
                    </li>
                    @endforeach
                </ol>
            </article>

            {{-- Platform stack: a component map, deliberately without arrows/data flow --}}
            <article class="glass-card p-6 sm:p-8 reveal" data-delay="80">
                <h3 class="card-title">Platform stack</h3>
                <p class="text-gray-400 text-sm mt-1 mb-5">Existing; I did not design it.</p>
                <dl class="grid sm:grid-cols-2 gap-3">
                    @foreach([
                        ['Backend', 'Symfony · API Platform · Doctrine'],
                        ['Architecture', 'DDD · CQRS · Hexagonal Architecture'],
                        ['Frontend', 'Next.js · React · TypeScript · Material UI · Formik · Yup'],
                        ['Authentication', 'Auth0'],
                        ['Background processing', 'Asynchronous imports and exports'],
                        ['Infrastructure', 'AWS Lambda · SQS · RDS (MySQL) · S3 · CloudFront · CloudWatch'],
                    ] as [$layer, $parts])
                    <div class="panel p-4">
                        <dt class="meta-label mb-1">{{ $layer }}</dt>
                        <dd class="text-gray-200 text-sm leading-relaxed">{{ $parts }}</dd>
                    </div>
                    @endforeach
                </dl>
            </article>
        </div>

        {{-- Production challenge: qualitative only; no root cause, fix, owner or outcome beyond what is confirmed --}}
        <article class="glass-card p-6 sm:p-8 reveal">
            <p class="meta-label mb-2">Production challenge</p>
            <h3 class="card-title mb-5">Large data imports</h3>
            <dl class="grid md:grid-cols-2 gap-6">
                <div>
                    <dt class="text-teal-300 text-sm font-semibold mb-1">The problem</dt>
                    <dd class="text-gray-300 text-sm leading-relaxed">Large data imports were causing request timeouts and memory issues.</dd>
                </div>
                <div>
                    <dt class="text-teal-300 text-sm font-semibold mb-1">How I approached it</dt>
                    <dd class="text-gray-300 text-sm leading-relaxed">I investigated the problem with Claude, and together we identified a solution.</dd>
                </div>
            </dl>
            <p class="text-gray-400 text-sm italic mt-5">Technical details are withheld for confidentiality.</p>
        </article>

    </div>
</section>
