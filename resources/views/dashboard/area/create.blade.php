<x-dashboard-layout>

    {{-- Page Header --}}
    <div class="mb-8 flex items-center gap-4">
        <a href="{{ route('admin.area.index') }}"
            class="p-2 rounded-xl text-gray-400 hover:text-gray-600 hover:bg-gray-100 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
            </svg>
        </a>
        <div>
            <h2 class="text-2xl font-semibold text-gray-700">Create Area</h2>
            <p class="mt-0.5 text-sm text-gray-500">Add a new service area to the system</p>
        </div>
    </div>

    {{-- Validation Errors --}}
    @if ($errors->any())
        <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-xl">
            <div class="flex items-start gap-3">
                <svg class="w-5 h-5 text-red-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                </svg>
                <div>
                    <p class="text-sm font-medium text-red-700 mb-1">Please fix the following errors:</p>
                    <ul class="text-sm text-red-600 space-y-0.5 list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif

    {{-- Form --}}
    <form action="{{ route('areas.store') }}" method="POST">
        @csrf

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            {{-- LEFT: Fields --}}
            <div class="lg:col-span-2">
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 space-y-5">

                    <h3 class="text-sm font-semibold text-gray-700 flex items-center gap-2">
                        <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                        Area Details
                    </h3>

                    {{-- Name --}}
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-600 mb-1.5">
                            Name <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}"
                            placeholder="e.g. Downtown Manhattan"
                            class="w-full px-4 py-2.5 text-sm text-gray-700 bg-gray-50 border @error('name') border-red-400 @else border-gray-200 @enderror rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition" />
                        @error('name')
                            <p class="mt-1.5 text-xs text-red-500 flex items-center gap-1">
                                <svg class="w-3.5 h-3.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z"
                                        clip-rule="evenodd" />
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Slug --}}
                    <div>
                        <label for="slug" class="block text-sm font-medium text-gray-600 mb-1.5">
                            Slug
                            <span class="ml-1 text-xs font-normal text-gray-400">(auto-generated)</span>
                        </label>
                        <div class="relative">
                            <span
                                class="absolute inset-y-0 left-0 flex items-center pl-4 text-gray-400 text-sm select-none pointer-events-none">
                                /areas/
                            </span>
                            <input type="text" id="slug" name="slug" value="{{ old('slug') }}"
                                placeholder="downtown-manhattan"
                                class="w-full pl-16 pr-4 py-2.5 text-sm text-gray-700 bg-gray-50 border @error('slug') border-red-400 @else border-gray-200 @enderror rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent font-mono transition" />
                        </div>
                        <p class="mt-1.5 text-xs text-gray-400">
                            Leave blank to auto-generate from the name. Used in URLs.
                        </p>
                        @error('slug')
                            <p class="mt-1 text-xs text-red-500 flex items-center gap-1">
                                <svg class="w-3.5 h-3.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z"
                                        clip-rule="evenodd" />
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Address --}}
                    <div>
                        <label for="address" class="block text-sm font-medium text-gray-600 mb-1.5">
                            Address
                            <span class="ml-1 text-xs font-normal text-gray-400">(optional)</span>
                        </label>
                        <textarea id="address" name="address" rows="3" placeholder="e.g. 123 Main Street, New York, NY 10001"
                            class="w-full px-4 py-2.5 text-sm text-gray-700 bg-gray-50 border @error('address') border-red-400 @else border-gray-200 @enderror rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent resize-none transition leading-relaxed">{{ old('address') }}</textarea>
                        @error('address')
                            <p class="mt-1.5 text-xs text-red-500 flex items-center gap-1">
                                <svg class="w-3.5 h-3.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z"
                                        clip-rule="evenodd" />
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                </div>
            </div>

            {{-- RIGHT: Actions --}}
            <div class="space-y-4">

                {{-- Save Card --}}
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                    <h3 class="text-sm font-semibold text-gray-700 mb-4 flex items-center gap-2">
                        <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                        </svg>
                        Save
                    </h3>

                    <div class="space-y-3">
                        <button type="submit"
                            class="w-full flex items-center justify-center gap-2 px-5 py-2.5 text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 active:bg-indigo-800 rounded-xl shadow-sm transition-colors duration-150">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Create Area
                        </button>

                        <a href="{{ route('admin.area.index') }}"
                            class="w-full flex items-center justify-center gap-2 px-5 py-2.5 text-sm font-medium text-gray-600 bg-gray-100 hover:bg-gray-200 rounded-xl transition-colors duration-150">
                            Cancel
                        </a>
                    </div>
                </div>

                {{-- Info Card --}}
                <div class="bg-indigo-50 rounded-2xl border border-indigo-100 p-5">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-indigo-500 mt-0.5 shrink-0" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                        </svg>
                        <div class="text-xs text-indigo-700 space-y-1 leading-relaxed">
                            <p class="font-semibold text-sm mb-1">Tips</p>
                            <p>The <strong>slug</strong> is auto-generated from the name — lowercase with hyphens.</p>
                            <p>You can link <strong>projects</strong> and <strong>services</strong> to this area after
                                creating it.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </form>

    {{-- JS: Auto slug from name --}}
    <script>
        const nameInput = document.getElementById('name');
        const slugInput = document.getElementById('slug');
        let slugEdited = false;

        nameInput.addEventListener('input', () => {
            if (!slugEdited) {
                slugInput.value = nameInput.value
                    .toLowerCase()
                    .trim()
                    .replace(/[^\w\s-]/g, '')
                    .replace(/[\s_]+/g, '-')
                    .replace(/^-+|-+$/g, '');
            }
        });

        slugInput.addEventListener('input', () => {
            slugEdited = slugInput.value.length > 0;
        });
    </script>

</x-dashboard-layout>
