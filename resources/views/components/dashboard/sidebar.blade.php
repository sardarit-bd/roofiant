<aside id="sidebar"
    class="z-20 hidden w-64 overflow-y-auto bg-slate-900 border-r border-white/10 md:block flex-shrink-0">
    <div class="py-4">

        {{-- Logo --}}
        <a class="flex items-center gap-2 px-6 py-2 text-lg font-bold text-white" href="{{ route('dashboard') }}">
            Roofiant
        </a>

        {{-- Nav --}}
        <ul class="mt-4 space-y-1 px-3">

            <li>
                <a href="{{ route('dashboard') }}"
                    class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-slate-300 hover:bg-white/10 hover:text-white transition-colors duration-150 {{ request()->routeIs('dashboard') ? 'bg-white/10 text-white' : '' }}">
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.blog.index') }}"
                    class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-slate-300 hover:bg-white/10 hover:text-white transition-colors duration-150 {{ request()->routeIs('admin.blog.*') ? 'bg-white/10 text-white' : '' }}">
                    <i class="fas fa-newspaper w-4 text-center shrink-0"></i>
                    <span>Blogs</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.area.index') }}"
                    class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-slate-300 hover:bg-white/10 hover:text-white transition-colors duration-150 {{ request()->routeIs('admin.area.*') ? 'bg-white/10 text-white' : '' }}">
                    <i class="fas fa-location-arrow w-4 text-center shrink-0"></i>
                    <span>Areas</span>
                </a>
            </li>

            <li>
                <a href="{{ route('services.index') }}"
                    class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-slate-300 hover:bg-white/10 hover:text-white transition-colors duration-150 {{ request()->routeIs('services.*') ? 'bg-white/10 text-white' : '' }}">
                    <i class="fas fa-briefcase w-4 text-center shrink-0"></i>
                    <span>Services</span>
                </a>
            </li>

            <li>
                <a href="{{ route('area-services.index') }}"
                    class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-slate-300 hover:bg-white/10 hover:text-white transition-colors duration-150 {{ request()->routeIs('area-services.*') ? 'bg-white/10 text-white' : '' }}">
                    <i class="fa-solid fa-feather-pointed w-4 text-center shrink-0"></i>
                    <span>Services in Areas</span>
                </a>
            </li>

            <li>
                <a href="{{ route('projects.index') }}"
                    class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-slate-300 hover:bg-white/10 hover:text-white transition-colors duration-150 {{ request()->routeIs('projects.*') ? 'bg-white/10 text-white' : '' }}">
                    <i class="fas fa-project-diagram w-4 text-center shrink-0"></i>
                    <span>Projects</span>
                </a>
            </li>

            <li>
                <a href="{{ route('teams.index') }}"
                    class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-slate-300 hover:bg-white/10 hover:text-white transition-colors duration-150 {{ request()->routeIs('teams.*') ? 'bg-white/10 text-white' : '' }}">
                    <i class="fas fa-users w-4 text-center shrink-0"></i>
                    <span>Team</span>
                </a>
            </li>

            <li>
                <a href="{{ route('settings.index') }}"
                    class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-slate-300 hover:bg-white/10 hover:text-white transition-colors duration-150 {{ request()->routeIs('settings.*') ? 'bg-white/10 text-white' : '' }}">
                    <i class="fas fa-cog w-4 text-center shrink-0"></i>
                    <span>Settings</span>
                </a>
            </li>

        </ul>
    </div>
</aside>
