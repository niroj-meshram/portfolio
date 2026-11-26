{{-- CONTACT: mailto + copy-email only. Never add a form that does not actually deliver messages. No phone number. --}}
<section id="contact" class="scroll-mt-16 py-24 lg:py-32 relative bg-mesh" style="background-color:#0B1120;">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16 reveal">
            <div class="section-label mx-auto">
                <span aria-hidden="true">✉️</span> Contact
            </div>
            <h2 data-title class="text-4xl sm:text-5xl font-extrabold text-white mb-4"
                style="font-family:'Plus Jakarta Sans',sans-serif;">
                Let's <span class="gradient-text">Work Together</span>
            </h2>
            <p class="text-gray-400 text-lg max-w-xl mx-auto">
                Open to full-time remote roles and freelance projects.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-start">

            {{-- Left: Contact Info --}}
            <div class="reveal-left">

                <p class="text-gray-300 text-lg leading-relaxed mb-8">
                    Open to full-time remote roles and freelance projects. If your team needs a
                    <strong class="text-white">backend-focused Full Stack Developer</strong> with PHP/Laravel experience and
                    hands-on AWS production support, email is the best way to reach me.
                </p>

                <ul role="list" class="space-y-4 mb-8">
                    @foreach([
                        ['📧','Email','nirojmeshram@gmail.com','mailto:nirojmeshram@gmail.com',false],
                        ['💼','LinkedIn','linkedin.com/in/nirojmeshram','https://www.linkedin.com/in/nirojmeshram/',true],
                        ['💻','GitHub','github.com/niroj-meshram','https://github.com/niroj-meshram',true],
                        ['📍','Location','Ahmedabad, India · IST (UTC+5:30)',null,false],
                    ] as [$icon,$label,$value,$href,$external])
                    <li class="glass-card p-4 flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center text-xl flex-shrink-0"
                             style="background:rgba(20,184,166,0.1);border:1px solid rgba(20,184,166,0.2);"
                             aria-hidden="true">
                            {{ $icon }}
                        </div>
                        <div class="min-w-0">
                            <p class="text-gray-400 text-xs uppercase tracking-widest font-medium mb-0.5">{{ $label }}</p>
                            @if($href)
                            <a href="{{ $href }}"
                               @if($external) target="_blank" rel="noopener noreferrer" @endif
                               class="text-white font-medium hover:text-teal-400 transition-colors break-words">{{ $value }}</a>
                            @else
                            <p class="text-white font-medium">{{ $value }}</p>
                            @endif
                        </div>
                    </li>
                    @endforeach
                </ul>

                {{-- Availability --}}
                <div class="glass-card p-5 flex items-center gap-4">
                    <span class="avail-dot flex-shrink-0"></span>
                    <div>
                        <p class="text-white font-semibold">Available for Work</p>
                        <p class="text-gray-400 text-sm">Open to full-time remote roles &amp; freelance projects</p>
                    </div>
                </div>
            </div>

            {{-- Right: Email actions (no form — messages go straight to the inbox) --}}
            <div class="reveal-right" x-data="copyEmail('nirojmeshram@gmail.com')">
                <div class="glass-card p-6 sm:p-8">
                    <h3 class="text-white font-bold text-xl mb-2">Send me an email</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6">
                        Share a few details about the role or project.
                    </p>

                    <p class="text-gray-400 text-xs uppercase tracking-widest font-medium mb-1">Email address</p>
                    <p class="text-white font-medium text-lg mb-6 break-all select-all">nirojmeshram@gmail.com</p>

                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="mailto:nirojmeshram@gmail.com" class="btn-primary justify-center">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            Email Me
                        </a>
                        <button type="button" @click="copy()" class="btn-secondary justify-center">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                            </svg>
                            <span x-text="copied ? 'Copied!' : 'Copy Email'">Copy Email</span>
                        </button>
                    </div>

                    {{-- Announces the copy result to screen readers; also shown visually on failure --}}
                    <p class="text-sm mt-4 min-h-[1.25rem]" aria-live="polite"
                       :class="failed ? 'text-amber-300' : 'text-teal-400'"
                       x-text="status"></p>
                </div>
            </div>
        </div>
    </div>
</section>
