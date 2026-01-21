@extends('layouts.app')

@section('title', $project->title)

@section('content')
    <div class="container mx-auto px-4 py-12 md:py-20">

        {{-- Tombol Kembali --}}
        <div class="max-w-4xl mx-auto mb-8">
            <a href="{{ route('projects.index') }}"
                class="inline-flex items-center gap-2 text-gray-400 hover:text-primary transition duration-300 group">
                <i class="fas fa-arrow-left group-hover:-translate-x-1 transition-transform"></i>
                <span>Back to Projects</span>
            </a>
        </div>

        {{-- Main Content Card --}}
        <div class="max-w-4xl mx-auto bg-card-bg border border-gray-800 rounded-2xl overflow-hidden shadow-2xl">

            {{-- 1. Hero Image Section --}}
            <div class="relative w-full h-64 md:h-96 bg-gray-900 overflow-hidden group">
                @if ($project->image)
                    <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}"
                        class="w-full h-full object-cover object-center group-hover:scale-105 transition duration-700 ease-in-out">
                @else
                    {{-- Fallback Image jika tidak ada gambar --}}
                    <div class="flex items-center justify-center w-full h-full text-gray-700">
                        <i class="fas fa-image text-6xl"></i>
                    </div>
                @endif

                {{-- Overlay Gradient (Agar teks judul terbaca jelas jika ditaruh diatas gambar - Opsional) --}}
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 to-transparent"></div>
            </div>

            {{-- 2. Project Info & Description --}}
            <div class="p-8 md:p-10">

                {{-- Header: Category & Title --}}
                <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4 mb-6">
                    <div>
                        <span
                            class="inline-block px-3 py-1 mb-3 text-xs font-semibold tracking-wider text-primary uppercase bg-primary/10 rounded-full border border-primary/20">
                            {{ $project->category }}
                        </span>
                        <h1 class="text-3xl md:text-4xl font-bold text-white leading-tight">
                            {{ $project->title }}
                        </h1>
                    </div>

                    {{-- Action Buttons (Demo & Github) --}}
                    <div class="flex flex-wrap gap-3 mt-2 md:mt-0">
                        @if ($project->link)
                            <a href="{{ $project->link }}" target="_blank"
                                class="inline-flex items-center gap-2 px-5 py-2.5 bg-primary hover:bg-orange-600 text-white text-sm font-medium rounded-lg transition shadow-lg shadow-primary/25">
                                <i class="fas fa-external-link-alt"></i> Live Demo
                            </a>
                        @endif

                        {{-- Contoh tombol Source Code (Bisa kamu aktifkan jika nanti sudah siap) --}}
                        {{--
                        <a href="#" target="_blank"
                           class="inline-flex items-center gap-2 px-5 py-2.5 bg-gray-800 hover:bg-gray-700 border border-gray-700 text-gray-300 hover:text-white text-sm font-medium rounded-lg transition">
                            <i class="fab fa-github"></i> Source Code
                        </a>
                        --}}
                    </div>
                </div>

                {{-- Tech Stack Badges --}}
                <div class="mb-8 border-b border-gray-800 pb-8">
                    <h3 class="text-gray-400 text-sm font-medium mb-3 uppercase tracking-wider">Technologies Used</h3>
                    <div class="flex flex-wrap gap-2">
                        @if (!empty($project->tech))
                            @foreach ($project->tech as $tech)
                                <span
                                    class="px-3 py-1.5 text-sm text-gray-300 bg-gray-900 border border-gray-700 rounded-md hover:border-gray-500 transition cursor-default">
                                    {{ $tech }}
                                </span>
                            @endforeach
                        @else
                            <span class="text-gray-600 text-sm italic">No specific technology listed.</span>
                        @endif
                    </div>
                </div>

                {{-- Description (Rich Content) --}}
                <div class="prose prose-invert prose-lg max-w-none text-gray-300 leading-relaxed">
                    {{-- nl2br untuk mengubah baris baru menjadi <br> --}}
                    {!! nl2br(e($project->description)) !!}
                </div>

            </div>
        </div>

        {{-- Next/Prev Navigation (Opsional - Nilai Plus) --}}
        {{-- Kamu bisa menambahkan logika next/prev project di controller nanti --}}

    </div>
@endsection
