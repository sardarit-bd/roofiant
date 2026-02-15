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

                <!-- Project 1 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="{{ asset('images/projects/p (1).png') }}" alt="Complete Roof Replacement"
                            class="w-full h-48 object-cover">
                        <span
                            class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-md text-xs font-semibold">
                            Roof Replacement
                        </span>
                    </div>
                    <a href="/projects/details">
                        <div class="p-5">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">
                                Complete Roof Replacement
                            </h3>
                            <div class="flex items-center text-gray-600 text-sm">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Newark, OH
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Project 2 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="{{ asset('images/projects/p (2).png') }}" alt="Metal Roof Installation"
                            class="w-full h-48 object-cover">
                        <span
                            class="absolute top-4 left-4 bg-gray-700 text-white px-3 py-1 rounded-md text-xs font-semibold">
                            Metal Roofing
                        </span>
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">
                            Metal Roof Installation
                        </h3>
                        <div class="flex items-center text-gray-600 text-sm">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Heath, OH
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="{{ asset('images/projects/p (3).png') }}" alt="Storm Damage Restoration"
                            class="w-full h-48 object-cover">
                        <span
                            class="absolute top-4 left-4 bg-red-600 text-white px-3 py-1 rounded-md text-xs font-semibold">
                            Storm Repair
                        </span>
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">
                            Storm Damage Restoration
                        </h3>
                        <div class="flex items-center text-gray-600 text-sm">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Granville, OH
                        </div>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="{{ asset('images/projects/p (4).png') }}" alt="Architectural Shingle Installation"
                            class="w-full h-48 object-cover">
                        <span
                            class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-md text-xs font-semibold">
                            Roof Replacement
                        </span>
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">
                            Architectural Shingle Installation
                        </h3>
                        <div class="flex items-center text-gray-600 text-sm">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Newark, OH
                        </div>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="{{ asset('images/projects/p (5).png') }}" alt="Gutter & Siding Project"
                            class="w-full h-48 object-cover">
                        <span
                            class="absolute top-4 left-4 bg-indigo-600 text-white px-3 py-1 rounded-md text-xs font-semibold">
                            Gutters & Siding
                        </span>
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">
                            Gutter & Siding Project
                        </h3>
                        <div class="flex items-center text-gray-600 text-sm">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Pataskala, OH
                        </div>
                    </div>
                </div>

                <!-- Project 6 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="{{ asset('images/projects/p (6).png') }}" alt="Emergency Storm Repairs"
                            class="w-full h-48 object-cover">
                        <span
                            class="absolute top-4 left-4 bg-red-600 text-white px-3 py-1 rounded-md text-xs font-semibold">
                            Storm Repair
                        </span>
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">
                            Emergency Storm Repairs
                        </h3>
                        <div class="flex items-center text-gray-600 text-sm">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Heath, OH
                        </div>
                    </div>
                </div>

                <!-- Project 7 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="{{ asset('images/projects/p (7).png') }}" alt="Architectural Shingle Installation"
                            class="w-full h-48 object-cover">
                        <span
                            class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-md text-xs font-semibold">
                            Roof Replacement
                        </span>
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">
                            Architectural Shingle Installation
                        </h3>
                        <div class="flex items-center text-gray-600 text-sm">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Newark, OH
                        </div>
                    </div>
                </div>

                <!-- Project 8 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="{{ asset('images/projects/p (8).png') }}" alt="Gutter & Siding Project"
                            class="w-full h-48 object-cover">
                        <span
                            class="absolute top-4 left-4 bg-indigo-600 text-white px-3 py-1 rounded-md text-xs font-semibold">
                            Gutters & Siding
                        </span>
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">
                            Gutter & Siding Project
                        </h3>
                        <div class="flex items-center text-gray-600 text-sm">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Pataskala, OH
                        </div>
                    </div>
                </div>

                <!-- Project 9 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="{{ asset('images/projects/p (9).png') }}" alt="Emergency Storm Repairs"
                            class="w-full h-48 object-cover">
                        <span
                            class="absolute top-4 left-4 bg-red-600 text-white px-3 py-1 rounded-md text-xs font-semibold">
                            Storm Repair
                        </span>
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">
                            Emergency Storm Repairs
                        </h3>
                        <div class="flex items-center text-gray-600 text-sm">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Heath, OH
                        </div>
                    </div>
                </div>

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
