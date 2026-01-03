@extends('layouts.admin')

@section('title', 'Edit Project')
@section('header', 'Edit Project')

@section('content')
    <div class="max-w-4xl mx-auto">
        <a href="{{ route('admin.projects.index') }}"
            class="inline-flex items-center gap-2 text-gray-400 hover:text-white mb-6 transition">
            <i class="fas fa-arrow-left"></i> Back to List
        </a>

        <div class="bg-card-bg rounded-2xl border border-gray-800 shadow-lg p-6 lg:p-8">
            <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data"
                class="space-y-6">
                @csrf
                @method('PUT') <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label for="title" class="text-sm font-medium text-gray-300">Project Title <span
                                class="text-red-500">*</span></label>
                        <input type="text" name="title" id="title" value="{{ old('title', $project->title) }}"
                            class="w-full bg-gray-900/50 border border-gray-700 rounded-lg px-4 py-2.5 text-gray-200 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition">
                    </div>

                    <div class="space-y-2">
                        <label for="category" class="text-sm font-medium text-gray-300">Category <span
                                class="text-red-500">*</span></label>
                        <select name="category" id="category"
                            class="w-full bg-gray-900/50 border border-gray-700 rounded-lg px-4 py-2.5 text-gray-200 focus:outline-none focus:border-primary transition">
                            <option value="Web Development" {{ $project->category == 'Web Development' ? 'selected' : '' }}>
                                Web Development</option>
                            <option value="Mobile App" {{ $project->category == 'Mobile App' ? 'selected' : '' }}>Mobile App
                            </option>
                            <option value="UI/UX Design" {{ $project->category == 'UI/UX Design' ? 'selected' : '' }}>UI/UX
                                Design</option>
                            <option value="IoT" {{ $project->category == 'IoT' ? 'selected' : '' }}>IoT</option>
                        </select>
                    </div>
                </div>

                <div class="space-y-2">
                    <label for="description" class="text-sm font-medium text-gray-300">Description <span
                            class="text-red-500">*</span></label>
                    <textarea name="description" id="description" rows="5"
                        class="w-full bg-gray-900/50 border border-gray-700 rounded-lg px-4 py-3 text-gray-200 focus:outline-none focus:border-primary transition resize-none">{{ old('description', $project->description) }}</textarea>
                </div>

                <div class="space-y-2 col-span-1 md:col-span-2">
                    <label for="tech" class="text-sm font-medium text-gray-300">
                        Technologies Used <span class="text-gray-500 text-xs font-normal">(Separate with comma, Max
                            5)</span>
                    </label>
                    <input type="text" name="tech" id="tech" value="{{ old('tech') }}"
                        class="w-full bg-gray-900/50 border border-gray-700 rounded-lg px-4 py-2.5 text-gray-200 focus:outline-none focus:border-primary transition placeholder-gray-600"
                        placeholder="e.g. Laravel, Tailwind CSS, MySQL, Figma">
                    <p class="text-xs text-gray-500">Example: "Laravel, VueJS, MySQL"</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label for="image" class="text-sm font-medium text-gray-300">Project Thumbnail</label>
                        @if ($project->image)
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $project->image) }}"
                                    class="h-20 w-auto rounded border border-gray-700">
                            </div>
                        @endif
                        <input type="file" name="image" id="image"
                            class="w-full bg-gray-900/50 border border-gray-700 rounded-lg px-4 py-2 text-sm text-gray-400 file:mr-4 file:py-1 file:px-3 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20 transition cursor-pointer">
                    </div>

                    <div class="space-y-2">
                        <label for="link" class="text-sm font-medium text-gray-300">Project Link</label>
                        <div class="relative">
                            <span class="absolute left-4 top-3 text-gray-500 text-sm"><i class="fas fa-link"></i></span>
                            <input type="url" name="link" id="link" value="{{ old('link', $project->link) }}"
                                class="w-full bg-gray-900/50 border border-gray-700 rounded-lg pl-10 pr-4 py-2.5 text-gray-200 focus:outline-none focus:border-primary transition">
                        </div>
                    </div>
                </div>

                <div class="pt-4 border-t border-gray-800 flex justify-end">
                    <button type="submit"
                        class="bg-primary hover:bg-orange-600 text-white px-8 py-3 rounded-lg font-medium transition shadow-lg shadow-primary/20 flex items-center gap-2">
                        <i class="fas fa-save"></i> Update Project
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
