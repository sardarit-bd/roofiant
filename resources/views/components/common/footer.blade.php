<footer class="bg-[#1a2332] text-white">
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Company Info -->
            <div>
                <div class="mb-6">
                    <img src="{{ asset('images/logo-white.png') }}" alt="Roofiant Exteriors" class="h-12">
                </div>
                <p class="text-gray-300 text-sm leading-relaxed mb-6">
                    Newark's trusted roofing and exterior experts, serving the community with quality craftsmanship
                    since 2010.
                </p>
                <div class="flex space-x-3">
                    <a href="#"
                        class="w-8 h-8 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center transition-colors">
                        <i class="fab fa-facebook-f text-sm"></i>
                    </a>
                    <a href="#"
                        class="w-8 h-8 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center transition-colors">
                        <i class="fab fa-x-twitter text-sm"></i>
                    </a>
                    <a href="#"
                        class="w-8 h-8 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center transition-colors">
                        <i class="fab fa-youtube text-sm"></i>
                    </a>
                    <a href="#"
                        class="w-8 h-8 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center transition-colors">
                        <i class="fab fa-instagram text-sm"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-white font-semibold text-lg mb-6">Quick Links</h3>
                <ul class="space-y-3">
                    <li>
                        <a href="/about" class="text-gray-300 hover:text-white transition-colors text-sm">About Us</a>
                    </li>
                    <li>
                        <a href="/projects" class="text-gray-300 hover:text-white transition-colors text-sm">Our
                            Projects</a>
                    </li>
                    <li>
                        <a href="/blog" class="text-gray-300 hover:text-white transition-colors text-sm">Blog &
                            Articles</a>
                    </li>
                    <li>
                        <a href="/contact" class="text-gray-300 hover:text-white transition-colors text-sm">Contact
                            Us</a>
                    </li>
                </ul>
            </div>

            <!-- Our Services -->
            <div>
                <h3 class="text-white font-semibold text-lg mb-6">Our Services</h3>
                <ul class="space-y-3">
                    <li>
                        <a href="/services/roof-installation"
                            class="text-gray-300 hover:text-white transition-colors text-sm">Roof Installation</a>
                    </li>
                    <li>
                        <a href="/services/roof-repair"
                            class="text-gray-300 hover:text-white transition-colors text-sm">Roof Repair</a>
                    </li>
                    <li>
                        <a href="/services/metal-roofing"
                            class="text-gray-300 hover:text-white transition-colors text-sm">Metal Roofing</a>
                    </li>
                    <li>
                        <a href="/services/storm-damage"
                            class="text-gray-300 hover:text-white transition-colors text-sm">Storm Damage</a>
                    </li>
                    <li>
                        <a href="/services/gutters-siding"
                            class="text-gray-300 hover:text-white transition-colors text-sm">Gutters & Siding</a>
                    </li>
                </ul>
            </div>

            <!-- Contact Us -->
            <div>
                <h3 class="text-white font-semibold text-lg mb-6">Contact Us</h3>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt text-gray-400 mt-1 mr-3"></i>
                        <div class="text-gray-300 text-sm">
                            <div>123 Main Street</div>
                            <div>Newark, OH 43055</div>
                        </div>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-phone text-gray-400 mr-3"></i>
                        <a href="tel:7404441234" class="text-gray-300 hover:text-white transition-colors text-sm">(740)
                            444-1234</a>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-envelope text-gray-400 mr-3"></i>
                        <a href="mailto:info@roofiant.com"
                            class="text-gray-300 hover:text-white transition-colors text-sm">info@roofiant.com</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="border-t border-white/10">
        <div class="container mx-auto px-4 py-6">
            <p class="text-gray-400 text-sm text-center">
                © 2025 Roofiant. All rights reserved. Licensed & Insured.
            </p>
        </div>
    </div>

    {{-- back to top button --}}
    <button id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </button>
</footer>
