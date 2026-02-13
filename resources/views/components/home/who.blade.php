    <section class="py-12 sm:py-16 lg:py-24 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 xl:gap-16 items-center">

                <!-- Left Column - Images -->
                <div class="relative h-[500px] sm:h-[600px] lg:h-[650px]">
                    <!-- Main Image - Worker (Top Left, 60% width, 75% height) -->
                    <div class="absolute top-0 left-0 w-[80%] h-[95%] rounded-3xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/mistri.jpg') }}" alt="Construction Worker"
                            class="w-full h-full object-cover">
                    </div>

                    <!-- Overlapping Video Thumbnail (Bottom Right, 65% width, 60% height) -->
                    <div class="absolute bottom-20 right-0 w-[60%] h-[40%]">
                        <div class="relative rounded-3xl overflow-hidden shadow-2xl border-8 border-white h-full">
                            <img src="{{ asset('images/videoroof.jpg') }}" alt="Dark Roof"
                                class="w-full h-full object-cover">

                            <!-- Play Button Overlay -->
                            <div class="absolute inset-0 flex items-center justify-center bg-black/20">
                                <button
                                    class="w-16 h-16 sm:w-20 sm:h-20 bg-blue-900 rounded-full flex items-center justify-center hover:bg-blue-800 transition-all hover:scale-110 shadow-xl">
                                    <svg class="w-6 h-6 sm:w-8 sm:h-8 text-white ml-1" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Content -->
                <div class="lg:pl-8">
                    <!-- Badge -->
                    <div
                        class="inline-flex items-center gap-2 bg-blue-50 text-blue-900 px-4 py-2 rounded-full text-xs sm:text-sm font-bold mb-4 sm:mb-6 uppercase tracking-wide">
                        <i class="fas fa-user-tie"></i>
                        <span class="text-blue-900 font-bold text-sm uppercase tracking-wide">Who We Are</span>
                    </div>

                    <!-- Heading -->
                    <h2 class="text-4xl sm:text-5xl lg:text-5xl xl:text-5xl font-extrabold mb-6 leading-tight">
                        <span class="text-blue-900">SERVING </span>
                        <span class="text-red-700">ROOFIANT</span>
                        <br>
                        <span class="text-blue-900">WITH INTEGRITY</span>
                    </h2>

                    <!-- Description -->
                    <p class="text-gray-600 text-base sm:text-lg mb-8 leading-relaxed">
                        Our reputation is built on integrity, transparent and unwavering customer care, ensuring you
                        partner with a team highly motivated to exceed your expectations.
                    </p>

                    <!-- Features List -->
                    <div class="space-y-4 mb-8">
                        <div class="flex items-start gap-3">
                            <div
                                class="flex-shrink-0 w-6 h-6 sm:w-7 sm:h-7 bg-blue-900 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="text-gray-800 text-sm sm:text-base font-medium">
                                Licensed Roofing Company & $2MM Homeowner Protection
                            </p>
                        </div>

                        <div class="flex items-start gap-3">
                            <div
                                class="flex-shrink-0 w-6 h-6 sm:w-7 sm:h-7 bg-blue-900 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="text-gray-800 text-sm sm:text-base font-medium">
                                "5-Star" Customer Rated & BBB "A" Rated Accredited
                            </p>
                        </div>

                        <div class="flex items-start gap-3">
                            <div
                                class="flex-shrink-0 w-6 h-6 sm:w-7 sm:h-7 bg-blue-900 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="text-gray-800 text-sm sm:text-base font-medium">
                                Certified OC Installers & Google Guaranteed Company
                            </p>
                        </div>

                        <div class="flex items-start gap-3">
                            <div
                                class="flex-shrink-0 w-6 h-6 sm:w-7 sm:h-7 bg-blue-900 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="text-gray-800 text-sm sm:text-base font-medium">
                                FREE Inspections & No- Obligation Estimates.
                            </p>
                        </div>

                        <div class="flex items-start gap-3">
                            <div
                                class="flex-shrink-0 w-6 h-6 sm:w-7 sm:h-7 bg-blue-900 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="text-gray-800 text-sm sm:text-base font-medium">
                                Consumer reports highest rated roofing solutions
                            </p>
                        </div>
                    </div>

                    <!-- CTA Button -->
                    <div>
                        <a href="/contact"
                            class="inline-flex items-center px-6 py-3 bg-blue-900 text-white rounded-full hover:bg-blue-800 transition-colors font-semibold shadow-lg hover:shadow-xl">
                            Learn More
                            <span class="ml-2 bg-white text-blue-900 p-1.5 rounded-full rotate-320">
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
