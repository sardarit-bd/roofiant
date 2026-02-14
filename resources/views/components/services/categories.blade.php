<section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-50">
    <div class="max-w-7xl mx-auto">
        <!-- Filter Tabs -->
        <div class="flex flex-wrap gap-3 mb-12 justify-center">
            <button
                class="px-6 py-2.5 rounded-lg font-medium text-sm transition-all duration-300 bg-indigo-900 text-white shadow-md hover:shadow-lg">
                All
            </button>
            <button
                class="px-6 py-2.5 rounded-lg font-medium text-sm transition-all duration-300 bg-white text-gray-700 hover:bg-gray-100 shadow-sm">
                Residential
            </button>
            <button
                class="px-6 py-2.5 rounded-lg font-medium text-sm transition-all duration-300 bg-white text-gray-700 hover:bg-gray-100 shadow-sm">
                Commercial
            </button>
            <button
                class="px-6 py-2.5 rounded-lg font-medium text-sm transition-all duration-300 bg-white text-gray-700 hover:bg-gray-100 shadow-sm">
                Repair
            </button>
            <button
                class="px-6 py-2.5 rounded-lg font-medium text-sm transition-all duration-300 bg-white text-gray-700 hover:bg-gray-100 shadow-sm">
                Gutters
            </button>
            <button
                class="px-6 py-2.5 rounded-lg font-medium text-sm transition-all duration-300 bg-white text-gray-700 hover:bg-gray-100 shadow-sm">
                Siding
            </button>
            <button
                class="px-6 py-2.5 rounded-lg font-medium text-sm transition-all duration-300 bg-white text-gray-700 hover:bg-gray-100 shadow-sm">
                Windows
            </button>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
            <!-- Service Card 1: Residential Roofing -->
            <div
                class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-64 overflow-hidden">
                    <img src="{{ asset('images/services/cat1.jpg') }}" alt="Residential Roofing"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute bottom-4 left-1/2 -translate-x-1/2">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-8 h-8 text-indigo-900" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="p-6 sm:p-8 text-center">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Residential Roofing</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        We're proud to be known as the area's most trusted residential roofers. Our focus is on
                        delivering exceptional craftsmanship and top-notch customer service. From minor roof repairs to
                        full replacements, we handle every job with precision and care.
                    </p>
                    <a href="#"
                        class="inline-flex items-center gap-2 text-indigo-900 font-semibold hover:gap-3 transition-all duration-300">
                        View Details
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Service Card 2: Commercial Roofing -->
            <div
                class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-64 overflow-hidden">
                    <img src="{{ asset('images/services/cat2.jpg') }}" alt="Commercial Roofing"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute bottom-4 left-1/2 -translate-x-1/2">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-8 h-8 text-indigo-900" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="p-6 sm:p-8 text-center">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Commercial Roofing</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        We're proud to be known as the area's most trusted residential roofers. Our focus is on
                        delivering exceptional craftsmanship and top-notch customer service. From minor roof repairs to
                        full replacements, we handle every job with precision and care.
                    </p>
                    <a href="#"
                        class="inline-flex items-center gap-2 text-indigo-900 font-semibold hover:gap-3 transition-all duration-300">
                        View Details
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Service Card 3: Roof Repairs -->
            <div
                class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-64 overflow-hidden">
                    <img src="{{ asset('images/services/cat3.jpg') }}" alt="Roof Repairs"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute bottom-4 left-1/2 -translate-x-1/2">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-8 h-8 text-indigo-900" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="p-6 sm:p-8 text-center">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Roof Repairs</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        We're proud to be known as the area's most trusted residential roofers. Our focus is on
                        delivering exceptional craftsmanship and top-notch customer service. From minor roof repairs to
                        full replacements, we handle every job with precision and care.
                    </p>
                    <a href="#"
                        class="inline-flex items-center gap-2 text-indigo-900 font-semibold hover:gap-3 transition-all duration-300">
                        View Details
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Service Card 4: Seamless Gutters -->
            <div
                class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-64 overflow-hidden">
                    <img src="{{ asset('images/services/cat4.jpg') }}" alt="Seamless Gutters"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute bottom-4 left-1/2 -translate-x-1/2">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-8 h-8 text-indigo-900" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="p-6 sm:p-8 text-center">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Seamless Gutters</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        We're proud to be known as the area's most trusted residential roofers. Our focus is on
                        delivering exceptional craftsmanship and top-notch customer service. From minor roof repairs to
                        full replacements, we handle every job with precision and care.
                    </p>
                    <a href="#"
                        class="inline-flex items-center gap-2 text-indigo-900 font-semibold hover:gap-3 transition-all duration-300">
                        View Details
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Service Card 5: Seamless Gutters -->
            <div
                class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-64 overflow-hidden">
                    <img src="{{ asset('images/services/cat5.jpg') }}" alt="Seamless Gutters"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute bottom-4 left-1/2 -translate-x-1/2">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-8 h-8 text-indigo-900" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="p-6 sm:p-8 text-center">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Seamless Gutters</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        We're proud to be known as the area's most trusted residential roofers. Our focus is on
                        delivering exceptional craftsmanship and top-notch customer service. From minor roof repairs to
                        full replacements, we handle every job with precision and care.
                    </p>
                    <a href="#"
                        class="inline-flex items-center gap-2 text-indigo-900 font-semibold hover:gap-3 transition-all duration-300">
                        View Details
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Service Card 6: Seamless Gutters -->
            <div
                class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-64 overflow-hidden">
                    <img src="{{ asset('images/services/cat6.jpg') }}" alt="Seamless Gutters"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute bottom-4 left-1/2 -translate-x-1/2">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-8 h-8 text-indigo-900" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="p-6 sm:p-8 text-center">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Seamless Gutters</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        We're proud to be known as the area's most trusted residential roofers. Our focus is on
                        delivering exceptional craftsmanship and top-notch customer service. From minor roof repairs to
                        full replacements, we handle every job with precision and care.
                    </p>
                    <a href="#"
                        class="inline-flex items-center gap-2 text-indigo-900 font-semibold hover:gap-3 transition-all duration-300">
                        View Details
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
