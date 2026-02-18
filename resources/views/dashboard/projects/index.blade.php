<x-dashboard-layout>

    {{-- Page Header --}}
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-700">
            Projects
        </h2>
        <p class="mt-1 text-sm text-gray-500">Manage all your projects and portfolios</p>
    </div>

    {{-- Flash Success --}}
    @if (session('success'))
        <div
            class="mb-6 flex items-center gap-3 p-4 bg-emerald-50 dark:bg-emerald-900/20 border border-emerald-200 dark:border-emerald-700 rounded-xl text-sm text-emerald-700 dark:text-emerald-300">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            {{ session('success') }}
        </div>
    @endif

    {{-- Toolbar: Search (left) + Add Project (right) --}}
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">

        {{-- Search Bar --}}
        <div class="relative w-full sm:w-80">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-4.35-4.35M16.65 16.65A7.5 7.5 0 1116.65 2a7.5 7.5 0 010 14.65z" />
                </svg>
            </span>
            <input type="text" placeholder="Search projects..."
                class="w-full pl-10 pr-4 py-2.5 text-sm text-gray-700 dark:text-gray-200 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-600 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition" />
        </div>

        {{-- Add Project Button --}}
        <a href="{{ route('projects.create') }}"
            class="inline-flex items-center gap-2 px-5 py-2.5 text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 active:bg-indigo-800 rounded-xl shadow-sm transition-colors duration-150 whitespace-nowrap">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
            </svg>
            Add Project
        </a>
    </div>

    {{-- Projects Grid --}}
    @if ($projects->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
            @foreach ($projects as $project)
                <div
                    class="group bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-lg transition-all duration-200 overflow-hidden">

                    {{-- Image --}}
                    <div
                        class="relative aspect-video bg-gradient-to-br from-gray-100 to-gray-200 dark:from-gray-700 dark:to-gray-800 overflow-hidden">
                        @if ($project->images->isNotEmpty())
                            <img src="{{ asset('storage/' . $project->images->first()->image) }}"
                                alt="{{ $project->title }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                        @else
                            <div
                                class="absolute inset-0 flex items-center justify-center text-gray-400 dark:text-gray-500">
                                <svg class="w-16 h-16 opacity-30" fill="none" stroke="currentColor"
                                    stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                </svg>
                            </div>
                        @endif

                        {{-- Image Count Badge --}}
                        @if ($project->images_count > 0)
                            <div
                                class="absolute top-3 right-3 flex items-center gap-1 px-2 py-1 bg-black/60 backdrop-blur-sm rounded-lg text-xs text-white font-medium">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                </svg>
                                {{ $project->images_count }}
                            </div>
                        @endif
                    </div>

                    {{-- Content --}}
                    <div class="p-5">

                        {{-- Title --}}
                        <h3
                            class="text-base font-semibold text-gray-800 dark:text-gray-100 mb-2 line-clamp-1 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
                            <a href="{{ route('projects.show', $project) }}">
                                {{ $project->title }}
                            </a>
                        </h3>

                        {{-- Meta Info --}}
                        <div class="flex items-center gap-3 mb-3">
                            {{-- Area --}}
                            <div class="flex items-center gap-1.5 text-xs text-gray-500 dark:text-gray-400">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                <span>{{ $project->area->name }}</span>
                            </div>

                            {{-- Services Count --}}
                            @if ($project->services_count > 0)
                                <div class="flex items-center gap-1.5 text-xs text-gray-500 dark:text-gray-400">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                                    </svg>
                                    <span>{{ $project->services_count }}
                                        {{ Str::plural('service', $project->services_count) }}</span>
                                </div>
                            @endif
                        </div>

                        {{-- Client & Type --}}
                        <div class="flex items-center gap-2 mb-4">
                            @if ($project->client)
                                <span
                                    class="inline-flex items-center px-2 py-0.5 rounded-md text-xs font-medium bg-blue-50 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300">
                                    {{ $project->client }}
                                </span>
                            @endif
                            @if ($project->type)
                                <span
                                    class="inline-flex items-center px-2 py-0.5 rounded-md text-xs font-medium bg-purple-50 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300">
                                    {{ $project->type }}
                                </span>
                            @endif
                        </div>

                        {{-- Actions --}}
                        <div class="flex items-center gap-2 pt-3 border-t border-gray-100 dark:border-gray-700">

                            <a href="{{ route('projects.destroy', $project) }}"
                                class="flex-1 inline-flex items-center justify-center gap-1.5 px-3 py-2 text-xs font-medium text-indigo-600 dark:text-indigo-400 bg-indigo-50 dark:bg-indigo-900 rounded-lg transition-colors">
                                <i class="fas fa-trash"></i>
                                delete
                            </a>

                            <a href="{{ route('projects.edit', $project) }}"
                                class="inline-flex items-center justify-center p-2 text-gray-400 hover:text-indigo-600 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors"
                                title="Edit">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </a>

                        </div>

                    </div>

                </div>
            @endforeach
        </div>

        {{-- Pagination --}}
        @if ($projects->hasPages())
            <div class="mt-6">
                {{ $projects->links() }}
            </div>
        @endif
    @else
        {{-- Empty State --}}
        <div class="bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm p-16">
            <div class="flex flex-col items-center gap-3 text-gray-400 dark:text-gray-500 text-center max-w-md mx-auto">
                <svg class="w-16 h-16 opacity-30" fill="none" stroke="currentColor" stroke-width="1.5"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                </svg>
                <p class="text-base font-medium text-gray-600 dark:text-gray-300">No projects yet</p>
                <p class="text-sm">Start building your portfolio by creating your first project.</p>
                <a href="{{ route('projects.create') }}"
                    class="mt-4 inline-flex items-center gap-2 px-5 py-2.5 text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 rounded-xl shadow-sm transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                    Create Your First Project
                </a>
            </div>
        </div>
    @endif

</x-dashboard-layout>
