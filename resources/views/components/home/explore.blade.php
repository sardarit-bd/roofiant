<section class="relative py-12 sm:py-16 lg:py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="relative flex flex-col lg:flex-row items-center w-full mx-auto">

            <!-- LEFT — Image -->
            <div class="w-full lg:w-1/2 relative">
                <div class="relative h-[320px] sm:h-[380px] lg:h-[460px]">

                    <div class="absolute inset-0 overflow-hidden"
                        style="clip-path: polygon(0 0, 100% 0, 86% 100%, 0 100%)">

                        <img src="{{ asset('images/explore.jpg') }}" alt="Blue Roofing Materials"
                            class="mt-22 w-full h-70 object-cover object-center transform scale-105 object-cover">
                    </div>

                </div>
            </div>


            <!-- RIGHT — Content -->
            <div class="w-full lg:w-2/2 lg:-ml-28 xl:-ml-32 relative z-10 flex items-stretch mt-8 lg:mt-0">

                <!-- Triangle wedge -->
                <div class="hidden lg:block w-30 sm:w-40 lg:w-48 xl:w-32 bg-white"
                    style="clip-path: polygon(100% 0, 0 100%, 100% 100%)">
                </div>

                <!-- Card -->
                <div class="bg-white p-8 sm:p-10 lg:p-12 shadow-2xl max-w-5xl ml-[-1px]">

                    <!-- Heading -->
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl xl:text-5xl font-extrabold mb-4 sm:mb-6 leading-tight">
                        <span class="text-blue-900">EXPLORE OUR EXCLUSIVE </span>
                        <span class="text-red-700">MATERIALS & PRODUCTS</span>
                    </h2>

                    <!-- Description -->
                    <p class="text-sm sm:text-base lg:text-lg text-gray-600 mb-6 sm:mb-8 leading-relaxed">
                        Our reputation is built on integrity, transparent and unwavering customer care,
                        ensuring you partner with a team highly motivated to exceed your expectations.
                    </p>

                    <!-- CTA -->
                    <a href="/materials"
                        class="inline-flex items-center gap-3
                   px-6 sm:px-7 py-3 sm:py-3.5
                   bg-blue-900 text-white rounded-full
                   hover:bg-blue-800 transition-all
                   shadow-lg hover:shadow-xl
                   font-semibold text-sm sm:text-base">
                        View Materials & Products
                        <span class="bg-white text-blue-900 p-1.5 rounded-full flex-shrink-0 rotate-320">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3">
                                </path>
                            </svg>
                        </span>
                    </a>

                </div>

            </div>

        </div>
    </div>
</section>
