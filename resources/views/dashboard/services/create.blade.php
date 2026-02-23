<x-dashboard-layout>

    {{-- Page Header --}}
    <div class="mb-8 flex items-center gap-4">
        <a href="{{ route('services.index') }}"
            class="p-2 rounded-xl text-gray-400 hover:text-gray-600 hover:bg-gray-100 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
            </svg>
        </a>
        <div>
            <h2 class="text-2xl font-semibold text-gray-700">Create Service</h2>
            <p class="mt-0.5 text-sm text-gray-500">Add a new service offering</p>
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
    <form action="{{ route('services.store') }}" method="POST" class="max-w-2xl mx-auto">
        @csrf

        <div class="space-y-6">

            {{-- Main Card --}}
            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 space-y-5">

                <h3 class="text-sm font-semibold text-gray-700 flex items-center gap-2">
                    <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                    </svg>
                    Service Details
                </h3>

                {{-- Name --}}
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-600 mb-1.5">
                        Service Name <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                        placeholder="e.g. Web Development, SEO Optimization, Plumbing"
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
                            /services/
                        </span>
                        <input type="text" id="slug" name="slug" value="{{ old('slug') }}"
                            placeholder="web-development"
                            class="w-full pl-20 pr-4 py-2.5 text-sm text-gray-700 bg-gray-50 border @error('slug') border-red-400 @else border-gray-200 @enderror rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent font-mono transition" />
                    </div>
                    <p class="mt-1.5 text-xs text-gray-400">
                        Leave blank to auto-generate from the service name.
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

            </div>

            {{-- Actions --}}
            <div class="flex items-center gap-3">
                <button type="submit"
                    class="inline-flex items-center gap-2 px-6 py-2.5 text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 active:bg-indigo-800 rounded-xl shadow-sm transition-colors duration-150">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Create Service
                </button>

                <a href="{{ route('services.index') }}"
                    class="inline-flex items-center gap-2 px-6 py-2.5 text-sm font-medium text-gray-600 bg-gray-100 hover:bg-gray-200 rounded-xl transition-colors duration-150">
                    Cancel
                </a>
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
                        <p class="font-semibold text-sm mb-1">Quick Tips</p>
                        <p>Services can be linked to <strong>projects</strong> and <strong>areas</strong> after
                            creation.</p>
                        <p>The slug is used for routing — it's automatically generated from the name.</p>
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
