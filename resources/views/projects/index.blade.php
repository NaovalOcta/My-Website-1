@extends('layouts.app')

@section('content')
    <div class="pt-32 pb-20 relative overflow-hidden min-h-screen">

        <div
            class="absolute top-20 left-1/2 -translate-x-1/2 w-full max-w-4xl h-96 bg-primary/10 rounded-full blur-[120px] -z-10">
        </div>
        <div class="absolute bottom-0 right-0 w-80 h-80 bg-purple-600/5 rounded-full blur-[100px] -z-10"></div>

        <div class="container mx-auto px-6">

            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6 reveal">
                <div class="max-w-2xl">
                    <a href="{{ url('/') }}"
                        class="inline-flex items-center gap-2 text-gray-400 hover:text-primary transition mb-4 group">
                        <i class="fas fa-arrow-left group-hover:-translate-x-1 transition"></i> Back to Home
                    </a>
                    <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">
                        All <span class="text-primary">Projects</span>
                    </h1>
                    <p class="text-gray-400 text-lg">
                        Kumpulan lengkap hasil karya, eksplorasi, dan studi kasus yang telah saya kerjakan selama perjalanan
                        karir saya.
                    </p>
                </div>

                <div class="flex flex-wrap gap-2">
                    <button
                        class="px-4 py-2 rounded-full bg-primary text-white text-sm font-semibold shadow-lg shadow-primary/25">All</button>
                    <button
                        class="px-4 py-2 rounded-full bg-card-bg border border-gray-700 text-gray-400 hover:text-white hover:border-primary transition text-sm">Mobile</button>
                    <button
                        class="px-4 py-2 rounded-full bg-card-bg border border-gray-700 text-gray-400 hover:text-white hover:border-primary transition text-sm">Web</button>
                    <button
                        class="px-4 py-2 rounded-full bg-card-bg border border-gray-700 text-gray-400 hover:text-white hover:border-primary transition text-sm">IoT</button>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($projects as $project)
                    {{-- ITEM PROJECT (Looping Normal) --}}
                    <a href="{{ route('projects.show', $project->slug) }}"
                        class="group block relative bg-card-bg rounded-3xl overflow-hidden border border-gray-800 hover:border-primary/50 reveal transition duration-500 hover:shadow-2xl hover:shadow-primary/10">
                        <div class="relative h-64 overflow-hidden">
                            <div
                                class="absolute inset-0 bg-gray-900 z-10 opacity-0 group-hover:opacity-20 transition duration-500">
                            </div>
                            @if ($project->image)
                                <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}"
                                    class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                            @else
                                <div class="w-full h-full bg-gray-800 flex items-center justify-center">
                                    <i class="fas fa-image text-4xl text-gray-600"></i>
                                </div>
                            @endif

                            <div class="absolute top-4 left-4 z-20">
                                <span
                                    class="px-3 py-1 bg-black/60 backdrop-blur-md border border-white/10 text-xs font-bold text-white rounded-full uppercase tracking-wider shadow-lg">
                                    {{ $project->category }}
                                </span>
                            </div>
                        </div>

                        <div class="p-8">
                            <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-primary transition">
                                {{ $project->title }}
                            </h3>
                            <p class="text-gray-400 text-sm mb-6 line-clamp-2 leading-relaxed">
                                {{ $project->description }}
                            </p>
                            <div
                                class="flex items-center text-primary text-sm font-bold gap-2 group-hover:gap-3 transition-all">
                                View Case Study <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </a>

                @empty
                    {{-- LOGIKA JIKA KOSONG / MAINTENANCE --}}
                    <div class="col-span-1 md:col-span-2 lg:col-span-3 py-20 reveal transition duration-500">
                        <div
                            class="max-w-xl mx-auto text-center p-10 rounded-3xl bg-card-bg/50 border border-gray-800 border-dashed">

                            {{-- Icon Ilustrasi --}}
                            <div
                                class="w-24 h-24 bg-gray-800 rounded-full flex items-center justify-center mx-auto mb-8 animate-pulse">
                                <i class="fas fa-hard-hat text-4xl text-yellow-500"></i>
                            </div>

                            <h3 class="text-3xl font-bold text-white mb-4">Under Construction</h3>
                            <p class="text-gray-400 mb-8 leading-relaxed">
                                Belum ada project yang dipublikasikan saat ini. Saya sedang menyiapkan sesuatu yang luar
                                biasa
                                di dapur rekaman. Silakan kembali lagi nanti!
                            </p>

                            {{-- Tombol Balik ke Home --}}
                            <a href="{{ route('home') }}"
                                class="inline-flex items-center gap-2 px-8 py-3 bg-white text-black font-bold rounded-full hover:bg-gray-200 transition transform hover:-translate-y-1">
                                <i class="fas fa-arrow-left"></i> Kembali ke Beranda
                            </a>

                        </div>
                    </div>
                @endforelse
            </div>

            <div class="mt-24 text-center reveal">
                <p class="text-gray-500 mb-4">Masih ada project lain yang sedang dikerjakan...</p>
                <a href="https://github.com/naovalocta" target="_blank"
                    class="inline-flex items-center gap-2 text-primary font-bold hover:underline">
                    Lihat Repository Github <i class="fab fa-github"></i>
                </a>
            </div>

        </div>
    </div>
@endsection
