{{-- CONTACT: mailto + copy-email only. Never add a form that does not actually deliver messages. No phone number.
     Grid children carry min-w-0 and the address uses break-all, so the email can never widen the page at 320px. --}}
<section id="contact" class="scroll-mt-16 section" style="background-color:#0B1120;">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <header class="section-head reveal">
            <h2 class="section-title">Let's Work Together</h2>
            <p class="section-lead">
                Open to full-time remote roles and freelance projects. If your team needs a
                <strong class="text-gray-200 font-semibold">backend-focused Full Stack Developer</strong> with PHP/Laravel
                experience and hands-on AWS production support, email is the best way to reach me.
            </p>
        </header>

        <div class="grid lg:grid-cols-5 gap-6 items-start">

            {{-- Email actions --}}
            <div class="lg:col-span-3 min-w-0 glass-card p-6 sm:p-8 reveal" x-data="copyEmail('nirojmeshram@gmail.com')">
                <h3 class="card-title mb-2">Send me an email</h3>
                <p class="text-gray-400 text-sm leading-relaxed mb-6">Share a few details about the role or project.</p>

                <p class="meta-label mb-1.5">Email address</p>
                <p class="text-white font-semibold text-lg sm:text-xl mb-6 break-all select-all">nirojmeshram@gmail.com</p>

                <div class="grid sm:flex gap-3">
                    <a href="mailto:nirojmeshram@gmail.com" class="btn-primary">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        Email Me
                    </a>
                    <button type="button" @click="copy()" class="btn-secondary">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                        </svg>
                        <span x-text="copied ? 'Copied!' : 'Copy Email'">Copy Email</span>
                    </button>
                </div>

                {{-- Announces the copy result to screen readers; also shown visually on failure --}}
                <p class="text-sm mt-4 min-h-[1.25rem]" aria-live="polite"
                   :class="failed ? 'text-amber-300' : 'text-teal-300'"
                   x-text="status"></p>
            </div>

            {{-- Other channels --}}
            <div class="lg:col-span-2 min-w-0 glass-card p-2 reveal" data-delay="80">
                <ul role="list" class="divide-y divide-gray-700/50">
                    @foreach([
                        ['linkedin', 'LinkedIn', 'linkedin.com/in/nirojmeshram', 'https://www.linkedin.com/in/nirojmeshram/'],
                        ['github', 'GitHub', 'github.com/niroj-meshram', 'https://github.com/niroj-meshram'],
                        ['resume', 'Résumé', 'Download PDF', asset('resume/Niroj_Resume.pdf')],
                        ['location', 'Location', 'Ahmedabad, India · IST (UTC+5:30)', null],
                    ] as [$icon, $label, $value, $href])
                    <li>
                        @if($href)
                        <a href="{{ $href }}"
                           @if($icon === 'resume') download @else target="_blank" rel="noopener noreferrer" @endif
                           class="group flex items-center gap-4 p-4 rounded-xl hover:bg-white/5 transition-colors">
                        @else
                        <div class="flex items-center gap-4 p-4">
                        @endif
                            <span class="w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0 text-gray-300"
                                  style="background:rgba(17,24,39,0.7);border:1px solid rgba(55,65,81,0.6);" aria-hidden="true">
                                @switch($icon)
                                    @case('linkedin')
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                                        @break
                                    @case('github')
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/></svg>
                                        @break
                                    @case('resume')
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                        @break
                                    @default
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                @endswitch
                            </span>
                            <span class="min-w-0">
                                <span class="block meta-label mb-0.5">{{ $label }}</span>
                                <span class="block text-gray-100 font-medium break-words {{ $href ? 'group-hover:text-teal-300 transition-colors' : '' }}">{{ $value }}</span>
                            </span>
                        @if($href)
                        </a>
                        @else
                        </div>
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
