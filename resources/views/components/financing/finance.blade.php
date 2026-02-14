<section class="py-12 px-4 sm:px-6 lg:px-8 bg-gray-50">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-start">

            <!-- Left Column - Content -->
            <div>
                <h2 class="text-3xl sm:text-4xl font-bold mb-6 leading-tight text-center sm:text-left">
                    <span class="text-indigo-900">LOCAL ROOFER WITH</span><br>
                    <span class="text-red-600">FINANCING</span>
                </h2>

                <div class="space-y-4 text-gray-700">
                    <p class="text-lg leading-relaxed">
                        When financing a Roofing Project, it's important to explore all available options and understand
                        the terms. Roofiant offers flexible financing to make roof repairs and replacements more
                        accessible. Here are some things to keep in mind when looking for a roof financing option
                        available to homeowners for all types of repairs or a roof replace & being a severely damaged or
                        older roof.
                    </p>

                    <p class="text-lg leading-relaxed">
                        Our roof financing options offers financing options to FIVE courses as low as 9.9%. Options
                        available for Top projects like Siding, Gutter installs and More, New soffit, fascia, trim &
                        gutters.
                    </p>
                </div>
            </div>

            <!-- Right Column - Financing Form -->
            <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8">
                <h3 class="text-lg font-bold text-indigo-900 mb-6 text-center sm:text-left">
                    ROOF FINANCING ASSISTANCE
                </h3>

                <form action="#" method="POST" class="space-y-4">
                    @csrf

                    <!-- Full Name -->
                    <div>
                        <input type="text" name="full_name" id="financing_full_name" placeholder="Full Name" required
                            value="{{ old('full_name') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors @error('full_name') border-red-500 @enderror">
                        @error('full_name')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email and Phone -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <input type="email" name="email" id="financing_email" placeholder="Email" required
                                value="{{ old('email') }}"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors @error('email') border-red-500 @enderror">
                            @error('email')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <input type="tel" name="phone" id="financing_phone" placeholder="Phone" required
                                value="{{ old('phone') }}"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors @error('phone') border-red-500 @enderror">
                            @error('phone')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Address -->
                    <div>
                        <input type="text" name="address" id="financing_address" placeholder="Address" required
                            value="{{ old('address') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors @error('address') border-red-500 @enderror">
                        @error('address')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Loan Amount Needed -->
                    <div>
                        <input type="text" name="loan_amount" id="financing_loan_amount"
                            placeholder="Loan Amount Needed" required value="{{ old('loan_amount') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors @error('loan_amount') border-red-500 @enderror">
                        @error('loan_amount')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-2">
                        <button type="submit"
                            class="w-full bg-indigo-900 hover:bg-indigo-800 text-white font-bold py-4 px-6 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 shadow-md text-sm">
                            GET APPROVED
                        </button>
                    </div>

                    <!-- Disclaimer Text -->
                    <div class="text-center text-xs text-gray-500 leading-relaxed pt-2">
                        Choosing a roofing company isn't just about the lowest price. It's about finding a partner you
                        can trust to deliver quality workmanship, excellent customer service, and reliable warranties.
                        At Roofiant Exterior, we pride ourselves on being that trusted partner for homeowners throughout
                        the region.
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
