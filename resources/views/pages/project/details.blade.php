<x-site-layout title="Projects | roofiant">
    <x-common.bread-crumb title="Complete Roof Replacement" subtitle="Home > Projects > Complete Roof Replacement" />
    {{-- contents start here --}}
    <div class="min-h-screen bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

            <div class="h-fit grid grid-cols-1 lg:grid-cols-3 gap-8">

                <!-- Main Content (Left - 2/3 width) -->
                <div class="lg:col-span-2 space-y-8">

                    <!-- Main Image -->
                    <div class="relative rounded-xl overflow-hidden shadow-lg">
                        <img src="{{ asset('images/projects/p (1).png') }}" alt="Complete Roof Replacement"
                            class="w-full h-auto object-cover">
                        <button
                            class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-gray-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-white transition-colors flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                            </svg>
                            Share
                        </button>
                    </div>

                    <!-- Thumbnail Images -->
                    <div class="flex gap-4">
                        <div class="w-20 h-20 rounded-lg overflow-hidden border-2 border-indigo-600 cursor-pointer">
                            <img src="{{ asset('images/projects/p (1).png') }}" alt="Thumbnail 1"
                                class="w-full h-full object-cover">
                        </div>
                        <div
                            class="w-20 h-20 rounded-lg overflow-hidden border-2 border-transparent hover:border-gray-300 cursor-pointer transition-colors">
                            <img src="{{ asset('images/projects/p (2).png') }}" alt="Thumbnail 2"
                                class="w-full h-full object-cover">
                        </div>
                    </div>

                    <!-- Breadcrumb -->
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <a href="#" class="hover:text-indigo-900">Home</a>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        <a href="#" class="hover:text-indigo-900">Projects</a>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        <span class="text-gray-900">Project Details</span>
                    </div>

                    <!-- Title -->
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold">
                        <span class="text-indigo-900">COMPLETE</span>
                        <span class="text-red-700">ROOF REPLACEMENT</span>
                    </h1>

                    <!-- Meta Information -->
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>Newark, OH</span>
                        <span class="mx-2">|</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span>January 2025</span>
                    </div>

                    <!-- Info Cards -->
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                        <div class="bg-white p-4 rounded-lg">
                            <div class="text-xs text-gray-500 mb-1">Client</div>
                            <div class="text-sm font-semibold text-gray-900">Michael Thompson</div>
                        </div>
                        <div class="bg-white p-4 rounded-lg">
                            <div class="text-xs text-gray-500 mb-1">Date</div>
                            <div class="text-sm font-semibold text-gray-900">2025</div>
                        </div>
                        <div class="bg-white p-4 rounded-lg">
                            <div class="text-xs text-gray-500 mb-1">Category</div>
                            <div class="text-sm font-semibold text-gray-900">Metal Roofing</div>
                        </div>
                        <div class="bg-white p-4 rounded-lg">
                            <div class="text-xs text-gray-500 mb-1">Location</div>
                            <div class="text-sm font-semibold text-gray-900">Heath, OH</div>
                        </div>
                    </div>

                    <!-- Project Description -->
                    <div class="bg-white rounded-xl p-6 sm:p-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Project Description</h2>
                        <div class="space-y-4 text-gray-700 text-[18px] leading-relaxed">
                            <p>
                                This project showcases our expertise in large-scale roofing solution that would include
                                a full replacement of the existing outdated asphalt shingles material using without
                                seam, gray sheet installing seam metal roofing for its durability, energy efficiency,
                                clean and cost-effective solution.
                            </p>
                            <p>
                                This homeowner wanted a long-lasting, energy-efficient solution and chose our premium
                                standing seam metal roofing system.The result is stunning, modern-look both for ROI's
                                north coast and for the home structure longevity."
                            </p>
                        </div>
                    </div>

                    <!-- The Challenge of Project -->
                    <div class="bg-white rounded-xl p-6 sm:p-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">The Challenge of Project</h2>
                        <p class="text-gray-700 leading-relaxed mb-6 text-[18px]">
                            Installing metal roofing requires precision and expertise. the challenge was
                            ensuring proper alignment and fastening techniques, creating custom flashings for
                            the unique architecture features and mitigating noise transmission issues with
                            proper insulation layers.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <div class="space-y-3">
                                    <div class="flex items-start gap-3">
                                        <svg class="w-5 h-5 text-red-600 flex-shrink-0 mt-0.5" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span class="text-sm text-gray-700">Managing accurate installation for venting
                                            systems</span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <svg class="w-5 h-5 text-red-600 flex-shrink-0 mt-0.5" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span class="text-sm text-gray-700">Working steep movement to prevent moisture
                                            damage</span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <svg class="w-5 h-5 text-red-600 flex-shrink-0 mt-0.5" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span class="text-sm text-gray-700">Coordinating crew access and safety
                                            protocols</span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <svg class="w-5 h-5 text-red-600 flex-shrink-0 mt-0.5" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span class="text-sm text-gray-700">Handling full range of metal panel
                                            specifications</span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <svg class="w-5 h-5 text-red-600 flex-shrink-0 mt-0.5" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span class="text-sm text-gray-700">Ensuring attention temperature
                                            changes</span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <svg class="w-5 h-5 text-red-600 flex-shrink-0 mt-0.5" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span class="text-sm text-gray-700">Implementing skilled edges in all valley
                                            and penetration</span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <svg class="w-5 h-5 text-red-600 flex-shrink-0 mt-0.5" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span class="text-sm text-gray-700">Following strict safety standards during
                                            installation</span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <svg class="w-5 h-5 text-red-600 flex-shrink-0 mt-0.5" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span class="text-sm text-gray-700">Carrying certification to area the metal
                                            roof</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <img src="{{ asset('images/projects/p (3).png') }}" alt="Challenge Image"
                                    class="w-full h-auto rounded-lg shadow-md">
                            </div>
                        </div>
                    </div>

                    <!-- The Final View of Project -->
                    <div class="bg-white rounded-xl p-6 sm:p-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">The Final View of Project</h2>
                        <p class="text-gray-700 text-[18px] leading-relaxed">
                            This completed build not only top-level for longevity's expectations. This sleek modern
                            appearance has transformed the home's exterior while the reflective properties of the metal
                            roof also greatly boosted energy efficiency. The standing seam system provides superior
                            waterproofing and requires minimal roof maintenance making it a solid decades to come.
                        </p>
                    </div>

                    <!-- What We Did -->
                    <div class="bg-white rounded-xl p-6 sm:p-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">What We Did</h2>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-[18px] text-gray-700">Removal of old asphalt shingles</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-[18px] text-gray-700">Installation of synthetic roof
                                    underlayment</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-[18px] text-gray-700">Installation of specialized underlayment for
                                    metal
                                    roofing</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-[18px] text-gray-700">Expert fabrication of all the trims
                                    panels</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-[18px] text-gray-700">Proper installation of all valley
                                    details</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-[18px] text-gray-700">Complete ventilation system upgrade</span>
                            </li>
                        </ul>
                    </div>

                </div>

                <!-- Sidebar (Right - 1/3 width) -->
                <div class="lg:col-span-1 space-y-6 sticky top-22 h-fit">

                    <!-- Main Services Card -->
                    <div class="bg-white rounded-xl p-6 shadow-md">
                        <h3 class="text-xl font-bold text-gray-900 mb-6">Main Services</h3>
                        <ul class="space-y-3">
                            <li>
                                <a href="#"
                                    class="flex items-center justify-between text-sm text-gray-700 hover:text-indigo-900 py-2 border-b border-gray-100">
                                    <span>Roof Renovation</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-between text-sm text-gray-700 hover:text-indigo-900 py-2 border-b border-gray-100">
                                    <span>Roof Installation</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </li>
                            <li class="bg-indigo-900 -mx-6 px-6">
                                <a href="#" class="flex items-center justify-between text-sm text-white py-3">
                                    <span class="font-semibold">Detailed Roofing</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-between text-sm text-gray-700 hover:text-indigo-900 py-2">
                                    <span>Roof Repair</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Need Help Card -->
                    <div
                        class="bg-indigo-900 rounded-xl p-6 shadow-md text-center text-white relative overflow-hidden">
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold mb-2">Need Help Call Here</h3>
                            <a href="tel:7404444245" class="text-2xl font-bold mb-6 block">(740) 444-4245</a>
                            <a href="#"
                                class="inline-block bg-red-600 hover:bg-red-700 text-white font-bold px-8 py-3 rounded-lg transition-colors shadow-lg">
                                GET A QUOTE
                            </a>
                        </div>
                        <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-indigo-800 rounded-full opacity-50">
                        </div>
                        <button
                            class="absolute top-4 right-4 w-10 h-10 bg-red-600 rounded-full flex items-center justify-center hover:bg-red-700 transition-colors">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <!-- Project Details Card -->
                    <div class="bg-white rounded-xl p-6 shadow-md">
                        <h3 class="text-xl font-bold text-gray-900 mb-6">Project Details</h3>
                        <div class="space-y-4">
                            <div>
                                <div class="text-xs text-gray-500 mb-1">Timeline</div>
                                <div class="text-sm font-semibold text-gray-900">5 days</div>
                            </div>
                            <div>
                                <div class="text-xs text-gray-500 mb-1">Type</div>
                                <div class="text-sm font-semibold text-gray-900">Standing Seam Metal Roofing</div>
                            </div>
                            <div>
                                <div class="text-xs text-gray-500 mb-1">Warranty</div>
                                <div class="text-sm font-semibold text-gray-900">Lifetime manufacturer warranty</div>
                            </div>
                            <div>
                                <div class="text-xs text-gray-500 mb-1">Size</div>
                                <div class="text-sm font-semibold text-gray-900">2,800 sq.ft</div>
                            </div>
                        </div>
                        <button
                            class="w-full bg-indigo-900 hover:bg-indigo-800 text-white font-bold py-3 px-6 rounded-lg mt-6 transition-colors">
                            Start Your Project
                        </button>
                    </div>

                </div>

            </div>

        </div>
    </div>
    {{-- contents ends here --}}
    @include('components.home.cta')
</x-site-layout>
