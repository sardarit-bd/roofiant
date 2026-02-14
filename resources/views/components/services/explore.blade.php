<section class="py-16 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-blue-900 to-indigo-950 mb-20">
    <div class="max-w-7xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-12 space-y-6">
            <!-- Badge -->
            <div
                class="inline-flex items-center gap-2 bg-white text-indigo-900 px-5 py-2.5 rounded-full text-sm font-semibold uppercase tracking-wide">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span>Our Projects</span>
            </div>

            <!-- Title -->
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white">
                Explore Our Recent Projects
            </h2>
        </div>

        <!-- Projects Slider -->
        <div class="relative px-12">
            <!-- Swiper Container -->
            <div class="swiper projectsSwiper">
                <div class="swiper-wrapper pb-4">
                    <!-- Slide 1: Complete Roof Replacement -->
                    <div class="swiper-slide">
                        <div class="group cursor-pointer">
                            <div class="relative h-64 rounded-2xl overflow-hidden shadow-xl">
                                <img src="{{ asset('images/services/p1.jpg') }}" alt="Complete Roof Replacement"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">

                                <!-- Gradient Overlay - Darker on Hover -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent group-hover:from-black/80 group-hover:via-black/50 transition-all duration-300">
                                </div>

                                <!-- Content -->
                                <div class="absolute bottom-0 left-0 right-0 p-3 text-white">
                                    <!-- Title - Always Visible -->
                                    <h3 class="text-lg font-bold mb-2 transition-all duration-300">Complete Roof
                                        Replacement</h3>

                                    <!-- Location - Always Visible but moves up on hover -->
                                    <div
                                        class="flex items-center gap-2 text-sm mb-2 transition-all duration-300 group-hover:mb-4">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <span>Heath, OH</span>
                                    </div>

                                    <!-- Hover Details - Hidden by default -->
                                    <div
                                        class="overflow-hidden max-h-0 group-hover:max-h-40 transition-all duration-300">
                                        <p class="text-sm text-white/90 mb-4">
                                            Professional repair services to extend your roof's life. No replacement when
                                            needed.
                                        </p>
                                        <a href="#"
                                            class="inline-flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white font-semibold px-6 py-2.5 rounded-full transition-colors duration-300 text-sm">
                                            View Details
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2: Metal Roof Installation -->
                    <div class="swiper-slide">
                        <div class="group cursor-pointer">
                            <div class="relative h-64 rounded-2xl overflow-hidden shadow-xl">
                                <img src="{{ asset('images/services/p2.jpg') }}" alt="Metal Roof Installation"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">

                                <!-- Gradient Overlay - Darker on Hover -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent group-hover:from-black/80 group-hover:via-black/50 transition-all duration-300">
                                </div>

                                <!-- Content -->
                                <div class="absolute bottom-0 left-0 right-0 p-3 text-white">
                                    <!-- Title - Always Visible -->
                                    <h3 class="text-lg font-bold mb-2 transition-all duration-300">Metal Roof
                                        Installation</h3>

                                    <!-- Location - Always Visible but moves up on hover -->
                                    <div
                                        class="flex items-center gap-2 text-sm mb-2 transition-all duration-300 group-hover:mb-4">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <span>Heath, OH</span>
                                    </div>

                                    <!-- Hover Details - Hidden by default -->
                                    <div
                                        class="overflow-hidden max-h-0 group-hover:max-h-40 transition-all duration-300">
                                        <p class="text-sm text-white/90 mb-4">
                                            Professional repair services to extend your metal roof's life. No
                                            replacement when
                                            needed.
                                        </p>
                                        <a href="#"
                                            class="inline-flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white font-semibold px-6 py-2.5 rounded-full transition-colors duration-300 text-sm">
                                            View Details
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3: Siding -->
                    <div class="swiper-slide">
                        <div class="group cursor-pointer">
                            <div class="relative h-64 rounded-2xl overflow-hidden shadow-xl">
                                <img src="{{ asset('images/services/p3.jpg') }}" alt="Siding"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">

                                <!-- Gradient Overlay - Darker on Hover -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent group-hover:from-black/80 group-hover:via-black/50 transition-all duration-300">
                                </div>

                                <!-- Content -->
                                <div class="absolute bottom-0 left-0 right-0 p-3 text-white">
                                    <!-- Title - Always Visible -->
                                    <h3 class="text-lg font-bold mb-2 transition-all duration-300">Siding</h3>

                                    <!-- Location - Always Visible but moves up on hover -->
                                    <div
                                        class="flex items-center gap-2 text-sm mb-2 transition-all duration-300 group-hover:mb-4">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <span>Newark, OH</span>
                                    </div>

                                    <!-- Hover Details - Hidden by default -->
                                    <div
                                        class="overflow-hidden max-h-0 group-hover:max-h-40 transition-all duration-300">
                                        <p class="text-sm text-white/90 mb-4">
                                            Professional repair services to extend your siding's life. No replacement
                                            when
                                            needed.
                                        </p>
                                        <a href="#"
                                            class="inline-flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white font-semibold px-6 py-2.5 rounded-full transition-colors duration-300 text-sm">
                                            View Details
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 4: Gutters Replacement -->
                    <div class="swiper-slide">
                        <div class="group cursor-pointer">
                            <div class="relative h-64 rounded-2xl overflow-hidden shadow-xl">
                                <img src="{{ asset('images/services/p4.jpg') }}" alt="Gutters Replacement"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">

                                <!-- Gradient Overlay - Darker on Hover -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent group-hover:from-black/80 group-hover:via-black/50 transition-all duration-300">
                                </div>

                                <!-- Content -->
                                <div class="absolute bottom-0 left-0 right-0 p-3 text-white">
                                    <!-- Title - Always Visible -->
                                    <h3 class="text-lg font-bold mb-2 transition-all duration-300">Gutters Replacement
                                    </h3>

                                    <!-- Location - Always Visible but moves up on hover -->
                                    <div
                                        class="flex items-center gap-2 text-sm mb-2 transition-all duration-300 group-hover:mb-4">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <span>Newark, OH</span>
                                    </div>

                                    <!-- Hover Details - Hidden by default -->
                                    <div
                                        class="overflow-hidden max-h-0 group-hover:max-h-40 transition-all duration-300">
                                        <p class="text-sm text-white/90 mb-4">
                                            Professional repair services to extend your gutters' life. No replacement
                                            when
                                            needed.
                                        </p>
                                        <a href="#"
                                            class="inline-flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white font-semibold px-6 py-2.5 rounded-full transition-colors duration-300 text-sm">
                                            View Details
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 5: Gutter Replacement -->
                    <div class="swiper-slide">
                        <div class="group cursor-pointer">
                            <div class="relative h-64 rounded-2xl overflow-hidden shadow-xl">
                                <img src="{{ asset('images/services/p4.jpg') }}" alt="Gutter  Replacement"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">

                                <!-- Gradient Overlay - Darker on Hover -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent group-hover:from-black/80 group-hover:via-black/50 transition-all duration-300">
                                </div>

                                <!-- Content -->
                                <div class="absolute bottom-0 left-0 right-0 p-3 text-white">
                                    <!-- Title - Always Visible -->
                                    <h3 class="text-lg font-bold mb-2 transition-all duration-300">Gutters Replacement
                                    </h3>

                                    <!-- Location - Always Visible but moves up on hover -->
                                    <div
                                        class="flex items-center gap-2 text-sm mb-2 transition-all duration-300 group-hover:mb-4">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <span>Newark, OH</span>
                                    </div>

                                    <!-- Hover Details - Hidden by default -->
                                    <div
                                        class="overflow-hidden max-h-0 group-hover:max-h-40 transition-all duration-300">
                                        <p class="text-sm text-white/90 mb-4">
                                            Professional repair services to extend your gutters' life. No replacement
                                            when
                                            needed.
                                        </p>
                                        <a href="#"
                                            class="inline-flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white font-semibold px-6 py-2.5 rounded-full transition-colors duration-300 text-sm">
                                            View Details
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Navigation Arrows -->
            <div
                class="swiper-button-prev !w-12 !h-12 !bg-white !rounded-full !shadow-lg after:!text-sm after:!font-bold !text-indigo-900 hover:!bg-gray-50 !transition-all !left-0">
            </div>
            <div
                class="swiper-button-next !w-12 !h-12 !bg-white !rounded-full !shadow-lg after:!text-sm after:!font-bold !text-indigo-900 hover:!bg-gray-50 !transition-all !right-0">
            </div>
        </div>

        <!-- View All Button -->
        <div class="text-center mt-12">
            <a href="#"
                class="inline-flex items-center gap-2 bg-white hover:bg-gray-50 text-indigo-900 font-bold px-8 py-4 rounded-full transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105">
                View All Projects
                <svg class="w-7 h-7 -rotate-45 bg-indigo-900 text-white p-1 rounded-full" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper('.projectsSwiper', {
            slidesPerView: 1,
            spaceBetween: 24,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 24,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 24,
                },
                1280: {
                    slidesPerView: 4,
                    spaceBetween: 24,
                },
            },
        });
    });
</script>
