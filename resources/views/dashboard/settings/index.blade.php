<x-dashboard-layout>
    <div class="mb-6">
        <h2 class="text-2xl font-semibold text-gray-700">
            Website Settings
        </h2>
        <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
            Manage your website's general settings, branding, and SEO configuration
        </p>
    </div>

    <!-- Success/Error Messages -->
    @if (session('success'))
        <div class="mb-4 px-4 py-3 bg-green-100 border border-green-400 text-green-700 rounded-lg flex items-center">
            <i class="fas fa-check-circle mr-2"></i>
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="mb-4 px-4 py-3 bg-red-100 border border-red-400 text-red-700 rounded-lg">
            <div class="flex items-center mb-2">
                <i class="fas fa-exclamation-circle mr-2"></i>
                <span class="font-semibold">Please fix the following errors:</span>
            </div>
            <ul class="list-disc list-inside ml-4">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Tabs Navigation -->
        <div class="mb-6 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center">
                <li class="mr-2">
                    <button type="button" onclick="switchTab('general')"
                        class="tab-btn active inline-flex items-center justify-center p-4 border-b-2 rounded-t-lg group"
                        data-tab="general">
                        <i class="fas fa-cog mr-2"></i>
                        General
                    </button>
                </li>
                <li class="mr-2">
                    <button type="button" onclick="switchTab('branding')"
                        class="tab-btn inline-flex items-center justify-center p-4 border-b-2 rounded-t-lg group"
                        data-tab="branding">
                        <i class="fas fa-palette mr-2"></i>
                        Branding
                    </button>
                </li>
                <li class="mr-2">
                    <button type="button" onclick="switchTab('contact')"
                        class="tab-btn inline-flex items-center justify-center p-4 border-b-2 rounded-t-lg group"
                        data-tab="contact">
                        <i class="fas fa-phone mr-2"></i>
                        Contact Info
                    </button>
                </li>
                <li class="mr-2">
                    <button type="button" onclick="switchTab('seo')"
                        class="tab-btn inline-flex items-center justify-center p-4 border-b-2 rounded-t-lg group"
                        data-tab="seo">
                        <i class="fas fa-search mr-2"></i>
                        SEO
                    </button>
                </li>
            </ul>
        </div>

        <!-- Tab Contents -->
        <div class="space-y-6">

            <!-- General Settings Tab -->
            <div id="general-tab" class="tab-content bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-200 mb-4">
                    General Settings
                </h3>

                <div class="space-y-4">
                    <!-- Title -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-400 mb-2">
                            Website Title <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="title" value="{{ old('title', $settings->title) }}" required
                            placeholder="Roofiant Exteriors"
                            class="w-full px-4 py-3 text-sm border border-gray-300 rounded-lg dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <p class="mt-1 text-xs text-gray-500">This will appear in browser tabs and page titles</p>
                    </div>

                    <!-- Description -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-400 mb-2">
                            Website Description
                        </label>
                        <textarea name="description" rows="4" placeholder="A brief description of your website..."
                            class="w-full px-4 py-3 text-sm border border-gray-300 rounded-lg dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description', $settings->description) }}</textarea>
                        <p class="mt-1 text-xs text-gray-500">General description of your website</p>
                    </div>
                </div>
            </div>

            <!-- Branding Tab -->
            <div id="branding-tab" class="tab-content hidden bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-200 mb-4">
                    Branding & Media
                </h3>

                <div class="space-y-6">
                    <!-- Logo -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-400 mb-2">
                            Website Logo
                        </label>
                        @if ($settings->logo)
                            <div class="mb-3 p-4 bg-gray-50 dark:bg-gray-900 rounded-lg">
                                <p class="text-xs text-gray-500 mb-2">Current Logo:</p>
                                <img src="{{ asset($settings->logo) }}" alt="Logo" class="h-16 object-contain">
                            </div>
                        @endif
                        <input type="file" name="logo" accept="image/*"
                            class="w-full px-4 py-3 text-sm border border-gray-300 rounded-lg dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <p class="mt-1 text-xs text-gray-500">Recommended: PNG with transparent background, max 2MB</p>
                    </div>

                    <!-- Favicon -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-400 mb-2">
                            Favicon
                        </label>
                        @if ($settings->favicon)
                            <div class="mb-3 p-4 bg-gray-50 dark:bg-gray-900 rounded-lg">
                                <p class="text-xs text-gray-500 mb-2">Current Favicon:</p>
                                <img src="{{ asset($settings->favicon) }}" alt="Favicon" class="h-8 object-contain">
                            </div>
                        @endif
                        <input type="file" name="favicon" accept=".ico,.png"
                            class="w-full px-4 py-3 text-sm border border-gray-300 rounded-lg dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <p class="mt-1 text-xs text-gray-500">Recommended: 32x32px ICO or PNG file, max 1MB</p>
                    </div>

                    <!-- OpenGraph Image -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-400 mb-2">
                            OpenGraph Image (Social Media Preview)
                        </label>
                        @if ($settings->opengraph_image)
                            <div class="mb-3 p-4 bg-gray-50 dark:bg-gray-900 rounded-lg">
                                <p class="text-xs text-gray-500 mb-2">Current OG Image:</p>
                                <img src="{{ asset($settings->opengraph_image) }}" alt="OG Image"
                                    class="h-32 object-cover rounded">
                            </div>
                        @endif
                        <input type="file" name="opengraph_image" accept="image/*"
                            class="w-full px-4 py-3 text-sm border border-gray-300 rounded-lg dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <p class="mt-1 text-xs text-gray-500">Recommended: 1200x630px for best social media display, max
                            2MB</p>
                    </div>
                </div>
            </div>

            <!-- Contact Info Tab -->
            <div id="contact-tab" class="tab-content hidden bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-200 mb-4">
                    Contact Information
                </h3>

                <div class="space-y-4">
                    <!-- Phone -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-400 mb-2">
                            <i class="fas fa-phone mr-2 text-blue-500"></i>
                            Phone Number
                        </label>
                        <input type="text" name="phone" value="{{ old('phone', $settings->phone) }}"
                            placeholder="+1 (555) 123-4567"
                            class="w-full px-4 py-3 text-sm border border-gray-300 rounded-lg dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-400 mb-2">
                            <i class="fas fa-envelope mr-2 text-blue-500"></i>
                            Email Address
                        </label>
                        <input type="email" name="email" value="{{ old('email', $settings->email) }}"
                            placeholder="contact@roofiant.com"
                            class="w-full px-4 py-3 text-sm border border-gray-300 rounded-lg dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Address -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-400 mb-2">
                            <i class="fas fa-map-marker-alt mr-2 text-blue-500"></i>
                            Business Address
                        </label>
                        <textarea name="address" rows="3" placeholder="123 Main Street, Newark, OH 43055"
                            class="w-full px-4 py-3 text-sm border border-gray-300 rounded-lg dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('address', $settings->address) }}</textarea>
                    </div>
                </div>
            </div>

            <!-- SEO Tab -->
            <div id="seo-tab" class="tab-content hidden bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-200 mb-4">
                    SEO Settings
                </h3>

                <div class="space-y-4">
                    <!-- Meta Title -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-400 mb-2">
                            Meta Title
                        </label>
                        <input type="text" name="meta_title"
                            value="{{ old('meta_title', $settings->meta_title) }}"
                            placeholder="Roofiant Exteriors - Professional Roofing Services" maxlength="60"
                            class="w-full px-4 py-3 text-sm border border-gray-300 rounded-lg dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <p class="mt-1 text-xs text-gray-500">Recommended: 50-60 characters</p>
                    </div>

                    <!-- Meta Description -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-400 mb-2">
                            Meta Description
                        </label>
                        <textarea name="meta_description" rows="3"
                            placeholder="Professional roofing services in Newark, OH. Expert installation, repair, and maintenance."
                            maxlength="160"
                            class="w-full px-4 py-3 text-sm border border-gray-300 rounded-lg dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('meta_description', $settings->meta_description) }}</textarea>
                        <p class="mt-1 text-xs text-gray-500">Recommended: 150-160 characters</p>
                    </div>

                    <!-- Meta Keywords -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-400 mb-2">
                            Meta Keywords
                        </label>
                        <input type="text" name="meta_keywords"
                            value="{{ old('meta_keywords', $settings->meta_keywords) }}"
                            placeholder="roofing, roofing services, roof repair, Newark OH"
                            class="w-full px-4 py-3 text-sm border border-gray-300 rounded-lg dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <p class="mt-1 text-xs text-gray-500">Separate keywords with commas</p>
                    </div>

                    <!-- SEO Preview -->
                    <div
                        class="mt-6 p-4 bg-gray-50 dark:bg-gray-900 rounded-lg border border-gray-200 dark:border-gray-700">
                        <p class="text-xs font-semibold text-gray-500 mb-3">Search Engine Preview:</p>
                        <div class="space-y-2">
                            <h4 class="text-blue-600 text-lg font-medium">
                                {{ $settings->meta_title ?: $settings->title ?: 'Your Website Title' }}
                            </h4>
                            <p class="text-green-700 text-xs">
                                {{ url('/') }}
                            </p>
                            <p class="text-gray-600 text-sm">
                                {{ $settings->meta_description ?: 'Your meta description will appear here...' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Submit Button -->
        <div class="mt-8 flex justify-end gap-4">
            <button type="reset"
                class="px-6 py-3 text-sm font-medium text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 transition-colors">
                <i class="fas fa-undo mr-2"></i>
                Reset
            </button>
            <button type="submit"
                class="px-6 py-3 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue transition-colors">
                <i class="fas fa-save mr-2"></i>
                Save Settings
            </button>
        </div>

    </form>

    <style>
        .tab-btn {
            color: #6B7280;
            border-color: transparent;
        }

        .tab-btn:hover {
            color: #3B82F6;
            border-color: #93C5FD;
        }

        .tab-btn.active {
            color: #3B82F6;
            border-color: #3B82F6;
        }
    </style>

    <script>
        function switchTab(tabName) {
            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.add('hidden');
            });

            // Remove active class from all buttons
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('active');
            });

            // Show selected tab
            document.getElementById(tabName + '-tab').classList.remove('hidden');

            // Add active class to clicked button
            document.querySelector(`[data-tab="${tabName}"]`).classList.add('active');
        }

        // Show first tab by default
        document.addEventListener('DOMContentLoaded', function() {
            switchTab('general');
        });
    </script>

</x-dashboard-layout>
