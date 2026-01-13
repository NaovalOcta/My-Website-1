@extends('layouts.admin')

@section('title', 'Projects List')
@section('header', 'Manage Projects')

@section('content')
    <div class="space-y-6">

        {{-- Flash Message --}}
        @if (session('success'))
            <div
                class="bg-green-500/10 border border-green-500/20 text-green-500 px-4 py-3 rounded-lg flex items-center gap-2">
                <i class="fas fa-check-circle"></i>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        {{-- Header Actions --}}
        <div class="flex justify-between items-center">
            <h2 class="text-xl font-bold text-white">All Projects</h2>
            <a href="{{ route('admin.projects.create') }}"
                class="bg-primary hover:bg-orange-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition flex items-center gap-2 shadow-lg shadow-primary/20">
                <i class="fas fa-plus"></i> Add New Project
            </a>
        </div>

        {{-- Table Card --}}
        <div class="bg-card-bg rounded-2xl border border-gray-800 overflow-hidden shadow-lg">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-800/50 text-gray-400 text-xs uppercase tracking-wider">
                            <th class="p-4 font-medium">Image</th>
                            <th class="p-4 font-medium">Title & Category</th>
                            <th class="p-4 font-medium">Description</th>
                            <th class="p-4 font-medium">Link Github</th>
                            <th class="p-4 font-medium">Tech Stack</th>
                            <th class="p-4 font-medium">Created At</th>
                            <th class="p-4 font-medium text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-800 text-sm">
                        @forelse($projects as $project)
                            <tr class="hover:bg-gray-800/30 transition group">
                                <td class="p-4">
                                    @if ($project->image)
                                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}"
                                            class="w-12 h-12 rounded-lg object-cover border border-gray-700">
                                    @else
                                        <div
                                            class="w-12 h-12 rounded-lg bg-gray-800 border border-gray-700 flex items-center justify-center text-gray-600">
                                            <i class="fas fa-image"></i>
                                        </div>
                                    @endif
                                </td>
                                <td class="p-4">
                                    <p class="text-white font-medium text-base">{{ $project->title }}</p>
                                    <span
                                        class="inline-block mt-1 px-2 py-0.5 rounded text-xs bg-blue-500/10 text-blue-400 border border-blue-500/20">
                                        {{ $project->category }}
                                    </span>
                                </td>
                                <td class="p-4 text-gray-400 max-w-xs truncate">
                                    {{ Str::limit($project->description, 50) }}
                                </td>
                                <td class="p-4 text-gray-400 max-w-xs truncate">
                                    {{ Str::limit($project->link, 50) }}
                                </td>
                                <td class="p-4 text-gray-400 max-w-xs truncate">
                                    {{ $project->tech ? implode(', ', $project->tech) : '-' }}
                                </td>
                                <td class="p-4 text-gray-500 text-xs">
                                    {{ $project->created_at->format('d M Y') }}
                                </td>
                                <td class="p-4 text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <a href="{{ route('admin.projects.edit', $project) }}"
                                            class="p-2 rounded-lg bg-gray-800 hover:bg-gray-700 text-gray-400 hover:text-white transition"
                                            title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus project ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="p-2 rounded-lg bg-gray-800 hover:bg-red-500/20 text-gray-400 hover:text-red-500 transition"
                                                title="Delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="p-8 text-center text-gray-500">
                                    <div class="flex flex-col items-center gap-2">
                                        <i class="far fa-folder-open text-3xl opacity-50"></i>
                                        <p>No projects found. Start by adding one!</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- Pagination --}}
            @if ($projects->hasPages())
                <div class="p-4 border-t border-gray-800">
                    {{ $projects->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection
