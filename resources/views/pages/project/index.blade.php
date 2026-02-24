<x-site-layout title="Projects | roofiant">
    <x-common.bread-crumb title="Roofiant Projects" subtitle="Home > Projects" />
    <section class="py-12 px-4 sm:px-6 lg:px-8 bg-gray-50">
        <div class="max-w-7xl mx-auto">

            <!-- Filter Tabs and Select -->
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">

                <!-- Category Tabs -->
                <div class="flex flex-wrap gap-2">
                    <button
                        class="bg-indigo-900 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-indigo-800 transition-colors">
                        All
                    </button>
                    <button
                        class="bg-white text-gray-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-100 transition-colors border border-gray-200">
                        Residential
                    </button>
                    <button
                        class="bg-white text-gray-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-100 transition-colors border border-gray-200">
                        Commercial
                    </button>
                    <button
                        class="bg-white text-gray-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-100 transition-colors border border-gray-200">
                        Repair
                    </button>
                    <button
                        class="bg-white text-gray-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-100 transition-colors border border-gray-200">
                        Installation
                    </button>
                </div>

                <!-- Area Select Dropdown -->
                <div class="relative">
                    <select
                        class="appearance-none bg-white border border-gray-300 rounded-lg px-4 py-2 pr-10 text-sm text-gray-700 hover:border-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 cursor-pointer">
                        <option>Select Area</option>
                        <option>Newark, OH</option>
                        <option>Heath, OH</option>
                        <option>Pataskala, OH</option>
                        <option>Granville, OH</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Projects Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">

                @foreach ($projects as $project)
                    <!-- Project 1 -->
                    <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow">
                        <div class="relative">
                            <img src="{{ $project->images->first()->image }}" alt="Complete Roof Replacement"
                                class="w-full h-48 object-cover">
                            <span
                                class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-md text-xs font-semibold">
                                {{ $project->type }}
                            </span>
                        </div>
                        <a href="/project/{{ $project->slug }}">
                            <div class="p-5">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">
                                    {{ $project->title }}
                                </h3>
                                <div class="flex items-center text-gray-600 text-sm">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span>{{ $project->area->address }}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>

            <!-- Pagination -->
            <div class="flex justify-center items-center gap-2">
                <button
                    class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 text-gray-600 hover:bg-gray-100 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <button
                    class="w-10 h-10 flex items-center justify-center rounded-lg bg-indigo-900 text-white font-medium">
                    1
                </button>
                <button
                    class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-100 transition-colors font-medium">
                    2
                </button>
                <button
                    class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-100 transition-colors font-medium">
                    3
                </button>
                <span class="px-2 text-gray-500">...</span>
                <button
                    class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-100 transition-colors font-medium">
                    22
                </button>

                <button
                    class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 text-gray-600 hover:bg-gray-100 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>

        </div>
    </section>
    @include('components.home.cta')
</x-site-layout>
