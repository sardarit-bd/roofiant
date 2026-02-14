<section class="relative min-h-screen py-16 px-4 sm:px-6 lg:px-8 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/explore.jpg') }}'); background-position: bottom;">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-indigo-900/90 via-slate-800/80 to-slate-900/90"></div>

    <!-- Content -->
    <div class="relative max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-center min-h-[calc(80vh-5rem)] pt-12">
            <!-- Left Column - Content -->
            <div class="space-y-8 text-white">
                <!-- Badge -->
                <div class="inline-block">
                    <span class="bg-white/10 backdrop-blur-sm text-white px-5 py-2 rounded-full text-sm font-medium border border-white/20">
                        Expert Roof Repair and Complete Replacement Services
                    </span>
                </div>

                <!-- Heading -->
                <h1 class="text-4xl sm:text-4xl lg:text-5xl font-bold leading-tight">
                    Residential Roofing Service
                </h1>

                <!-- Description -->
                <p class="text-lg text-white/90 leading-relaxed max-w-xl">
                    From minor repairs to complete roof replacement, we provide expert solutions to extend the life of your roof or replace it when necessary. Fast response, quality work, and honest assessments you can trust.
                </p>

                <!-- Trust Badges Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-4 max-w-2xl">
                    <!-- Badge 1: Licensed -->
                    <div class="bg-white/10 backdrop-blur-md border border-white/30 rounded-2xl p-6 hover:bg-white/15 transition-all duration-300">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 bg-white rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                                <svg class="w-7 h-7 text-indigo-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-white mb-0.5">Licensed</h3>
                                <p class="text-sm text-white/70">Roofing Company</p>
                            </div>
                        </div>
                    </div>

                    <!-- Badge 2: BBB "A" -->
                    <div class="bg-white/10 backdrop-blur-md border border-white/30 rounded-2xl p-6 hover:bg-white/15 transition-all duration-300">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 bg-white rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                                <svg class="w-7 h-7 text-indigo-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-white mb-0.5">BBB "A"</h3>
                                <p class="text-sm text-white/70">Rated & Accredited</p>
                            </div>
                        </div>
                    </div>

                    <!-- Badge 3: Google -->
                    <div class="bg-white/10 backdrop-blur-md border border-white/30 rounded-2xl p-6 hover:bg-white/15 transition-all duration-300">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 bg-white rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                                <svg class="w-7 h-7 text-indigo-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-white mb-0.5">Google</h3>
                                <p class="text-sm text-white/70">Guaranteed Company</p>
                            </div>
                        </div>
                    </div>

                    <!-- Badge 4: "5-Star" -->
                    <div class="bg-white/10 backdrop-blur-md border border-white/30 rounded-2xl p-6 hover:bg-white/15 transition-all duration-300">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 bg-white rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                                <svg class="w-7 h-7 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-white mb-0.5">"5-Star"</h3>
                                <p class="text-sm text-white/70">Customer Rated</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Form -->
            <div class="lg:ml-auto w-full max-w-lg">
                    @include('components.common.form')
            </div>
        </div>
    </div>
</section>
