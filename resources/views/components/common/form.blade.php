<div class="bg-white rounded-3xl shadow-2xl p-8">
    <!-- Form Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900 mb-2">Get Your Free Quote</h2>
        <p class="text-sm text-gray-600">Fill out the form and we'll contact you within 24 hours</p>
    </div>

    <!-- Form -->
    <form action="#" method="POST" class="space-y-4">
        @csrf

        <!-- Full Name -->
        <div>
            <label for="full_name" class="block text-sm font-medium text-gray-700 mb-1.5">
                Full Name <span class="text-red-500">*</span>
            </label>
            <input type="text" id="full_name" name="full_name" placeholder="John Smith" required
                class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-gray-50 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200">
        </div>

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1.5">
                Email Address <span class="text-red-500">*</span>
            </label>
            <input type="email" id="email" name="email" placeholder="john@example.com" required
                class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-gray-50 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200">
        </div>

        <!-- Phone Number -->
        <div>
            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1.5">
                Phone Number <span class="text-red-500">*</span>
            </label>
            <input type="tel" id="phone" name="phone" placeholder="(740) 444-4245" required
                class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-gray-50 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200">
        </div>

        <!-- Project Details -->
        <div>
            <label for="project_details" class="block text-sm font-medium text-gray-700 mb-1.5">
                Project Details
            </label>
            <textarea id="project_details" name="project_details" rows="3" placeholder="Tell us about your project..."
                class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-gray-50 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent resize-none transition-all duration-200"></textarea>
        </div>

        <!-- Submit Button -->
        <div class="pt-2">
            <button type="submit"
                class="w-full bg-indigo-900 hover:bg-indigo-800 text-white font-bold py-3.5 rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl flex items-center justify-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                </svg>
                Request Free Quote
            </button>
        </div>

        <!-- Privacy Note -->
        <p class="text-xs text-gray-500 text-center pt-2">
            By submitting, you agree to be contacted about your project.
        </p>
    </form>
</div>
