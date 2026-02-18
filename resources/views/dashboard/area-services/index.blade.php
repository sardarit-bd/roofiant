<x-dashboard-layout>

    {{-- Page Header --}}
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-700">
            Area Services
        </h2>
        <p class="mt-1 text-sm text-gray-500">Manage which services are available in each area</p>
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

    {{-- Toolbar: Search (left) + Link Service (right) --}}
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">

        {{-- Search Bar --}}
        <div class="relative w-full sm:w-80">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-4.35-4.35M16.65 16.65A7.5 7.5 0 1116.65 2a7.5 7.5 0 010 14.65z" />
                </svg>
            </span>
            <input type="text" placeholder="Search area-service links..."
                class="w-full pl-10 pr-4 py-2.5 text-sm text-gray-700 dark:text-gray-200 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-600 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition" />
        </div>

        {{-- Link Service Button --}}
        <a href="{{ route('area-services.create') }}"
            class="inline-flex items-center gap-2 px-5 py-2.5 text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 active:bg-indigo-800 rounded-xl shadow-sm transition-colors duration-150 whitespace-nowrap">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
            </svg>
            Link Service to Area
        </a>
    </div>

    {{-- Area Services Table --}}
    <div
        class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left">

                {{-- Table Head --}}
                <thead>
                    <tr class="bg-gray-50 dark:bg-gray-700/50 border-b border-gray-100 dark:border-gray-700">
                        <th
                            class="px-6 py-4 font-semibold text-xs uppercase tracking-wider text-gray-500 dark:text-gray-400 w-8">
                            #
                        </th>
                        <th
                            class="px-6 py-4 font-semibold text-xs uppercase tracking-wider text-gray-500 dark:text-gray-400">
                            Area
                        </th>
                        <th
                            class="px-6 py-4 font-semibold text-xs uppercase tracking-wider text-gray-500 dark:text-gray-400">
                            Service
                        </th>
                        <th
                            class="px-6 py-4 font-semibold text-xs uppercase tracking-wider text-gray-500 dark:text-gray-400">
                            Area Details
                        </th>
                        <th
                            class="px-6 py-4 font-semibold text-xs uppercase tracking-wider text-gray-500 dark:text-gray-400 text-center">
                            Actions
                        </th>
                    </tr>
                </thead>

                {{-- Table Body --}}
                <tbody class="divide-y divide-gray-100 dark:divide-gray-700">
                    @forelse ($areaServices as $index => $areaService)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/30 transition-colors duration-100">

                            {{-- Row Number --}}
                            <td class="px-6 py-4 text-gray-400 dark:text-gray-500 font-mono text-xs">
                                {{ $areaServices->firstItem() + $index }}
                            </td>

                            {{-- Area --}}
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-indigo-50 dark:bg-indigo-900/30 flex items-center justify-center shrink-0">
                                        <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor"
                                            stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <span
                                            class="font-medium text-gray-800 dark:text-gray-100 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">
                                            {{ $areaService->area->name }}
                                        </span>
                                        <div class="text-xs text-gray-400 dark:text-gray-500 mt-0.5">
                                            /{{ $areaService->area->slug }}
                                        </div>
                                    </div>
                                </div>
                            </td>

                            {{-- Service --}}
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-8 h-8 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-500 flex items-center justify-center shrink-0 shadow-sm">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor"
                                            stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                                        </svg>
                                    </div>
                                    <div>
                                        <a href="{{ route('services.show', $areaService->service) }}"
                                            class="font-medium text-gray-800 dark:text-gray-100 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">
                                            {{ $areaService->service->name }}
                                        </a>
                                        <div class="text-xs text-gray-400 dark:text-gray-500 mt-0.5">
                                            /{{ $areaService->service->slug }}
                                        </div>
                                    </div>
                                </div>
                            </td>

                            {{-- Area Details --}}
                            <td class="px-6 py-4 text-gray-500 dark:text-gray-400 max-w-xs">
                                <span class="line-clamp-2 text-xs">
                                    {{ $areaService->area->address ?? '—' }}
                                </span>
                            </td>

                            {{-- Actions --}}
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-center gap-2">

                                    {{-- Edit --}}
                                    <a href="{{ route('area-services.edit', $areaService) }}"
                                        class="p-1.5 rounded-lg text-gray-400 hover:text-indigo-600 hover:bg-indigo-50 dark:hover:bg-indigo-900/30 transition-colors"
                                        title="Edit">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </a>

                                    {{-- Unlink --}}
                                    <form action="{{ route('area-services.destroy', $areaService) }}" method="POST"
                                        onsubmit="return confirm('Unlink {{ addslashes($areaService->service->name) }} from {{ addslashes($areaService->area->name) }}?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="p-1.5 rounded-lg text-gray-400 hover:text-red-600 hover:bg-red-50 dark:hover:bg-red-900/30 transition-colors"
                                            title="Unlink">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M13.181 8.68a4.503 4.503 0 015.13 5.13m-5.13-5.13l6.115-6.115m-6.115 6.115L8.091 3.591m5.09 5.09l-5.09 5.09m0 0l-6.115 6.115m6.115-6.115L3.68 19.32" />
                                            </svg>
                                        </button>
                                    </form>

                                </div>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-16 text-center">
                                <div class="flex flex-col items-center gap-3 text-gray-400 dark:text-gray-500">
                                    <svg class="w-12 h-12 opacity-30" fill="none" stroke="currentColor"
                                        stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                                    </svg>
                                    <p class="text-sm font-medium">No area-service links found</p>
                                    <p class="text-xs">Start by linking a service to an area.</p>
                                    <a href="{{ route('area-services.create') }}"
                                        class="mt-2 inline-flex items-center gap-1.5 px-4 py-2 text-xs font-medium text-indigo-600 dark:text-indigo-400 border border-indigo-200 dark:border-indigo-700 rounded-lg hover:bg-indigo-50 dark:hover:bg-indigo-900/30 transition-colors">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor"
                                            stroke-width="2.5" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                                        </svg>
                                        Link Service to Area
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>

        {{-- Pagination --}}
        @if ($areaServices->hasPages())
            <div class="px-6 py-4 border-t border-gray-100 dark:border-gray-700">
                {{ $areaServices->links() }}
            </div>
        @endif
    </div>

</x-dashboard-layout>
