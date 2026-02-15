<section class="py-12 sm:py-16 lg:py-24 bg-[#f9fafb]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Add padding-top to accommodate the extended image -->
        <div class="lg:pt-32">
            <div class="bg-white rounded-xl shadow-xl overflow-hidden relative">
                <div class="flex flex-col lg:flex-row">

                    <!-- Left Content -->
                    <div
                        class="w-full lg:w-1/2 order-2 lg:order-1 p-6 sm:p-8 lg:p-12 xl:p-16 flex flex-col justify-center">
                        <h2
                            class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-[#2b2f77] mb-4 sm:mb-6 leading-tight">
                            THE ROOFIANT <span class="text-[#b21f2d]">PROMISE</span>
                        </h2>

                        <p class="text-gray-600 text-sm sm:text-base lg:text-lg leading-relaxed mb-4 sm:mb-6">
                            We promise to recommend only what your home truly needs – nothing more, nothing less.
                            You'll get clear, honest communication at every step, so the process feels simple and
                            stress-free from start to finish. Our standard is to over-deliver, leaving you with
                            exceptional results and a lasting impression of real value, trust, and care for your
                            home – and to build a relationship that doesn't end when the job is done – we're here
                            for your home today, tomorrow, and years from now.
                        </p>

                        <p class="text-[#2b2f77] font-semibold mb-6 sm:mb-8 text-sm sm:text-base">
                            - Chad Yochens, Owner/CEO
                        </p>

                        <!-- Button -->
                        <div class="flex justify-start">
                            <a href="/contact"
                                class="inline-flex items-center px-5 sm:px-6 lg:px-8 py-2.5 sm:py-3 lg:py-4 bg-[#2b2f77] text-white rounded-full hover:bg-[#1f2359] transition-all shadow-lg hover:shadow-xl font-semibold text-sm sm:text-base">
                                Meet Our Team
                                <span class="ml-2 bg-white text-[#2b2f77] p-1 sm:p-1.5 rounded-full -rotate-45">
                                    <svg class="w-3 h-3 sm:w-4 sm:h-4" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" stroke-width="2.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>

                    <!-- Right Image -->
                    <div class="w-full lg:w-1/2 order-1 lg:order-2 relative">
                        <!-- Mobile/Tablet Image (normal) -->
                        <div class="lg:hidden">
                            <img src="{{ asset('images/promise.png') }}" alt="Chad Yochens"
                                class="w-full h-64 sm:h-80 object-cover object-center">
                        </div>

                        <!-- Desktop Image (extends above card) -->
                        <div class="hidden lg:block absolute bottom-0 right-[-100px] w-full h-full">
                            <img src="{{ asset('images/promise.png') }}" alt="Chad Yochens"
                                class="absolute bottom-0 right-0 h-[600px] xl:h-[700px] w-auto max-w-none object-contain object-bottom">
                        </div>
                    </div>

                </div>

                <!-- Red bottom line accent -->
                <div class="absolute bottom-0 left-0 right-0 h-1 bg-[#b21f2d]"></div>
            </div>
        </div>
    </div>
</section>
