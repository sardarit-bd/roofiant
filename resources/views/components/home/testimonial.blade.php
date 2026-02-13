    <section class="py-12 sm:py-16 lg:py-24 px-4 sm:px-6 lg:px-8 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">

                <!-- Left Column - Team Image -->
                <div class="order-2 lg:order-1">
                    <div class="rounded-3xl overflow-hidden shadow-2xl h-full min-h-[400px] lg:min-h-[620px]">
                        <img src="{{ asset('images/team.jpg') }}" alt="Happy Team"
                            class="w-full h-full lg:min-h-[620px] object-cover object-center">
                    </div>
                </div>

                <!-- Right Column - Reviews -->
                <div class="order-1 lg:order-2 lg:text-right">
                    <!-- Badge -->
                    <div
                        class="inline-flex items-center gap-2 bg-blue-50 text-blue-900 px-4 py-2 rounded-full text-xs sm:text-sm font-bold mb-4 sm:mb-6 uppercase tracking-wide">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                        <span>CLIENT STORIES</span>
                    </div>

                    <!-- Heading -->
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl xl:text-5xl font-extrabold mb-4 sm:mb-6 leading-tight">
                        <span class="text-blue-900">OUR </span>
                        <span class="text-red-700">5-STAR </span>
                        <span class="text-blue-900">REVIEWS</span>
                    </h2>

                    <!-- See All Reviews Button -->
                    <div class="mb-6 sm:mb-8">
                        <a href="/reviews"
                            class="inline-flex items-center px-5 sm:px-6 py-2.5 sm:py-3 bg-blue-900 text-white rounded-full hover:bg-blue-800 transition-all shadow-lg hover:shadow-xl font-semibold text-sm sm:text-base">
                            See All Reviews
                            <span class="ml-2 bg-white text-blue-900 p-1 sm:p-1.5 rounded-full">
                                <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3">
                                    </path>
                                </svg>
                            </span>
                        </a>
                    </div>

                    <!-- Quote Icon -->
                    <div class="mb-2 sm:mb-3">
                        <svg class="w-12 h-12 sm:w-16 sm:h-16 lg:w-20 lg:h-20 text-blue-900 opacity-20"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                        </svg>
                    </div>

                    <!-- Carousel Container -->
                    <div class="relative overflow-hidden">
                        <!-- Reviews Carousel - Shows 3 cards at once -->
                        <div id="reviewsCarousel"
                            class="carousel-container flex gap-2 sm:gap-2 transition-transform duration-500 ease-out">

                            <!-- Review Card 1 -->
                            <div class="flex-shrink-0 w-[calc(100%/2-0.5rem)] sm:w-[calc(100%/2-0.5rem)]">

                                <div
                                    class="bg-white rounded-xl sm:rounded-2xl p-5 sm:p-6 lg:p-8 shadow-lg hover:shadow-xl transition-shadow">
                                    <!-- Stars and Google -->
                                    <div class="flex items-center justify-between mb-3 sm:mb-4">
                                        <div class="flex gap-0.5 sm:gap-1">
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </div>
                                        <svg class="w-5 h-5 sm:w-6 sm:h-6 flex-shrink-0" viewBox="0 0 24 24">
                                            <path fill="#4285F4"
                                                d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                                            <path fill="#34A853"
                                                d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                                            <path fill="#FBBC05"
                                                d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" />
                                            <path fill="#EA4335"
                                                d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" />
                                        </svg>
                                    </div>

                                    <!-- Review Text -->
                                    <p class="text-gray-700 text-sm sm:text-base mb-4 sm:mb-6 leading-relaxed">
                                        "After a storm damaged our roof, Roofiant responded immediately. Highly
                                        recommend!"
                                    </p>

                                    <!-- Reviewer Info -->
                                    <div class="flex items-center gap-2 sm:gap-3">
                                        <div
                                            class="w-9 h-9 sm:w-10 sm:h-10 lg:w-12 lg:h-12 rounded-full bg-blue-900 flex items-center justify-center text-white font-bold text-base sm:text-lg flex-shrink-0">
                                            M
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-900 text-sm sm:text-base">Michael Chen</p>
                                            <p class="text-gray-500 text-xs sm:text-sm">1 week ago</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Review Card 2 -->
                            <div class="flex-shrink-0 w-[calc(100%/2-0.5rem)] sm:w-[calc(100%/2-0.5rem)]">
                                <div
                                    class="bg-white rounded-xl sm:rounded-2xl p-5 sm:p-6 lg:p-8 shadow-lg hover:shadow-xl transition-shadow">
                                    <!-- Stars and Google -->
                                    <div class="flex items-center justify-between mb-3 sm:mb-4">
                                        <div class="flex gap-0.5 sm:gap-1">
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </div>
                                        <svg class="w-5 h-5 sm:w-6 sm:h-6 flex-shrink-0" viewBox="0 0 24 24">
                                            <path fill="#4285F4"
                                                d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                                            <path fill="#34A853"
                                                d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                                            <path fill="#FBBC05"
                                                d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" />
                                            <path fill="#EA4335"
                                                d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" />
                                        </svg>
                                    </div>

                                    <!-- Review Text -->
                                    <p class="text-gray-700 text-sm sm:text-base mb-4 sm:mb-6 leading-relaxed">
                                        "Exceptional service from start to finish! The Roofiant team replaced our entire
                                        roof."
                                    </p>

                                    <!-- Reviewer Info -->
                                    <div class="flex items-center gap-2 sm:gap-3">
                                        <div
                                            class="w-9 h-9 sm:w-10 sm:h-10 lg:w-12 lg:h-12 rounded-full bg-red-700 flex items-center justify-center text-white font-bold text-base sm:text-lg flex-shrink-0">
                                            S
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-900 text-sm sm:text-base">Sarah Johnson</p>
                                            <p class="text-gray-500 text-xs sm:text-sm">1 week ago</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Review Card 3 -->
                            <div class="flex-shrink-0 w-[calc(100%/2-0.5rem)] sm:w-[calc(100%/2-0.5rem)]">
                                <div
                                    class="bg-white rounded-xl sm:rounded-2xl p-5 sm:p-6 lg:p-8 shadow-lg hover:shadow-xl transition-shadow">
                                    <!-- Stars and Google -->
                                    <div class="flex items-center justify-between mb-3 sm:mb-4">
                                        <div class="flex gap-0.5 sm:gap-1">
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </div>
                                        <svg class="w-5 h-5 sm:w-6 sm:h-6 flex-shrink-0" viewBox="0 0 24 24">
                                            <path fill="#4285F4"
                                                d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                                            <path fill="#34A853"
                                                d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                                            <path fill="#FBBC05"
                                                d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" />
                                            <path fill="#EA4335"
                                                d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" />
                                        </svg>
                                    </div>

                                    <!-- Review Text -->
                                    <p class="text-gray-700 text-sm sm:text-base mb-4 sm:mb-6 leading-relaxed">
                                        "Professional, reliable, and excellent quality work. Couldn't be happier with
                                        the results!"
                                    </p>

                                    <!-- Reviewer Info -->
                                    <div class="flex items-center gap-2 sm:gap-3">
                                        <div
                                            class="w-9 h-9 sm:w-10 sm:h-10 lg:w-12 lg:h-12 rounded-full bg-green-600 flex items-center justify-center text-white font-bold text-base sm:text-lg flex-shrink-0">
                                            R
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-900 text-sm sm:text-base">Robert Williams</p>
                                            <p class="text-gray-500 text-xs sm:text-sm">2 weeks ago</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Review Card 3 -->
                            <div class="flex-shrink-0 w-[calc(100%/2-0.5rem)] sm:w-[calc(100%/2-0.5rem)]">
                                <div
                                    class="bg-white rounded-xl sm:rounded-2xl p-5 sm:p-6 lg:p-8 shadow-lg hover:shadow-xl transition-shadow">
                                    <!-- Stars and Google -->
                                    <div class="flex items-center justify-between mb-3 sm:mb-4">
                                        <div class="flex gap-0.5 sm:gap-1">
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </div>
                                        <svg class="w-5 h-5 sm:w-6 sm:h-6 flex-shrink-0" viewBox="0 0 24 24">
                                            <path fill="#4285F4"
                                                d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                                            <path fill="#34A853"
                                                d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                                            <path fill="#FBBC05"
                                                d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" />
                                            <path fill="#EA4335"
                                                d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" />
                                        </svg>
                                    </div>

                                    <!-- Review Text -->
                                    <p class="text-gray-700 text-sm sm:text-base mb-4 sm:mb-6 leading-relaxed">
                                        "Professional, reliable, and excellent quality work. Couldn't be happier with
                                        the results!"
                                    </p>

                                    <!-- Reviewer Info -->
                                    <div class="flex items-center gap-2 sm:gap-3">
                                        <div
                                            class="w-9 h-9 sm:w-10 sm:h-10 lg:w-12 lg:h-12 rounded-full bg-green-600 flex items-center justify-center text-white font-bold text-base sm:text-lg flex-shrink-0">
                                            R
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-900 text-sm sm:text-base">Robert Williams</p>
                                            <p class="text-gray-500 text-xs sm:text-sm">2 weeks ago</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Review Card 3 -->
                            <div class="flex-shrink-0 w-[calc(100%/2)] sm:w-[calc(100%/2)]">
                                <div
                                    class="bg-white rounded-xl sm:rounded-2xl p-5 sm:p-6 lg:p-8 shadow-lg hover:shadow-xl transition-shadow">
                                    <!-- Stars and Google -->
                                    <div class="flex items-center justify-between mb-3 sm:mb-4">
                                        <div class="flex gap-0.5 sm:gap-1">
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </div>
                                        <svg class="w-5 h-5 sm:w-6 sm:h-6 flex-shrink-0" viewBox="0 0 24 24">
                                            <path fill="#4285F4"
                                                d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                                            <path fill="#34A853"
                                                d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                                            <path fill="#FBBC05"
                                                d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" />
                                            <path fill="#EA4335"
                                                d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" />
                                        </svg>
                                    </div>

                                    <!-- Review Text -->
                                    <p class="text-gray-700 text-sm sm:text-base mb-4 sm:mb-6 leading-relaxed">
                                        "Professional, reliable, and excellent quality work. Couldn't be happier with
                                        the results!"
                                    </p>

                                    <!-- Reviewer Info -->
                                    <div class="flex items-center gap-2 sm:gap-3">
                                        <div
                                            class="w-9 h-9 sm:w-10 sm:h-10 lg:w-12 lg:h-12 rounded-full bg-green-600 flex items-center justify-center text-white font-bold text-base sm:text-lg flex-shrink-0">
                                            R
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-900 text-sm sm:text-base">Robert Williams</p>
                                            <p class="text-gray-500 text-xs sm:text-sm">2 weeks ago</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Navigation Controls -->
                        <div class="flex items-center justify-between mt-6 sm:mt-8">
                            <!-- Left Arrow -->
                            <button id="prevBtn"
                                class="w-9 h-9 sm:w-10 sm:h-10 lg:w-12 lg:h-12 rounded-full border-2 border-gray-300 flex items-center justify-center hover:border-blue-900 hover:bg-blue-900 hover:text-white transition-all flex-shrink-0">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7" />
                                </svg>
                            </button>

                            <!-- Dots -->
                            <div class="flex gap-1.5 sm:gap-2">
                                <button class="carousel-dot w-2 h-2 rounded-full bg-gray-300 active"
                                    data-index="0"></button>
                                <button class="carousel-dot w-2 h-2 rounded-full bg-gray-300" data-index="1"></button>
                                <button class="carousel-dot w-2 h-2 rounded-full bg-gray-300" data-index="2"></button>
                            </div>

                            <!-- Right Arrow -->
                            <button id="nextBtn"
                                class="w-9 h-9 sm:w-10 sm:h-10 lg:w-12 lg:h-12 rounded-full border-2 border-gray-300 flex items-center justify-center bg-blue-900 text-white hover:bg-blue-800 transition-all shadow-lg flex-shrink-0">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </button>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <script>
        const carousel = document.getElementById('reviewsCarousel');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const dots = document.querySelectorAll('.carousel-dot');
        let currentIndex = 0;

        function updateCarousel() {
            // Use transform for smooth sliding
            carousel.style.transform = `translateX(-${currentIndex * 100}%)`;

            // Update dots
            dots.forEach((dot, index) => {
                if (index === currentIndex) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });

            // Update button styles
            if (currentIndex === 0) {
                prevBtn.classList.remove('bg-blue-900', 'text-white');
                prevBtn.classList.add('border-gray-300');
            } else {
                prevBtn.classList.add('bg-blue-900', 'text-white');
                prevBtn.classList.remove('border-gray-300');
            }

            if (currentIndex === 2) {
                nextBtn.classList.remove('bg-blue-900', 'text-white');
                nextBtn.classList.add('border-gray-300');
            } else {
                nextBtn.classList.add('bg-blue-900', 'text-white');
                nextBtn.classList.remove('border-gray-300');
            }
        }

        nextBtn.addEventListener('click', () => {
            if (currentIndex < 2) {
                currentIndex++;
                updateCarousel();
            }
        });

        prevBtn.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateCarousel();
            }
        });

        dots.forEach((dot) => {
            dot.addEventListener('click', () => {
                currentIndex = parseInt(dot.dataset.index);
                updateCarousel();
            });
        });

        // Touch support for mobile
        let touchStartX = 0;
        let touchEndX = 0;

        carousel.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        });

        carousel.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            if (touchStartX - touchEndX > 50 && currentIndex < 2) {
                currentIndex++;
                updateCarousel();
            } else if (touchEndX - touchStartX > 50 && currentIndex > 0) {
                currentIndex--;
                updateCarousel();
            }
        });

        // Initialize carousel
        updateCarousel();
    </script>
