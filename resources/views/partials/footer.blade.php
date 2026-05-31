<footer style="background-color:#0B1120;border-top:1px solid rgba(55,65,81,0.3);">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mb-10">

            {{-- Brand --}}
            <div>
                <div class="flex items-center gap-2.5 mb-4">
                    <div class="w-9 h-9 rounded-lg flex items-center justify-center font-bold text-sm text-white"
                         style="background:linear-gradient(135deg,#14B8A6,#3B82F6);box-shadow:0 0 18px rgba(20,184,166,0.3);">
                        NM
                    </div>
                    <span class="font-semibold text-white">Niroj<span class="gradient-text">.</span>dev</span>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed max-w-xs">
                    Full Stack Developer building scalable SaaS applications with Laravel, Vue.js & React.js — focused on clean architecture and reliable systems.
                </p>
                <div class="flex items-center gap-2 mt-4">
                    <span class="avail-dot"></span>
                    <span class="text-green-400 text-xs font-medium">Available for new opportunities</span>
                </div>
            </div>

            {{-- Quick Links --}}
            <div>
                <h4 class="text-white font-semibold mb-4 text-sm uppercase tracking-widest">Navigation</h4>
                <ul class="space-y-2.5">
                    @foreach (['about' => 'About Me', 'experience' => 'Experience', 'skills' => 'Skills', 'projects' => 'Projects', 'education' => 'Education', 'contact' => 'Contact'] as $id => $label)
                    <li>
                        <a href="#{{ $id }}"
                           onclick="if(window.__lenis){window.__lenis.scrollTo('#{{ $id }}',{duration:1.4})}else{document.getElementById('{{ $id }}').scrollIntoView({behavior:'smooth'})}return false;"
                           class="text-gray-400 hover:text-teal-400 text-sm transition-colors duration-200 flex items-center gap-2 group">
                            <span class="w-1.5 h-1.5 rounded-full bg-gray-600 group-hover:bg-teal-400 transition-colors"></span>
                            {{ $label }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <h4 class="text-white font-semibold mb-4 text-sm uppercase tracking-widest">Get In Touch</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="mailto:nirojmeshram@gmail.com"
                           class="flex items-center gap-3 text-gray-400 hover:text-teal-400 text-sm transition-colors group">
                            <span class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0 transition-colors"
                                  style="background:rgba(31,41,55,0.8);border:1px solid rgba(55,65,81,0.5);">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </span>
                            nirojmeshram@gmail.com
                        </a>
                    </li>
                    <li>
                        <a href="tel:+917987206996"
                           class="flex items-center gap-3 text-gray-400 hover:text-teal-400 text-sm transition-colors">
                            <span class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0"
                                  style="background:rgba(31,41,55,0.8);border:1px solid rgba(55,65,81,0.5);">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </span>
                            +91 79872 06996
                        </a>
                    </li>
                    <li class="flex items-center gap-3 text-gray-400 text-sm">
                        <span class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0"
                              style="background:rgba(31,41,55,0.8);border:1px solid rgba(55,65,81,0.5);">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </span>
                        Indore, Madhya Pradesh, India
                    </li>
                </ul>
            </div>
        </div>

        {{-- Bottom bar --}}
        <div class="pt-8 border-t border-gray-800/50 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-gray-500 text-sm">
                © {{ date('Y') }} Niroj Meshram. Crafted with
                <span class="gradient-text font-semibold">passion</span> &amp; Laravel.
            </p>
            <div class="flex items-center gap-2 text-gray-600 text-xs">
                <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                All systems operational
            </div>
        </div>
    </div>
</footer>
