<nav x-data="navbar()"
     :class="scrolled ? 'nav-scrolled' : 'bg-transparent'"
     class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-18">

            {{-- Logo --}}
            <a @click.prevent="scrollTo('hero')" href="#hero"
               class="flex items-center gap-2.5 group cursor-pointer select-none">
                <div class="w-9 h-9 rounded-lg flex items-center justify-center font-bold text-sm text-white transition-all duration-300 group-hover:scale-105"
                     style="background:linear-gradient(135deg,#14B8A6,#3B82F6);box-shadow:0 0 18px rgba(20,184,166,0.4);">
                    NM
                </div>
                <span class="font-semibold text-white text-sm hidden sm:block">
                    Niroj<span class="gradient-text">.</span>dev
                </span>
            </a>

            {{-- Desktop Nav --}}
            <div class="hidden md:flex items-center gap-6">
                @foreach ([['hero','Home'],['about','About'],['experience','Experience'],['skills','Skills'],['projects','Projects'],['education','Education'],['contact','Contact']] as [$id,$label])
                <a @click.prevent="scrollTo('{{ $id }}')"
                   href="#{{ $id }}"
                   :class="activeSection === '{{ $id }}' ? 'active' : ''"
                   class="nav-link">{{ $label }}</a>
                @endforeach
            </div>

            {{-- Resume + Mobile Toggle --}}
            <div class="flex items-center gap-3">
                <a href="{{ asset('resume/Niroj_Resume.pdf') }}" download
                   class="hidden sm:inline-flex btn-primary text-sm px-4 py-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    Resume
                </a>

                {{-- Mobile hamburger --}}
                <button @click="mobileOpen = !mobileOpen"
                        class="md:hidden flex flex-col gap-1.5 p-2 rounded-lg transition-colors hover:bg-white/5"
                        aria-label="Toggle menu">
                    <span :class="mobileOpen ? 'rotate-45 translate-y-2' : ''"
                          class="block w-5 h-0.5 bg-gray-300 transition-all duration-200 origin-center rounded"></span>
                    <span :class="mobileOpen ? 'opacity-0 scale-x-0' : ''"
                          class="block w-5 h-0.5 bg-gray-300 transition-all duration-200 rounded"></span>
                    <span :class="mobileOpen ? '-rotate-45 -translate-y-2' : ''"
                          class="block w-5 h-0.5 bg-gray-300 transition-all duration-200 origin-center rounded"></span>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div x-show="mobileOpen"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="md:hidden glass border-t border-gray-800/50"
         style="display:none;">
        <div class="max-w-6xl mx-auto px-4 py-4 flex flex-col gap-1">
            @foreach ([['hero','Home'],['about','About'],['experience','Experience'],['skills','Skills'],['projects','Projects'],['education','Education'],['contact','Contact']] as [$id,$label])
            <a @click.prevent="scrollTo('{{ $id }}')"
               href="#{{ $id }}"
               class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-300 hover:text-white hover:bg-white/5 transition-colors text-sm font-medium">
                {{ $label }}
            </a>
            @endforeach
            <div class="pt-2 border-t border-gray-800/50 mt-1">
                <a href="{{ asset('resume/Niroj_Resume.pdf') }}" download
                   class="btn-primary w-full justify-center text-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    Download Resume
                </a>
            </div>
        </div>
    </div>
</nav>
