<x-dashboard-layout>

    {{-- Page Header --}}
    <div class="mb-8 flex items-center gap-4">
        <a href="{{ route('admin.blog.index') }}"
            class="p-2 rounded-xl text-gray-400 hover:text-gray-600 hover:bg-gray-100 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
            </svg>
        </a>
        <div class="border-l pl-3">
            <h2 class="text-2xl font-semibold text-gray-700">Create Blog</h2>
            <p class="mt-0.5 text-sm text-gray-500">Fill in the details to publish a new blog post</p>
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
    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            {{-- LEFT COLUMN: Main Content --}}
            <div class="lg:col-span-2 space-y-6">

                {{-- Post Details Card --}}
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                    <h3 class="text-sm font-semibold text-gray-800 mb-4 flex items-center gap-2">
                        <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
                        </svg>
                        Post Details
                    </h3>

                    <div class="space-y-4">

                        {{-- Title Field --}}
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-600 mb-1.5">
                                Title <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="title" name="title" value="{{ old('title') }}"
                                placeholder="Enter a compelling blog title..."
                                class="w-full px-4 py-2.5 text-sm text-gray-700 bg-gray-50 border @error('title') border-red-400 @else border-gray-200 @enderror rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition" />
                            @error('title')
                                <p class="mt-1.5 text-xs text-red-500 flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Slug Field --}}
                        <div>
                            <label for="slug" class="block text-sm font-medium text-gray-600 mb-1.5">
                                Slug <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <span
                                    class="absolute inset-y-0 left-0 flex items-center pl-4 text-gray-400 text-sm select-none pointer-events-none">
                                    /blog/
                                </span>
                                <input type="text" id="slug" name="slug" value="{{ old('slug') }}"
                                    placeholder="my-blog-post"
                                    class="w-full pl-14 pr-4 py-2.5 text-sm text-gray-700 bg-gray-50 border @error('slug') border-red-400 @else border-gray-200 @enderror rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent font-mono transition" />
                            </div>
                            <p class="mt-1.5 text-xs text-gray-400">Auto-generated from title. You can customize it.</p>
                            @error('slug')
                                <p class="mt-1 text-xs text-red-500 flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 000 2 1 1 0 000-2z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                    </div>
                </div>

                {{-- Content Card --}}
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                    <h3 class="text-sm font-semibold text-gray-700 mb-4 flex items-center gap-2">
                        <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125" />
                        </svg>
                        Content
                    </h3>

                    {{-- Editor Wrapper --}}
                    <div class="@error('content') ring-2 ring-red-400 @enderror rounded-xl overflow-hidden border border-gray-200">

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

                            <select class="ql-color" title="Text color"></select>
                            <select class="ql-background" title="Background color"></select>

                            <div class="w-px h-5 bg-gray-200 mx-1"></div>

                            <button class="ql-list" value="ordered" title="Ordered list"></button>
                            <button class="ql-list" value="bullet" title="Bullet list"></button>
                            <button class="ql-indent" value="-1" title="Outdent"></button>
                            <button class="ql-indent" value="+1" title="Indent"></button>

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

                            <div class="w-px h-5 bg-gray-200 mx-1"></div>

                            <button class="ql-link" title="Insert link"></button>
                            <button class="ql-image" title="Insert image"></button>

                            <div class="w-px h-5 bg-gray-200 mx-1"></div>

                            <button class="ql-clean" title="Clear formatting"></button>
                        </div>

                        {{-- Editor body --}}
                        <div id="quill-editor"
                            class="min-h-[320px] max-h-[600px] overflow-y-auto bg-white text-gray-700 text-sm leading-relaxed px-1">
                        </div>
                    </div>

                    {{-- Hidden textarea --}}
                    <textarea id="content" name="content" class="hidden">{{ old('content') }}</textarea>

                    @error('content')
                        <p class="mt-1.5 text-xs text-red-500 flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 000 2 1 1 0 000-2z"
                                    clip-rule="evenodd" />
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

            </div>

            {{-- RIGHT COLUMN: Meta --}}
            <div class="space-y-6">

                {{-- Publish Card --}}
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                    <h3 class="text-sm font-semibold text-gray-700 mb-4 flex items-center gap-2">
                        <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                        </svg>
                        Publish
                    </h3>

                    <div class="space-y-3">
                        <button type="submit"
                            class="w-full flex items-center justify-center gap-2 px-5 py-2.5 text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 active:bg-indigo-800 rounded-xl shadow-sm transition-colors duration-150">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                            </svg>
                            Publish Blog
                        </button>

                        <a href="{{ route('blogs.index') }}"
                            class="w-full flex items-center justify-center gap-2 px-5 py-2.5 text-sm font-medium text-gray-600 bg-gray-100 hover:bg-gray-200 rounded-xl transition-colors duration-150">
                            Cancel
                        </a>
                    </div>
                </div>

                {{-- Author Card --}}
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                    <h3 class="text-sm font-semibold text-gray-700 mb-4 flex items-center gap-2">
                        <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                        Author
                    </h3>

                    <div>
                        <label for="user_id" class="block text-sm font-medium text-gray-600 mb-1.5">
                            Assign Author <span class="text-red-500">*</span>
                        </label>
                        <select id="user_id" name="user_id"
                            class="w-full px-4 py-2.5 text-sm text-gray-700 bg-gray-50 border @error('user_id') border-red-400 @else border-gray-200 @enderror rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition appearance-none cursor-pointer">
                            <option value="" disabled {{ old('user_id') ? '' : 'selected' }}>Select an author</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>
                                    {{ $user->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('user_id')
                            <p class="mt-1.5 text-xs text-red-500 flex items-center gap-1">
                                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 000 2 1 1 0 000-2z"
                                        clip-rule="evenodd" />
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>

                {{-- Featured Image Card --}}
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                    <h3 class="text-sm font-semibold text-gray-700 mb-4 flex items-center gap-2">
                        <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                        Featured Image
                    </h3>

                    {{-- Drop Zone --}}
                    <label for="image"
                        class="group flex flex-col items-center justify-center w-full h-36 border-2 border-dashed @error('image') border-red-400 @else border-gray-200 @enderror rounded-xl cursor-pointer bg-gray-50 hover:bg-indigo-50 hover:border-indigo-300 transition-all duration-200">

                        <div id="image-placeholder"
                            class="flex flex-col items-center gap-2 text-gray-400 group-hover:text-indigo-500 transition-colors">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                            </svg>
                            <span class="text-xs font-medium">Click to upload image</span>
                            <span class="text-xs">PNG, JPG, WEBP up to 2MB</span>
                        </div>

                        <img id="image-preview" class="hidden w-full h-full object-cover rounded-xl" src="#"
                            alt="Preview" />

                        <input id="image" name="image" type="file" accept="image/*" class="hidden" />
                    </label>

                    <button type="button" id="remove-image"
                        class="hidden mt-2 w-full text-xs text-red-500 hover:text-red-600 hover:underline transition-colors">
                        Remove image
                    </button>

                    @error('image')
                        <p class="mt-1.5 text-xs text-red-500 flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 000 2 1 1 0 000-2z"
                                    clip-rule="evenodd" />
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

            </div>
        </div>

    </form>

    {{-- JS: Slug auto-generator + Image preview --}}
    <script>
        const titleInput = document.getElementById('title');
        const slugInput = document.getElementById('slug');
        let slugEdited = false;

        titleInput.addEventListener('input', () => {
            if (!slugEdited) {
                slugInput.value = titleInput.value
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

        const imageInput = document.getElementById('image');
        const imagePreview = document.getElementById('image-preview');
        const placeholder = document.getElementById('image-placeholder');
        const removeBtn = document.getElementById('remove-image');

        imageInput.addEventListener('change', (e) => {
            const file = e.target.files[0];
            if (!file) return;
            const reader = new FileReader();
            reader.onload = (ev) => {
                imagePreview.src = ev.target.result;
                imagePreview.classList.remove('hidden');
                placeholder.classList.add('hidden');
                removeBtn.classList.remove('hidden');
            };
            reader.readAsDataURL(file);
        });

        removeBtn.addEventListener('click', () => {
            imageInput.value = '';
            imagePreview.src = '#';
            imagePreview.classList.add('hidden');
            placeholder.classList.remove('hidden');
            removeBtn.classList.add('hidden');
        });
    </script>

    {{-- Quill JS + Init --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const quill = new Quill('#quill-editor', {
                theme: 'snow',
                modules: { toolbar: '#quill-toolbar' },
                placeholder: 'Write your blog content here...',
            });

            const hiddenContent = document.getElementById('content');
            if (hiddenContent.value.trim()) {
                quill.root.innerHTML = hiddenContent.value;
            }

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
