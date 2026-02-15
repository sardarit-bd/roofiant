<header class="bg-white shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 md:px-1 lg:px-0">
        <div class="flex items-center justify-between py-3">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Roofiant Exteriors" class="h-10 md:h-14">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center space-x-8">
                <a href="/" class="text-gray-700 hover:text-blue-900 font-medium transition-colors">
                    Home
                </a>

                <!-- Services Dropdown -->
                <div class="relative group">
                    <button class="text-gray-700 hover:text-blue-900 font-medium transition-colors flex items-center">
                        Services
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div
                        class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        <div class="py-2">
                            <a href="/services" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Roofing</a>
                            <a href="/services" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Siding</a>
                            <a href="/services" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Gutters</a>
                        </div>
                    </div>
                </div>

                <!-- Services Area Dropdown -->
                <div class="relative group">
                    <button class="text-gray-700 hover:text-blue-900 font-medium transition-colors flex items-center">
                        Services Area
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div
                        class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        <div class="py-2">
                            <a href="/services/area" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Location
                                1</a>
                            <a href="/services/area" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Location
                                2</a>
                            <a href="/services/area" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Location
                                3</a>
                        </div>
                    </div>
                </div>

                <!-- About Dropdown -->
                <div class="relative group">
                    <button class="text-gray-700 hover:text-blue-900 font-medium transition-colors flex items-center">
                        About
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div
                        class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        <div class="py-2">
                            <a href="/about" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Company</a>
                            <a href="/about/team" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Team</a>
                            <a href="{{ route('about.testimonials') }}"
                                class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Testimonials</a>
                            <a href="/about/financing"
                                class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Financing</a>
                        </div>
                    </div>
                </div>

                <a href="/projects" class="text-gray-700 hover:text-blue-900 font-medium transition-colors">
                    Projects
                </a>

                <a href="/blogs" class="text-gray-700 hover:text-blue-900 font-medium transition-colors">
                    Blog
                </a>
            </nav>

            <!-- Contact Button (Desktop) -->
            <div class="hidden lg:block">
                <a href="/contact"
                    class="inline-flex items-center px-6 py-2.5 bg-blue-900 text-white rounded-full hover:bg-blue-800 transition-colors font-medium">
                    (740) 444-4245
                    <span class="ml-2 bg-white text-blue-900 p-1 rounded-full rotate-325">
                        <svg class="w-5 h-5 " fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </span>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="lg:hidden text-gray-700 hover:text-blue-900 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden bg-white border-t">
        <div class="container mx-auto px-4 py-4 space-y-4">
            <a href="/" class="block text-gray-700 hover:text-blue-900 font-medium py-2">
                Home
            </a>

            <!-- Services Mobile -->
            <div>
                <button
                    class="mobile-dropdown-toggle w-full text-left text-gray-700 hover:text-blue-900 font-medium py-2 flex items-center justify-between">
                    Services
                    <svg class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                        </path>
                    </svg>
                </button>
                <div class="mobile-dropdown-content hidden pl-4 space-y-2 mt-2">
                    <a href="/services/roofing" class="block text-gray-600 hover:text-blue-900 py-1">Roofing</a>
                    <a href="/services/siding" class="block text-gray-600 hover:text-blue-900 py-1">Siding</a>
                    <a href="/services/gutters" class="block text-gray-600 hover:text-blue-900 py-1">Gutters</a>
                </div>
            </div>

            <!-- Services Area Mobile -->
            <div>
                <button
                    class="mobile-dropdown-toggle w-full text-left text-gray-700 hover:text-blue-900 font-medium py-2 flex items-center justify-between">
                    Services Area
                    <svg class="w-4 h-4 transition-transform" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                        </path>
                    </svg>
                </button>
                <div class="mobile-dropdown-content hidden pl-4 space-y-2 mt-2">
                    <a href="/areas/location1" class="block text-gray-600 hover:text-blue-900 py-1">Location 1</a>
                    <a href="/areas/location2" class="block text-gray-600 hover:text-blue-900 py-1">Location 2</a>
                    <a href="/areas/location3" class="block text-gray-600 hover:text-blue-900 py-1">Location 3</a>
                </div>
            </div>

            <!-- About Mobile -->
            <div>
                <button
                    class="mobile-dropdown-toggle w-full text-left text-gray-700 hover:text-blue-900 font-medium py-2 flex items-center justify-between">
                    About
                    <svg class="w-4 h-4 transition-transform" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                        </path>
                    </svg>
                </button>
                <div class="mobile-dropdown-content hidden pl-4 space-y-2 mt-2">
                    <a href="/about/company" class="block text-gray-600 hover:text-blue-900 py-1">Company</a>
                    <a href="/about/team" class="block text-gray-600 hover:text-blue-900 py-1">Team</a>
                    <a href="/about/testimonials"
                        class="block text-gray-600 hover:text-blue-900 py-1">Testimonials</a>
                </div>
            </div>

            <a href="/projects" class="block text-gray-700 hover:text-blue-900 font-medium py-2">
                Projects
            </a>

            <a href="/blog" class="block text-gray-700 hover:text-blue-900 font-medium py-2">
                Blog
            </a>

            <a href="/contact"
                class="inline-flex items-center justify-center w-full px-6 py-2.5 bg-blue-900 text-white rounded-full hover:bg-blue-800 transition-colors font-medium mt-4">
                Contact Us
                <span class="ml-2 bg-white text-blue-900 p-1 rounded-full rotate-325">
                    <svg class="w-5 h-5 " fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </span>
            </a>
        </div>
    </div>
</header>

<script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });

    // Mobile dropdown toggles
    document.querySelectorAll('.mobile-dropdown-toggle').forEach(button => {
        button.addEventListener('click', function() {
            const content = this.nextElementSibling;
            const icon = this.querySelector('svg');

            content.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');
        });
    });
</script>
