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
                        @foreach ($project->images as $image)
                            <div class="w-20 h-20 rounded-lg overflow-hidden border-2 border-indigo-600 cursor-pointer">
                                <img src="{{ asset($image->image) }}" alt="Thumbnail 1"
                                    class="w-full h-full object-cover">
                            </div>
                        @endforeach
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
                        <span class="text-indigo-900">{{ $project->title }}</span>
                    </h1>

                    <!-- Meta Information -->
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>{{ $project->area->name }}</span>
                        <span class="mx-2">|</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span>{{ $project->created_at->format('M d, Y') }}</span>
                    </div>

                    <!-- Info Cards -->
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                        <div class="bg-white p-4 rounded-lg">
                            <div class="text-xs text-gray-500 mb-1">Client</div>
                            <div class="text-sm font-semibold text-gray-900">{{ $project->client }}</div>
                        </div>
                        <div class="bg-white p-4 rounded-lg">
                            <div class="text-xs text-gray-500 mb-1">Date</div>
                            <div class="text-sm font-semibold text-gray-900">{{ $project->created_at->format('M d, Y') }}</div>
                        </div>
                        <div class="bg-white p-4 rounded-lg">
                            <div class="text-xs text-gray-500 mb-1">Category</div>
                            <div class="text-sm font-semibold text-gray-900">{{ $project->services->first()->name }}</div>
                        </div>
                        <div class="bg-white p-4 rounded-lg">
                            <div class="text-xs text-gray-500 mb-1">Location</div>
                            <div class="text-sm font-semibold text-gray-900">{{ $project->area->name }}</div>
                        </div>
                    </div>

                    <!-- Project Description -->
                    <div class="bg-white rounded-xl p-6 sm:p-8">
                      {!! $project->content !!}
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
                                class="inline-block bg-red-800 hover:bg-red-700 text-white font-bold px-8 py-3 rounded-lg transition-colors shadow-lg">
                                GET A QUOTE
                            </a>
                        </div>
                        <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-indigo-800 rounded-full opacity-50">
                        </div>
                        <button
                            class="absolute top-4 right-4 w-12 h-12 bg-red-800 rounded-full flex items-center justify-center shadow-lg hover:bg-green-700 transition-colors focus:outline-none focus:ring-2 focus:ring-green-400">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5.25a2.25 2.25 0 012.25-2.25h2.25c.621 0 1.18.276 1.555.724l1.47 1.764a1.125 1.125 0 01-.128 1.585l-1.293 1.293a15.042 15.042 0 006.586 6.586l1.293-1.293a1.125 1.125 0 011.585-.128l1.764 1.47c.448.374.724.934.724 1.555v2.25A2.25 2.25 0 0118.75 21H18c-8.284 0-15-6.716-15-15v-.75z" />
                            </svg>
                        </button>

                    </div>

                    <!-- Project Details Card -->
                    <div class="bg-white rounded-xl p-6 shadow-md">
                        <h3 class="text-xl font-bold text-gray-900 mb-6">Project Details</h3>
                        <div class="space-y-4">
                            <div>
                                <div class="text-xs text-gray-500 mb-1">Timeline</div>
                                <div class="text-sm font-semibold text-gray-900">{{ $project->deadline }}</div>
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
