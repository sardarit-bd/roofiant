<div
    class="min-h-screen flex items-center justify-center bg-gradient-to-br from-indigo-900 via-indigo-800 to-indigo-900 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl w-full">
        {{-- Header Section --}}
        <div class="text-center mb-8">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-3">
                Schedule Your Roof & Gutter Inspection
            </h1>
            <p class="text-indigo-200 text-lg">
                Get your free, no-obligation quote today
            </p>
        </div>

        {{-- Form Card --}}
        <div class="bg-white rounded-2xl shadow-2xl p-8 md:p-10">
            <form action="#" method="POST" class="space-y-6">
                @csrf

                {{-- Row 1: Full Name and Email --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    {{-- Full Name --}}
                    <div>
                        <label for="full_name" class="block text-sm font-medium text-gray-700 mb-2">
                            Full Name <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="full_name" id="full_name" required placeholder="John Smith"
                            value="{{ old('full_name') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors @error('full_name') border-red-500 @enderror">
                        @error('full_name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Email Address --}}
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            Email Address <span class="text-red-500">*</span>
                        </label>
                        <input type="email" name="email" id="email" required placeholder="john@example.com"
                            value="{{ old('email') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors @error('email') border-red-500 @enderror">
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- Row 2: Phone Number and Property Address --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    {{-- Phone Number --}}
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                            Phone Number <span class="text-red-500">*</span>
                        </label>
                        <input type="tel" name="phone" id="phone" required placeholder="(740) 444-4245"
                            value="{{ old('phone') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors @error('phone') border-red-500 @enderror">
                        @error('phone')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Property Address --}}
                    <div>
                        <label for="property_address" class="block text-sm font-medium text-gray-700 mb-2">
                            Property Address <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="property_address" id="property_address" required
                            placeholder="123 Main St, Newark, OH" value="{{ old('property_address') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors @error('property_address') border-red-500 @enderror">
                        @error('property_address')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- Service Needed --}}
                <div>
                    <label for="service_needed" class="block text-sm font-medium text-gray-700 mb-2">
                        Service Needed
                    </label>
                    <select name="service_needed" id="service_needed"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors appearance-none bg-white @error('service_needed') border-red-500 @enderror"
                        style="background-image: url('data:image/svg+xml;charset=UTF-8,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27currentColor%27 stroke-width=%272%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3e%3cpolyline points=%276 9 12 15 18 9%27%3e%3c/polyline%3e%3c/svg%3e'); background-repeat: no-repeat; background-position: right 1rem center; background-size: 1.5em 1.5em;">
                        <option value="">Select a service...</option>
                        <option value="roof_inspection"
                            {{ old('service_needed') == 'roof_inspection' ? 'selected' : '' }}>Roof Inspection</option>
                        <option value="gutter_inspection"
                            {{ old('service_needed') == 'gutter_inspection' ? 'selected' : '' }}>Gutter Inspection
                        </option>
                        <option value="both" {{ old('service_needed') == 'both' ? 'selected' : '' }}>Roof & Gutter
                            Inspection</option>
                        <option value="repair" {{ old('service_needed') == 'repair' ? 'selected' : '' }}>Repair
                            Services</option>
                        <option value="maintenance" {{ old('service_needed') == 'maintenance' ? 'selected' : '' }}>
                            Maintenance</option>
                    </select>
                    @error('service_needed')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Additional Details --}}
                <div>
                    <label for="additional_details" class="block text-sm font-medium text-gray-700 mb-2">
                        Additional Details
                    </label>
                    <textarea name="additional_details" id="additional_details" rows="3" placeholder="Tell us about your project..."
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors resize-none @error('additional_details') border-red-500 @enderror">{{ old('additional_details') }}</textarea>
                    @error('additional_details')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Submit Button --}}
                <div class="pt-4">
                    <button type="submit"
                        class="w-full bg-indigo-700 hover:bg-indigo-800 text-white font-semibold py-4 px-6 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 shadow-lg">
                        SUBMIT
                    </button>
                </div>

                {{-- Privacy Notice --}}
                <div class="text-center text-sm text-gray-600 pt-2">
                    By submitting this form, you agree to be contacted by Roofiant Exteriors regarding your inquiry.
                </div>
            </form>
        </div>
    </div>
</div>
