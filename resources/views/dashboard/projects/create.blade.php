<x-dashboard-layout>

    {{-- Page Header --}}
    <div class="mb-8 flex items-center gap-4">
        <a href="{{ route('projects.index') }}"
            class="p-2 rounded-xl text-gray-400 hover:text-gray-600 hover:bg-gray-100 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
            </svg>
        </a>
        <div>
            <h2 class="text-2xl font-semibold text-gray-700">Create Project</h2>
            <p class="mt-0.5 text-sm text-gray-500">Add a new project to your portfolio</p>
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
    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            {{-- LEFT COLUMN: Main Content (2/3) --}}
            <div class="lg:col-span-2 space-y-6">

                {{-- Basic Info --}}
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 space-y-5">
                    <h3 class="text-sm font-semibold text-gray-700 flex items-center gap-2">
                        <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.25m-12 0A2.25 2.25 0 005.25 18.75h13.5A2.25 2.25 0 0021 16.5v-13.5" />
                        </svg>
                        Project Details
                    </h3>

                    {{-- Title --}}
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-600 mb-1.5">
                            Project Title <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="title" name="title" value="{{ old('title') }}"
                            placeholder="e.g. Modern Office Renovation"
                            class="w-full px-4 py-2.5 text-sm text-gray-700 bg-gray-50 border @error('title') border-red-400 @else border-gray-200 @enderror rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-400 transition" />
                        @error('title')
                            <p class="mt-1.5 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Client & Type Row --}}
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="client" class="block text-sm font-medium text-gray-600 mb-1.5">
                                Client Name
                            </label>
                            <input type="text" id="client" name="client" value="{{ old('client') }}"
                                placeholder="e.g. ABC Corporation"
                                class="w-full px-4 py-2.5 text-sm text-gray-700 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-400 transition" />
                        </div>

                        <div>
                            <label for="type" class="block text-sm font-medium text-gray-600 mb-1.5">
                                Project Type
                            </label>
                            <input type="text" id="type" name="type" value="{{ old('type') }}"
                                placeholder="e.g. Commercial, Residential"
                                class="w-full px-4 py-2.5 text-sm text-gray-700 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-400 transition" />
                        </div>
                    </div>

                    {{-- Size, Warranty, Deadline Row --}}
                    <div class="grid grid-cols-3 gap-4">
                        <div>
                            <label for="size" class="block text-sm font-medium text-gray-600 mb-1.5">
                                Size
                            </label>
                            <input type="text" id="size" name="size" value="{{ old('size') }}"
                                placeholder="e.g. 2500 sq ft"
                                class="w-full px-4 py-2.5 text-sm text-gray-700 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-400 transition" />
                        </div>

                        <div>
                            <label for="warranty" class="block text-sm font-medium text-gray-600 mb-1.5">
                                Warranty
                            </label>
                            <input type="text" id="warranty" name="warranty" value="{{ old('warranty') }}"
                                placeholder="e.g. 2 years"
                                class="w-full px-4 py-2.5 text-sm text-gray-700 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-400 transition" />
                        </div>

                        <div>
                            <label for="deadline" class="block text-sm font-medium text-gray-600 mb-1.5">
                                Duration
                            </label>
                            <input type="text" id="deadline" name="deadline" value="{{ old('deadline') }}"
                                class="w-full px-4 py-2.5 text-sm text-gray-700 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-400 transition" />
                        </div>
                    </div>

                    {{-- Description (Quill Editor) --}}
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1.5">
                            Description
                        </label>

                        {{-- Editor Wrapper --}}
                        <div class="rounded-xl overflow-hidden border border-gray-200">

                            {{-- Toolbar --}}
                            <div id="quill-toolbar"
                                class="bg-gray-50 border-b border-gray-200 px-2 py-1 flex flex-wrap items-center gap-0.5">

                                <select class="ql-header" title="Heading">
                                    <option value="1">H1</option>
                                    <option value="2">H2</option>
                                    <option value="3">H3</option>
                                    <option value="4">H4</option>
                                    <option selected>Normal</option>
                                </select>

                                <div class="w-px h-5 bg-gray-200 mx-1"></div>

                                <button class="ql-bold" title="Bold"></button>
                                <button class="ql-italic" title="Italic"></button>
                                <button class="ql-underline" title="Underline"></button>
                                <button class="ql-strike" title="Strikethrough"></button>

                                <div class="w-px h-5 bg-gray-200 mx-1"></div>

                                <button class="ql-list" value="ordered" title="Ordered list"></button>
                                <button class="ql-list" value="bullet" title="Bullet list"></button>

                                <div class="w-px h-5 bg-gray-200 mx-1"></div>

                                <select class="ql-align" title="Alignment">
                                    <option selected></option>
                                    <option value="center"></option>
                                    <option value="right"></option>
                                    <option value="justify"></option>
                                </select>

                                <div class="w-px h-5 bg-gray-200 mx-1"></div>

                                <button class="ql-blockquote" title="Blockquote"></button>
                                <button class="ql-code-block" title="Code block"></button>
                                <button class="ql-link" title="Insert link"></button>

                                <div class="w-px h-5 bg-gray-200 mx-1"></div>

                                <button class="ql-clean" title="Clear formatting"></button>
                            </div>

                            {{-- Quill mounts here --}}
                            <div id="quill-editor"
                                class="min-h-[240px] max-h-[500px] overflow-y-auto bg-white text-gray-700 text-sm leading-relaxed px-1">
                            </div>
                        </div>

                        {{-- Hidden textarea synced before submit --}}
                        <textarea id="content" name="content" class="hidden">{{ old('content') }}</textarea>
                    </div>
                </div>

                {{-- Images Upload --}}
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                    <h3 class="text-sm font-semibold text-gray-700 mb-4 flex items-center gap-2">
                        <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                        Project Images (Max 10)
                    </h3>

                    <input type="file" id="images" name="images[]" multiple accept="image/*" class="hidden" />
                    <label for="images"
                        class="group flex flex-col items-center justify-center w-full h-40 border-2 border-dashed border-gray-200 rounded-xl cursor-pointer bg-gray-50 hover:bg-indigo-50 hover:border-indigo-300 transition-all">
                        <svg class="w-10 h-10 text-gray-400 group-hover:text-indigo-500 transition-colors mb-2"
                            fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                        </svg>
                        <span class="text-sm text-gray-600 group-hover:text-indigo-600 transition-colors">Click to upload images</span>
                        <span class="text-xs text-gray-400 mt-1">PNG, JPG, WEBP up to 2MB each</span>
                    </label>

                    <div id="preview-container" class="mt-4 grid grid-cols-2 md:grid-cols-4 gap-3 hidden"></div>
                </div>

            </div>

            {{-- RIGHT COLUMN: Meta (1/3) --}}
            <div class="space-y-6">

                {{-- Publish Card --}}
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                    <h3 class="text-sm font-semibold text-gray-700 mb-4">Publish</h3>
                    <div class="space-y-3">
                        <button type="submit"
                            class="w-full flex items-center justify-center gap-2 px-5 py-2.5 text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 rounded-xl transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Create Project
                        </button>
                        <a href="{{ route('projects.index') }}"
                            class="w-full flex items-center justify-center gap-2 px-5 py-2.5 text-sm font-medium text-gray-600 bg-gray-100 hover:bg-gray-200 rounded-xl transition-colors">
                            Cancel
                        </a>
                    </div>
                </div>

                {{-- Area --}}
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                    <h3 class="text-sm font-semibold text-gray-700 mb-4 flex items-center gap-2">
                        <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                        Area
                    </h3>
                    <select id="area_id" name="area_id"
                        class="w-full px-4 py-2.5 text-sm text-gray-700 bg-gray-50 border @error('area_id') border-red-400 @else border-gray-200 @enderror rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-400 transition appearance-none">
                        <option value="">Select area</option>
                        @foreach ($areas as $area)
                            <option value="{{ $area->id }}" {{ old('area_id') == $area->id ? 'selected' : '' }}>
                                {{ $area->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('area_id')
                        <p class="mt-1.5 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Services --}}
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                    <h3 class="text-sm font-semibold text-gray-700 mb-4 flex items-center gap-2">
                        <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                        </svg>
                        Services
                    </h3>
                    <div class="space-y-2 max-h-64 overflow-y-auto">
                        @forelse ($services as $service)
                            <label class="flex items-center gap-2 p-2 rounded-lg hover:bg-gray-50 cursor-pointer transition-colors">
                                <input type="checkbox" name="services[]" value="{{ $service->id }}"
                                    {{ in_array($service->id, old('services', [])) ? 'checked' : '' }}
                                    class="w-4 h-4 text-indigo-600 rounded border-gray-300 focus:ring-indigo-500" />
                                <span class="text-sm text-gray-700">{{ $service->name }}</span>
                            </label>
                        @empty
                            <p class="text-xs text-gray-400 py-2">No services available</p>
                        @endforelse
                    </div>
                </div>

            </div>
        </div>

    </form>

    {{-- Image Preview JS --}}
    <script>
        const input = document.getElementById('images');
        const container = document.getElementById('preview-container');

        input.addEventListener('change', (e) => {
            const files = Array.from(e.target.files);
            if (files.length === 0) return;

            container.innerHTML = '';
            container.classList.remove('hidden');

            files.slice(0, 10).forEach((file) => {
                const reader = new FileReader();
                reader.onload = (ev) => {
                    const div = document.createElement('div');
                    div.className = 'relative aspect-square rounded-lg overflow-hidden bg-gray-100';
                    div.innerHTML = `
                        <img src="${ev.target.result}" class="w-full h-full object-cover"/>
                        <button type="button" onclick="this.closest('div').remove(); if(container.children.length === 0) container.classList.add('hidden');"
                            class="absolute top-1 right-1 p-1 bg-red-500 hover:bg-red-600 rounded-full text-white transition-colors">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    `;
                    container.appendChild(div);
                };
                reader.readAsDataURL(file);
            });
        });
    </script>

    {{-- Quill JS + Init --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const quill = new Quill('#quill-editor', {
                theme: 'snow',
                modules: { toolbar: '#quill-toolbar' },
                placeholder: 'Describe the project details, scope, and achievements...',
            });

            // Restore old value on validation fail
            const hiddenContent = document.getElementById('content');
            if (hiddenContent.value.trim()) {
                quill.root.innerHTML = hiddenContent.value;
            }

            // Sync to hidden textarea before form submits
            const form = hiddenContent.closest('form');
            if (form) {
                form.addEventListener('formdata', () => {
                    hiddenContent.value = quill.root.innerHTML;
                });
                form.addEventListener('submit', () => {
                    hiddenContent.value = quill.root.innerHTML;
                });
            }
        });
    </script>

    <style>
        .ql-toolbar.ql-snow,
        .ql-container.ql-snow {
            border: none !important;
        }

        .ql-toolbar button:hover,
        .ql-toolbar button.ql-active {
            color: #6366f1 !important;
        }

        .ql-toolbar button:hover .ql-stroke,
        .ql-toolbar button.ql-active .ql-stroke {
            stroke: #6366f1 !important;
        }

        .ql-toolbar button:hover .ql-fill,
        .ql-toolbar button.ql-active .ql-fill {
            fill: #6366f1 !important;
        }

        .ql-toolbar .ql-picker-label:hover,
        .ql-toolbar .ql-picker-label.ql-active {
            color: #6366f1 !important;
        }

        .ql-editor.ql-blank::before {
            color: #9ca3af;
            font-style: normal;
        }

        .ql-editor pre.ql-syntax {
            background-color: #1e293b;
            color: #e2e8f0;
            border-radius: 0.5rem;
            font-size: 0.8rem;
            padding: 1rem;
        }

        .ql-editor blockquote {
            border-left: 4px solid #6366f1;
            padding-left: 1rem;
            color: #6b7280;
            font-style: italic;
        }
    </style>

</x-dashboard-layout>
