<x-site-layout title="Contact | roofiant">
    <x-common.bread-crumb title="Roofiant Financing Options" subtitle="Home > Contact" />
    <section class="py-12 px-4 sm:px-6 lg:px-8 bg-gray-50">
        <div class="max-w-7xl mx-auto">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">

                <!-- Left Column - Contact Information -->
                <div>
                    <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
                        Get In Touch
                    </h2>
                    <p class="text-gray-600 text-sm leading-relaxed mb-8">
                        Ready to start your roofing project? Contact us today for a free, no-obligation inspection and
                        quote. Our team is here to answer questions and provide expert guidance.
                    </p>

                    <!-- Contact Info Cards -->
                    <div class="space-y-4">

                        <!-- Address -->
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 bg-indigo-900 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Address</h3>
                                <p class="text-gray-600 text-sm">123 Main Street<br>Newark, OH 43055</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 bg-indigo-900 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Phone</h3>
                                <a href="tel:7404444245" class="text-gray-600 text-sm hover:text-indigo-900">(740)
                                    444-4245</a>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 bg-indigo-900 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Email</h3>
                                <a href="mailto:info@roofiant.com"
                                    class="text-gray-600 text-sm hover:text-indigo-900">info@roofiant.com</a>
                            </div>
                        </div>

                        <!-- Business Hours -->
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 bg-indigo-900 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Business Hours</h3>
                                <div class="text-gray-600 text-sm space-y-1">
                                    <p>Monday - Friday: 7:00 AM - 6:00 PM</p>
                                    <p>Saturday: 8:00 AM - 4:00 PM</p>
                                    <p>Sunday: Closed</p>
                                    <p class="text-xs text-gray-500 mt-2">24/7 Emergency Service Available</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right Column - Contact Form -->
                <div class="bg-white rounded-xl shadow-lg p-6 sm:p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">
                        Request a Free Quote
                    </h3>

                    <form action="#" method="POST" class="space-y-4">
                        @csrf

                        <!-- Full Name -->
                        <div>
                            <label for="contact_full_name" class="block text-sm font-medium text-gray-700 mb-2">
                                Full Name <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="full_name" id="contact_full_name" placeholder="John Smith"
                                required value="{{ old('full_name') }}"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors @error('full_name') border-red-500 @enderror">
                            @error('full_name')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email Address -->
                        <div>
                            <label for="contact_email" class="block text-sm font-medium text-gray-700 mb-2">
                                Email Address <span class="text-red-500">*</span>
                            </label>
                            <input type="email" name="email" id="contact_email" placeholder="john@example.com"
                                required value="{{ old('email') }}"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors @error('email') border-red-500 @enderror">
                            @error('email')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Phone Number -->
                        <div>
                            <label for="contact_phone" class="block text-sm font-medium text-gray-700 mb-2">
                                Phone Number <span class="text-red-500">*</span>
                            </label>
                            <input type="tel" name="phone" id="contact_phone" placeholder="(740) 444-4245"
                                required value="{{ old('phone') }}"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors @error('phone') border-red-500 @enderror">
                            @error('phone')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Service Needed -->
                        <div>
                            <label for="contact_service" class="block text-sm font-medium text-gray-700 mb-2">
                                Service Needed
                            </label>
                            <select name="service_needed" id="contact_service"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors appearance-none bg-white @error('service_needed') border-red-500 @enderror"
                                style="background-image: url('data:image/svg+xml;charset=UTF-8,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27currentColor%27 stroke-width=%272%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3e%3cpolyline points=%276 9 12 15 18 9%27%3e%3c/polyline%3e%3c/svg%3e'); background-repeat: no-repeat; background-position: right 1rem center; background-size: 1.5em 1.5em;">
                                <option value="">Select a service...</option>
                                <option value="roof_inspection">Roof Inspection</option>
                                <option value="roof_replacement">Roof Replacement</option>
                                <option value="roof_repair">Roof Repair</option>
                                <option value="gutter_installation">Gutter Installation</option>
                                <option value="emergency_service">Emergency Service</option>
                            </select>
                            @error('service_needed')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="contact_message" class="block text-sm font-medium text-gray-700 mb-2">
                                Message
                            </label>
                            <textarea name="message" id="contact_message" rows="4" placeholder="Tell us about your project..."
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors resize-none @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-2">
                            <button type="submit"
                                class="w-full bg-indigo-900 hover:bg-indigo-800 text-white font-bold py-4 px-6 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 shadow-md text-sm">
                                Send Message
                            </button>
                        </div>

                        <!-- Privacy Notice -->
                        <div class="text-center text-xs text-gray-500 pt-2">
                            By submitting this form, you agree to be contacted by Roofiant regarding your inquiry.
                        </div>
                    </form>
                </div>

            </div>

            <!-- What to Expect Section -->
            <div class="mt-16 bg-blue-50 rounded-xl p-8">
                <h2 class="text-2xl sm:text-3xl font-bold text-center text-gray-900 mb-12">
                    What to Expect When You Contact Us
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                    <!-- Step 1 -->
                    <div class="text-center">
                        <div
                            class="inline-flex items-center justify-center w-16 h-16 bg-indigo-900 text-white rounded-full text-2xl font-bold mb-4">
                            1
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">
                            Quick Response
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            We'll respond to your inquiry within 24 hours, usually much sooner. Emergency calls are
                            answered immediately.
                        </p>
                    </div>

                    <!-- Step 2 -->
                    <div class="text-center">
                        <div
                            class="inline-flex items-center justify-center w-16 h-16 bg-indigo-900 text-white rounded-full text-2xl font-bold mb-4">
                            2
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">
                            Free Inspection
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            We'll schedule a convenient time to inspect your roof and discuss your needs in detail.
                        </p>
                    </div>

                    <!-- Step 3 -->
                    <div class="text-center">
                        <div
                            class="inline-flex items-center justify-center w-16 h-16 bg-indigo-900 text-white rounded-full text-2xl font-bold mb-4">
                            3
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">
                            Detailed Quote
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            You'll receive a transparent, itemized quote with no hidden fees or pressure to decide
                            immediately.
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </section>

</x-site-layout>
