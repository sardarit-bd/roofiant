<x-dashboard-layout>

    {{-- Page Header --}}
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-700">Areas</h2>
        <p class="mt-1 text-sm text-gray-500">Manage service areas and their linked projects</p>
    </div>

    {{-- Flash Success --}}
    @if (session('success'))
        <div
            class="mb-6 flex items-center gap-3 p-4 bg-emerald-50 border border-emerald-200 rounded-xl text-sm text-emerald-700">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            {{ session('success') }}
        </div>
    @endif

    {{-- Toolbar --}}
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">

        {{-- Search Bar --}}
        <div class="relative w-full sm:w-80">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-4.35-4.35M16.65 16.65A7.5 7.5 0 1116.65 2a7.5 7.5 0 010 14.65z" />
                </svg>
            </span>
            <input type="text" placeholder="Search areas..."
                class="w-full pl-10 pr-4 py-2.5 text-sm text-gray-700 bg-white border border-gray-200 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition" />
        </div>

        {{-- Add Area Button --}}
        <a href="{{ route('areas.create') }}"
            class="inline-flex items-center gap-2 px-5 py-2.5 text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 active:bg-indigo-800 rounded-xl shadow-sm transition-colors duration-150 whitespace-nowrap">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
            </svg>
            Add Area
        </a>
    </div>

    {{-- Areas Table --}}
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left">

                {{-- Table Head --}}
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-100">
                        <th class="px-6 py-4 font-semibold text-xs uppercase tracking-wider text-gray-500 w-8">#</th>
                        <th class="px-6 py-4 font-semibold text-xs uppercase tracking-wider text-gray-500">Name</th>
                        <th class="px-6 py-4 font-semibold text-xs uppercase tracking-wider text-gray-500">Slug</th>
                        <th class="px-6 py-4 font-semibold text-xs uppercase tracking-wider text-gray-500">Address</th>
                        <th class="px-6 py-4 font-semibold text-xs uppercase tracking-wider text-gray-500 text-center">
                            Actions</th>
                    </tr>
                </thead>

                {{-- Table Body --}}
                <tbody class="divide-y divide-gray-100">
                    @forelse ($areas as $index => $area)
                        <tr class="hover:bg-gray-50 transition-colors duration-100">

                            {{-- Row Number --}}
                            <td class="px-6 py-4 text-gray-400 font-mono text-xs">
                                {{ $areas->firstItem() + $index }}
                            </td>

                            {{-- Name --}}
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-indigo-50 flex items-center justify-center shrink-0">
                                        <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor"
                                            stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                        </svg>
                                    </div>
                                    <span class="font-medium text-gray-800">{{ $area->name }}</span>
                                </div>
                            </td>

                            {{-- Slug --}}
                            <td class="px-6 py-4">
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-mono bg-gray-100 text-gray-600">
                                    /{{ $area->slug }}
                                </span>
                            </td>

                            {{-- Address --}}
                            <td class="px-6 py-4 text-gray-500 max-w-xs">
                                <span class="line-clamp-1">{{ $area->address ?? '—' }}</span>
                            </td>

                            {{-- Actions --}}
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-center gap-2">
                                    {{-- Delete --}}
                                    <form action="{{ route('areas.destroy', $area) }}" method="POST"
                                        onsubmit="return confirm('Delete area \'{{ addslashes($area->name) }}\'? This cannot be undone.')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="p-1.5 rounded-lg text-gray-400 hover:text-red-600 hover:bg-red-50 transition-colors"
                                            title="Delete">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>

                                </div>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-16 text-center">
                                <div class="flex flex-col items-center gap-3 text-gray-400">
                                    <svg class="w-12 h-12 opacity-30" fill="none" stroke="currentColor"
                                        stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                    </svg>
                                    <p class="text-sm font-medium">No areas found</p>
                                    <p class="text-xs">Start by adding your first service area.</p>
                                    <a href="{{ route('areas.create') }}"
                                        class="mt-2 inline-flex items-center gap-1.5 px-4 py-2 text-xs font-medium text-indigo-600 border border-indigo-200 rounded-lg hover:bg-indigo-50 transition-colors">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor"
                                            stroke-width="2.5" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                                        </svg>
                                        Create Area
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>

        {{-- Pagination --}}
        @if ($areas->hasPages())
            <div class="px-6 py-4 border-t border-gray-100">
                {{ $areas->links() }}
            </div>
        @endif
    </div>

</x-dashboard-layout>
