<section class="py-12 sm:py-16 lg:py-24 px-4 sm:px-6 lg:px-8 bg-white">
    <div class="max-w-7xl mx-auto">
        <div
            class="inline-flex items-center gap-2 bg-blue-50 text-blue-900 px-4 py-2 rounded-full text-xs sm:text-sm font-bold mb-4 sm:mb-6 uppercase tracking-wide">
            <i class="fas fa-house-chimney-user"></i>
            <span>OUR PROJECTS</span>
        </div>
        <!-- Header -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2 mb-10 sm:mb-12 lg:mb-6">

            <!-- Title -->
            <h2 class="text-3xl sm:text-4xl lg:text-5xl xl:text-5xl font-extrabold leading-tight">
                <span class="text-blue-900">EXPLORE OUR </span>
                <span class="text-red-700">RECENT PROJECTS</span>
            </h2>

            <!-- See All Projects Button (Desktop) -->
            <div class="hidden sm:block flex-shrink-0">
                <a href="/projects"
                    class="inline-flex items-center px-6 py-3 bg-blue-900 text-white rounded-full hover:bg-blue-800 transition-all shadow-lg hover:shadow-xl font-semibold">
                    See All Projects
                    <span class="ml-2 bg-white text-blue-900 p-1.5 rounded-full">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>

        <!-- Tabs -->
        <div class="flex flex-wrap gap-1 mb-4 sm:mb-6 lg:mb-5">
            <button class="bg-blue-100 tab-btn active px-6 py-2.5 rounded-xl font-semibold text-sm sm:text-base transition-all"
                data-tab="all">
                All
            </button>
            <button class="bg-blue-100 tab-btn px-6 py-2.5 rounded-xl font-semibold text-sm sm:text-base transition-all"
                data-tab="residential">
                Residential
            </button>
            <button class="bg-blue-100 tab-btn px-6 py-2.5 rounded-xl font-semibold text-sm sm:text-base transition-all"
                data-tab="commercial">
                Commercial
            </button>
            <button class="bg-blue-100 tab-btn px-6 py-2.5 rounded-xl font-semibold text-sm sm:text-base transition-all"
                data-tab="repair">
                Repair
            </button>
            <button class="bg-blue-100 tab-btn px-6 py-2.5 rounded-xl font-semibold text-sm sm:text-base transition-all"
                data-tab="installation">
                Installation
            </button>
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2 lg:gap-3">

            <!-- Project Card 1 -->
            <div class="project-card group relative overflow-hidden rounded-2xl lg:rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 "
                data-category="residential">
                <img src="{{ asset('images/roof1.jpg') }}" alt="Complete Roof Replacement"
                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">

                <!-- Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>

                <!-- Content -->
                <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8 text-white">
                    <div class="flex items-center gap-2 mb-3">
                        <h3 class="text-xl sm:text-2xl font-bold">Complete Roof Replacement</h3>
                    </div>
                    <p class="text-sm sm:text-base text-gray-200 mb-4">
                        Professional repair services to extend your roof's life or replacement when needed.
                    </p>
                    <button
                        class="inline-flex items-center gap-2 px-5 py-2.5 bg-red-700 text-white rounded-full hover:bg-red-600 transition-all font-semibold text-sm">
                        View Details
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Project Card 2 -->
            <div class="project-card group relative overflow-hidden rounded-2xl lg:rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300"
                data-category="installation">
                <img src="{{ asset('images/roof1.jpg') }}" alt="Metal Roof Installation"
                    class="w-full h-64 sm:h-72 lg:h-80 object-cover group-hover:scale-105 transition-transform duration-500">

                <!-- Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>

                <!-- Content -->
                <div class="absolute bottom-0 left-0 right-0 p-5 sm:p-6 text-white">
                    <div class="flex items-center gap-2 mb-2">
                        <div class="w-1 h-5 bg-red-700"></div>
                        <h3 class="text-lg sm:text-xl font-bold">Metal Roof Installation</h3>
                    </div>
                    <div class="flex items-center gap-2 text-sm">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>Heath, OH</span>
                    </div>
                </div>
            </div>

            <!-- Project Card 3 -->
            <div class="project-card group relative overflow-hidden rounded-2xl lg:rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 md:row-span-1 md:col-span-2"
                data-category="repair">
                <img src="{{ asset('images/roof1.jpg') }}" alt="Roof Repair & Replacement"
                    class="w-full h-64 sm:h-72 lg:h-80 object-cover group-hover:scale-105 transition-transform duration-500">

                <!-- Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>

                <!-- Content -->
                <div class="absolute bottom-0 left-0 right-0 p-5 sm:p-6 text-white">
                    <div class="flex items-center gap-2 mb-2">
                        <div class="w-1 h-5 bg-red-700"></div>
                        <h3 class="text-lg sm:text-xl font-bold">Roof Repair & Replacement</h3>
                    </div>
                    <div class="flex items-center gap-2 text-sm">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>Heath, OH</span>
                    </div>
                </div>
            </div>

            <!-- Project Card 4 -->
            <div class="project-card group relative overflow-hidden rounded-2xl lg:rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 md:row-span-1 md:col-span-2"
                data-category="residential">
                <img src="{{ asset('images/roof1.jpg') }}" alt="Asphalt Shingle Roofing"
                    class="w-full h-64 sm:h-72 lg:h-80 object-cover group-hover:scale-105 transition-transform duration-500">

                <!-- Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>

                <!-- Content -->
                <div class="absolute bottom-0 left-0 right-0 p-5 sm:p-6 text-white">
                    <div class="flex items-center gap-2 mb-2">
                        <div class="w-1 h-5 bg-red-700"></div>
                        <h3 class="text-lg sm:text-xl font-bold">Asphalt Shingle Roofing</h3>
                    </div>
                    <div class="flex items-center gap-2 text-sm">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>Granville, OH</span>
                    </div>
                </div>
            </div>

            <!-- Project Card 5 -->
            <div class="project-card group relative overflow-hidden rounded-2xl lg:rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300"
                data-category="commercial">
                <img src="{{ asset('images/roof1.jpg') }}" alt="Siding"
                    class="w-full h-64 sm:h-72 lg:h-80 object-cover group-hover:scale-105 transition-transform duration-500">

                <!-- Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>

                <!-- Content -->
                <div class="absolute bottom-0 left-0 right-0 p-5 sm:p-6 text-white">
                    <div class="flex items-center gap-2 mb-2">
                        <div class="w-1 h-5 bg-red-700"></div>
                        <h3 class="text-lg sm:text-xl font-bold">Siding</h3>
                    </div>
                    <div class="flex items-center gap-2 text-sm">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>Newark, OH</span>
                    </div>
                </div>
            </div>
            <!-- Project Card 5 -->
            <div class="project-card group relative overflow-hidden rounded-2xl lg:rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300"
                data-category="commercial">
                <img src="{{ asset('images/roof1.jpg') }}" alt="Siding"
                    class="w-full h-64 sm:h-72 lg:h-80 object-cover group-hover:scale-105 transition-transform duration-500">

                <!-- Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>

                <!-- Content -->
                <div class="absolute bottom-0 left-0 right-0 p-5 sm:p-6 text-white">
                    <div class="flex items-center gap-2 mb-2">
                        <div class="w-1 h-5 bg-red-700"></div>
                        <h3 class="text-lg sm:text-xl font-bold">Siding</h3>
                    </div>
                    <div class="flex items-center gap-2 text-sm">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>Newark, OH</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- See All Projects Button (Mobile) -->
        <div class="sm:hidden mt-10 text-center">
            <a href="/projects"
                class="inline-flex items-center px-6 py-3 bg-blue-900 text-white rounded-full hover:bg-blue-800 transition-all shadow-lg hover:shadow-xl font-semibold">
                See All Projects
                <span class="ml-2 bg-white text-blue-900 p-1.5 rounded-full">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </span>
            </a>
        </div>

    </div>
</section>



<script>
    // Tab functionality
    const tabBtns = document.querySelectorAll('.tab-btn');
    const projectCards = document.querySelectorAll('.project-card');

    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Update active tab
            tabBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            // Filter projects
            const category = btn.dataset.tab;

            projectCards.forEach(card => {
                if (category === 'all') {
                    card.style.display = 'block';
                } else {
                    if (card.dataset.category === category) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                }
            });
        });
    });
</script>
