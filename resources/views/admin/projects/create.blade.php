@extends('layouts.admin')

@section('title', 'Add Project')
@section('header', 'Add New Project')

@section('content')
    <div class="max-w-5xl mx-auto">

        {{-- GLOBAL ERROR ALERT --}}
        @if ($errors->any())
            <div class="mb-6 bg-red-500/10 border border-red-500/50 rounded-xl p-4">
                <div class="flex items-center gap-3 text-red-400">
                    <i class="fas fa-exclamation-circle text-xl"></i>
                    <div>
                        <p class="font-semibold">Oops! Ada beberapa kesalahan:</p>
                        <ul class="list-disc list-inside text-sm mt-1 text-red-300">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif

        <div class="bg-card-bg rounded-2xl border border-gray-800 p-8 shadow-xl">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold text-white">Create New Project</h2>
                <p class="text-xs text-gray-500"><span class="text-red-400">*</span> Wajib diisi</p>
            </div>

            <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data"
                class="space-y-8" id="projectForm">
                @csrf

                {{-- BASIC INFO SECTION --}}
                <div class="p-5 bg-gray-800/30 rounded-xl border border-gray-700/50 space-y-4">
                    <h3 class="text-sm font-bold text-primary uppercase tracking-wider">Basic Info</h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        {{-- TITLE --}}
                        <div class="space-y-1">
                            <label class="text-xs text-gray-400">
                                Project Title <span class="text-red-400">*</span>
                            </label>
                            <input type="text" name="title" value="{{ old('title') }}"
                                class="w-full bg-gray-900 border rounded-md p-2 text-sm text-white focus:border-primary outline-none transition @error('title') border-red-500 @else border-gray-700 @enderror"
                                placeholder="e.g. My Awesome App">
                            @error('title')
                                <p class="text-xs text-red-400 flex items-center gap-1">
                                    <i class="fas fa-exclamation-circle"></i> {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- CATEGORY --}}
                        <div class="space-y-1">
                            <label class="text-xs text-gray-400">
                                Category <span class="text-red-400">*</span>
                            </label>
                            <select name="category"
                                class="w-full bg-gray-900 border rounded-md p-2 text-sm text-white focus:border-primary outline-none transition @error('category') border-red-500 @else border-gray-700 @enderror">
                                <option value="Web Development"
                                    {{ old('category') == 'Web Development' ? 'selected' : '' }}>Web Development</option>
                                <option value="Mobile App" {{ old('category') == 'Mobile App' ? 'selected' : '' }}>Mobile
                                    App</option>
                                <option value="UI/UX Design" {{ old('category') == 'UI/UX Design' ? 'selected' : '' }}>UI/UX
                                    Design</option>
                            </select>
                            @error('category')
                                <p class="text-xs text-red-400 flex items-center gap-1">
                                    <i class="fas fa-exclamation-circle"></i> {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- RESOURCES SECTION --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-5 bg-gray-800/30 rounded-xl border border-gray-700/50">
                    <h3 class="col-span-full text-sm font-bold text-primary uppercase tracking-wider mb-2">Resources</h3>

                    <div class="space-y-1">
                        <label class="text-xs text-gray-400">Live Demo URL</label>
                        <input type="url" name="link" value="{{ old('link') }}"
                            class="w-full bg-gray-900 border border-gray-700 rounded-md p-2 text-sm text-white focus:border-primary outline-none transition"
                            placeholder="https://...">
                        @error('link')
                            <p class="text-xs text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="space-y-1">
                        <label class="text-xs text-gray-400">GitHub Repository</label>
                        <input type="url" name="github_link" value="{{ old('github_link') }}"
                            class="w-full bg-gray-900 border border-gray-700 rounded-md p-2 text-sm text-white focus:border-primary outline-none transition"
                            placeholder="https://github.com/...">
                        @error('github_link')
                            <p class="text-xs text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="space-y-1">
                        <label class="text-xs text-gray-400">Figma Design</label>
                        <input type="url" name="design_link" value="{{ old('design_link') }}"
                            class="w-full bg-gray-900 border border-gray-700 rounded-md p-2 text-sm text-white focus:border-primary outline-none transition"
                            placeholder="https://figma.com/...">
                        @error('design_link')
                            <p class="text-xs text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- PROJECT INFO SECTION --}}
                <div class="p-5 bg-gray-800/30 rounded-xl border border-gray-700/50 space-y-4">
                    <h3 class="text-sm font-bold text-primary uppercase tracking-wider">Project Info</h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        {{-- Role --}}
                        <div class="space-y-1">
                            <label class="text-xs text-gray-400">My Role</label>
                            <input type="text" name="role" value="{{ old('role') }}"
                                class="w-full bg-gray-900 border border-gray-700 rounded-md p-2 text-sm text-white focus:border-primary outline-none transition"
                                placeholder="e.g. Fullstack Developer">
                            @error('role')
                                <p class="text-xs text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Project Type --}}
                        <div class="space-y-1">
                            <label class="text-xs text-gray-400">Project Type</label>
                            <select name="project_type"
                                class="w-full bg-gray-900 border border-gray-700 rounded-md p-2 text-sm text-white focus:border-primary outline-none transition">
                                <option value="">Select type...</option>
                                <option value="Personal Project"
                                    {{ old('project_type') == 'Personal Project' ? 'selected' : '' }}>Personal Project
                                </option>
                                <option value="Client Project"
                                    {{ old('project_type') == 'Client Project' ? 'selected' : '' }}>Client Project</option>
                                <option value="Freelance" {{ old('project_type') == 'Freelance' ? 'selected' : '' }}>
                                    Freelance</option>
                                <option value="Open Source" {{ old('project_type') == 'Open Source' ? 'selected' : '' }}>
                                    Open Source</option>
                                <option value="Academic" {{ old('project_type') == 'Academic' ? 'selected' : '' }}>Academic
                                </option>
                            </select>
                            @error('project_type')
                                <p class="text-xs text-red-400">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        {{-- Year --}}
                        <div class="space-y-1">
                            <label class="text-xs text-gray-400">Year</label>
                            <input type="text" name="year" value="{{ old('year', date('Y')) }}"
                                class="w-full bg-gray-900 border border-gray-700 rounded-md p-2 text-sm text-white focus:border-primary outline-none transition"
                                placeholder="e.g. 2024">
                            @error('year')
                                <p class="text-xs text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Team --}}
                        <div class="space-y-1">
                            <label class="text-xs text-gray-400">Team</label>
                            <input type="text" name="team" value="{{ old('team') }}"
                                class="w-full bg-gray-900 border border-gray-700 rounded-md p-2 text-sm text-white focus:border-primary outline-none transition"
                                placeholder="e.g. Solo Project / 3 People">
                            @error('team')
                                <p class="text-xs text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Timeline --}}
                        <div class="space-y-1">
                            <label class="text-xs text-gray-400">Timeline</label>
                            <input type="text" name="timeline" value="{{ old('timeline') }}"
                                class="w-full bg-gray-900 border border-gray-700 rounded-md p-2 text-sm text-white focus:border-primary outline-none transition"
                                placeholder="e.g. ~ 3 Weeks">
                            @error('timeline')
                                <p class="text-xs text-red-400">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- CONTENT SECTION --}}
                <div class="p-5 bg-gray-800/30 rounded-xl border border-gray-700/50 space-y-4">
                    <h3 class="text-sm font-bold text-primary uppercase tracking-wider">Content</h3>

                    {{-- DESCRIPTION --}}
                    <div class="space-y-1">
                        <label class="text-xs text-gray-400">
                            The Challenge (Description) <span class="text-red-400">*</span>
                        </label>
                        <textarea name="description" rows="4"
                            class="w-full bg-gray-900 border rounded-md p-2 text-sm text-white focus:border-primary outline-none transition @error('description') border-red-500 @else border-gray-700 @enderror"
                            placeholder="Describe the problem and your solution...">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="text-xs text-red-400 flex items-center gap-1">
                                <i class="fas fa-exclamation-circle"></i> {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- TECHNOLOGIES --}}
                    <div class="space-y-1">
                        <label class="text-xs text-gray-400">
                            Built With (Technologies) <span class="text-red-400">*</span>
                        </label>
                        <input type="text" name="tech" value="{{ old('tech') }}"
                            class="w-full bg-gray-900 border rounded-md p-2 text-sm text-white focus:border-primary outline-none transition @error('tech') border-red-500 @else border-gray-700 @enderror"
                            placeholder="Laravel, Tailwind, MySQL (Comma separated)">
                        @error('tech')
                            <p class="text-xs text-red-400 flex items-center gap-1">
                                <i class="fas fa-exclamation-circle"></i> {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>

                {{-- FEATURES SECTION --}}
                <div class="p-5 bg-gray-800/30 rounded-xl border border-gray-700/50 space-y-4">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-sm font-bold text-primary uppercase tracking-wider">Key Features</h3>
                            <p class="text-xs text-gray-500 mt-1">Tambahkan fitur utama project beserta icon dan deskripsi
                            </p>
                        </div>
                        <button type="button" onclick="addFeature()"
                            class="text-xs bg-gray-700 hover:bg-gray-600 text-primary px-3 py-1.5 rounded-md border border-gray-600 transition flex items-center gap-1">
                            <i class="fas fa-plus"></i> Add Feature
                        </button>
                    </div>

                    <div id="features-container" class="space-y-3">
                        @if (old('features'))
                            @foreach (old('features') as $index => $feature)
                                <div class="feature-item bg-gray-900/50 rounded-lg p-3 border border-gray-700 relative">
                                    @if ($index > 0)
                                        <button type="button" onclick="this.closest('.feature-item').remove()"
                                            class="absolute top-2 right-2 text-red-500 hover:text-red-400 transition text-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    @endif
                                    <div class="grid grid-cols-1 md:grid-cols-12 gap-3">
                                        {{-- Icon Input --}}
                                        <div class="md:col-span-3 space-y-1">
                                            <label class="text-xs text-gray-400">Icon (FontAwesome)</label>
                                            <div class="relative">
                                                <span class="absolute left-3 top-2 text-gray-500">
                                                    <i class="{{ $feature['icon'] ?? 'fa-solid fa-star' }}"
                                                        id="iconPreview{{ $index }}"></i>
                                                </span>
                                                <input type="text" name="features[{{ $index }}][icon]"
                                                    value="{{ $feature['icon'] ?? 'fa-solid fa-star' }}"
                                                    class="w-full bg-gray-900 border border-gray-700 rounded-md pl-10 pr-3 py-2 text-white text-sm focus:border-primary outline-none"
                                                    placeholder="fas fa-bolt"
                                                    oninput="updateIconPreview(this, 'iconPreview{{ $index }}')">
                                            </div>
                                        </div>
                                        {{-- Title Input --}}
                                        <div class="md:col-span-4 space-y-1">
                                            <label class="text-xs text-gray-400">Feature Title</label>
                                            <input type="text" name="features[{{ $index }}][title]"
                                                value="{{ $feature['title'] ?? '' }}"
                                                class="w-full bg-gray-900 border border-gray-700 rounded-md p-2 text-white text-sm focus:border-primary outline-none"
                                                placeholder="e.g. Fast Performance">
                                        </div>
                                        {{-- Description Input --}}
                                        <div class="md:col-span-5 space-y-1">
                                            <label class="text-xs text-gray-400">Description</label>
                                            <input type="text" name="features[{{ $index }}][description]"
                                                value="{{ $feature['description'] ?? '' }}"
                                                class="w-full bg-gray-900 border border-gray-700 rounded-md p-2 text-white text-sm focus:border-primary outline-none"
                                                placeholder="Short description...">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="feature-item bg-gray-900/50 rounded-lg p-3 border border-gray-700 relative">
                                <div class="grid grid-cols-1 md:grid-cols-12 gap-3">
                                    {{-- Icon Input --}}
                                    <div class="md:col-span-3 space-y-1">
                                        <label class="text-xs text-gray-400">Icon (FontAwesome)</label>
                                        <div class="relative">
                                            <span class="absolute left-3 top-2 text-gray-500">
                                                <i class="fa-solid fa-star" id="iconPreview0"></i>
                                            </span>
                                            <input type="text" name="features[0][icon]" value="fa-solid fa-star"
                                                class="w-full bg-gray-900 border border-gray-700 rounded-md pl-10 pr-3 py-2 text-white text-sm focus:border-primary outline-none"
                                                placeholder="fa-solid fa-bolt"
                                                oninput="updateIconPreview(this, 'iconPreview0')">
                                        </div>
                                    </div>
                                    {{-- Title Input --}}
                                    <div class="md:col-span-4 space-y-1">
                                        <label class="text-xs text-gray-400">Feature Title</label>
                                        <input type="text" name="features[0][title]"
                                            class="w-full bg-gray-900 border border-gray-700 rounded-md p-2 text-white text-sm focus:border-primary outline-none"
                                            placeholder="e.g. Fast Performance">
                                    </div>
                                    {{-- Description Input --}}
                                    <div class="md:col-span-5 space-y-1">
                                        <label class="text-xs text-gray-400">Description</label>
                                        <input type="text" name="features[0][description]"
                                            class="w-full bg-gray-900 border border-gray-700 rounded-md p-2 text-white text-sm focus:border-primary outline-none"
                                            placeholder="Short description...">
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>

                    {{-- Icon Suggestions --}}
                    <div class="bg-gray-900/50 rounded-lg p-3 border border-gray-800">
                        <p class="text-xs text-gray-400 mb-2"><i class="fa-solid fa-lightbulb text-yellow-500 mr-1"></i>
                            Icon Suggestions (click to copy):</p>
                        <div class="flex flex-wrap gap-2">
                            @foreach (['fa-solid fa-bolt', 'fa-solid fa-shield', 'fa-solid fa-rocket', 'fa-solid fa-gear', 'fa-solid fa-code', 'fa-solid fa-database', 'fa-solid fa-cloud', 'fa-solid fa-lock', 'fa-solid fa-chart-line', 'fa-solid fa-mobile-screen', 'fa-solid fa-palette', 'fa-solid fa-globe'] as $icon)
                                <button type="button" onclick="copyIcon('{{ $icon }}')"
                                    class="flex items-center gap-1.5 px-2 py-1 bg-gray-800 hover:bg-gray-700 rounded text-xs text-gray-300 hover:text-white transition border border-gray-700">
                                    <i class="{{ $icon }}"></i>
                                    <span class="hidden sm:inline">{{ $icon }}</span>
                                </button>
                            @endforeach
                        </div>
                        <p class="text-xs text-gray-500 mt-2">
                            Browse more icons at <a href="https://fontawesome.com/icons" target="_blank"
                                class="text-primary hover:underline">fontawesome.com/icons</a>
                        </p>
                    </div>
                </div>

                {{-- MEDIA SECTION --}}
                <div class="p-5 bg-gray-800/30 rounded-xl border border-gray-700/50 space-y-4">
                    <h3 class="text-sm font-bold text-primary uppercase tracking-wider">Media</h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        {{-- MAIN THUMBNAIL --}}
                        <div class="space-y-2">
                            <label class="text-xs text-gray-400">
                                Main Thumbnail <span class="text-red-400">*</span>
                            </label>
                            <div class="relative">
                                <input type="file" name="image" id="thumbnailInput" accept="image/*"
                                    class="w-full text-sm text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:bg-primary/10 file:text-primary hover:file:bg-primary/20 cursor-pointer transition"
                                    onchange="previewThumbnail(this)">
                            </div>
                            {{-- Thumbnail Preview --}}
                            <div id="thumbnailPreview" class="hidden mt-2">
                                <div class="relative inline-block">
                                    <img id="thumbnailImg" src="" alt="Preview"
                                        class="max-h-32 rounded-md border border-gray-700 shadow-lg">
                                    <button type="button" onclick="clearThumbnail()"
                                        class="absolute -top-2 -right-2 bg-red-500 hover:bg-red-600 text-white rounded-full w-5 h-5 flex items-center justify-center text-xs transition">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            @error('image')
                                <p class="text-xs text-red-400 flex items-center gap-1">
                                    <i class="fas fa-exclamation-circle"></i> {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- GALLERY --}}
                        <div class="space-y-2">
                            <label class="text-xs text-gray-400">Project Gallery (Multiple)</label>
                            <input type="file" name="gallery[]" id="galleryInput" multiple accept="image/*"
                                class="w-full text-sm text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:bg-gray-700 file:text-white hover:file:bg-gray-600 cursor-pointer transition"
                                onchange="previewGallery(this)">
                            <p class="text-xs text-gray-500">
                                <i class="fas fa-info-circle mr-1"></i> Bisa pilih banyak foto sekaligus (Ctrl + Click)
                            </p>
                            {{-- Gallery Preview --}}
                            <div id="galleryPreview" class="hidden mt-2">
                                <div class="flex flex-wrap gap-2" id="galleryContainer"></div>
                                <button type="button" onclick="clearGallery()"
                                    class="mt-2 text-xs text-red-400 hover:text-red-300 transition">
                                    <i class="fas fa-trash mr-1"></i> Hapus semua gambar
                                </button>
                            </div>
                            @error('gallery')
                                <p class="text-xs text-red-400 flex items-center gap-1">
                                    <i class="fas fa-exclamation-circle"></i> {{ $message }}
                                </p>
                            @enderror
                            @error('gallery.*')
                                <p class="text-xs text-red-400 flex items-center gap-1">
                                    <i class="fas fa-exclamation-circle"></i> {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- ACTION BUTTONS --}}
                <div class="pt-6 border-t border-gray-800 flex justify-between items-center">
                    <a href="{{ route('admin.projects.index') }}"
                        class="text-gray-400 hover:text-white px-6 py-3 rounded-lg border border-gray-700 hover:border-gray-600 transition flex items-center gap-2">
                        <i class="fas fa-arrow-left"></i> Cancel
                    </a>
                    <button type="submit" id="submitBtn"
                        class="bg-primary hover:bg-orange-600 text-white px-8 py-3 rounded-lg font-bold shadow-lg shadow-primary/20 transition transform hover:scale-105 flex items-center gap-2 disabled:opacity-50 disabled:cursor-not-allowed disabled:transform-none">
                        <span id="submitText">Publish Project</span>
                        <span id="submitLoader" class="hidden">
                            <i class="fas fa-spinner fa-spin"></i> Publishing...
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Feature counter for unique IDs
        let featureCount = document.querySelectorAll('.feature-item').length;

        // ADD FEATURE FUNCTION
        function addFeature() {
            const container = document.getElementById('features-container');
            const div = document.createElement('div');
            div.className = 'feature-item bg-gray-800/50 rounded-xl p-4 border border-gray-700 relative';
            div.innerHTML = `
                <button type="button" onclick="this.closest('.feature-item').remove()"
                    class="absolute top-2 right-2 text-red-500 hover:text-red-400 transition text-sm">
                    <i class="fa-solid fa-trash"></i>
                </button>
                <div class="grid grid-cols-1 md:grid-cols-12 gap-3">
                    <div class="md:col-span-3 space-y-1">
                        <label class="text-xs text-gray-400">Icon (FontAwesome)</label>
                        <div class="relative">
                            <span class="absolute left-3 top-2.5 text-gray-500">
                                <i class="fa-solid fa-star" id="iconPreview${featureCount}"></i>
                            </span>
                            <input type="text" name="features[${featureCount}][icon]" value="fa-solid fa-star"
                                class="w-full bg-gray-900 border border-gray-700 rounded-lg pl-10 pr-3 py-2 text-white text-sm focus:border-primary outline-none"
                                placeholder="fa-solid fa-bolt"
                                oninput="updateIconPreview(this, 'iconPreview${featureCount}')">
                        </div>
                    </div>
                    <div class="md:col-span-4 space-y-1">
                        <label class="text-xs text-gray-400">Feature Title</label>
                        <input type="text" name="features[${featureCount}][title]"
                            class="w-full bg-gray-900 border border-gray-700 rounded-lg p-2 text-white text-sm focus:border-primary outline-none"
                            placeholder="e.g. Fast Performance">
                    </div>
                    <div class="md:col-span-5 space-y-1">
                        <label class="text-xs text-gray-400">Description</label>
                        <input type="text" name="features[${featureCount}][description]"
                            class="w-full bg-gray-900 border border-gray-700 rounded-lg p-2 text-white text-sm focus:border-primary outline-none"
                            placeholder="Short description...">
                    </div>
                </div>
            `;
            container.appendChild(div);
            featureCount++;
            div.querySelector('input[name*="[title]"]').focus();
        }

        // Update icon preview in real-time
        function updateIconPreview(input, previewId) {
            const preview = document.getElementById(previewId);
            if (preview) {
                preview.className = input.value || 'fa-solid fa-star';
            }
        }

        // Copy icon class to clipboard
        function copyIcon(iconClass) {
            navigator.clipboard.writeText(iconClass).then(() => {
                // Show a brief toast notification
                const toast = document.createElement('div');
                toast.className =
                    'fixed bottom-4 right-4 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg z-50 animate-pulse';
                toast.innerHTML = `<i class="fas fa-check mr-2"></i> Copied: ${iconClass}`;
                document.body.appendChild(toast);
                setTimeout(() => toast.remove(), 2000);
            });
        }

        // THUMBNAIL PREVIEW
        function previewThumbnail(input) {
            const preview = document.getElementById('thumbnailPreview');
            const img = document.getElementById('thumbnailImg');

            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    img.src = e.target.result;
                    preview.classList.remove('hidden');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function clearThumbnail() {
            document.getElementById('thumbnailInput').value = '';
            document.getElementById('thumbnailPreview').classList.add('hidden');
        }

        // GALLERY PREVIEW
        function previewGallery(input) {
            const preview = document.getElementById('galleryPreview');
            const container = document.getElementById('galleryContainer');
            container.innerHTML = '';

            if (input.files && input.files.length > 0) {
                preview.classList.remove('hidden');

                Array.from(input.files).forEach((file, index) => {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const imgWrapper = document.createElement('div');
                        imgWrapper.className = 'relative';
                        imgWrapper.innerHTML = `
                            <img src="${e.target.result}" alt="Gallery ${index + 1}"
                                class="h-20 w-20 object-cover rounded-lg border border-gray-700">
                            <span class="absolute -top-1 -right-1 bg-gray-800 text-xs text-gray-400 rounded-full w-5 h-5 flex items-center justify-center">
                                ${index + 1}
                            </span>
                        `;
                        container.appendChild(imgWrapper);
                    }
                    reader.readAsDataURL(file);
                });
            }
        }

        function clearGallery() {
            document.getElementById('galleryInput').value = '';
            document.getElementById('galleryPreview').classList.add('hidden');
            document.getElementById('galleryContainer').innerHTML = '';
        }

        // FORM SUBMIT LOADING STATE
        document.getElementById('projectForm').addEventListener('submit', function(e) {
            const submitBtn = document.getElementById('submitBtn');
            const submitText = document.getElementById('submitText');
            const submitLoader = document.getElementById('submitLoader');

            submitBtn.disabled = true;
            submitText.classList.add('hidden');
            submitLoader.classList.remove('hidden');
        });
    </script>
@endsection
