@extends('layouts.app')

@section('title', $project->title)

@section('content')
    {{-- Container Utama LEBIH LEBAR (max-w-7xl) --}}
    <div class="container mx-auto px-6 md:px-8 pt-12 mt-20 pb-32 max-w-[90rem]">

        {{-- 1. HERO SECTION (Full Width Image) --}}
        {{-- Gambar dibuat sangat besar di awal untuk kesan pertama yang kuat --}}
        <div
            class="relative w-full h-[60vh] md:h-[80vh] rounded-[2rem] overflow-hidden mb-16 border border-gray-800 shadow-2xl group">
            @if ($project->image)
                <img src="{{ asset('storage/' . $project->image) }}"
                    class="w-full h-full object-cover group-hover:scale-105 transition duration-[1.5s] ease-out">
            @else
                <div class="w-full h-full bg-gray-900 flex items-center justify-center">
                    <i class="fas fa-image text-8xl text-gray-800"></i>
                </div>
            @endif

            {{-- Title Overlay (Judul Besar di atas gambar) --}}
            <div
                class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent flex flex-col justify-end p-8 md:p-16">
                <div class="max-w-4xl">
                    <span
                        class="inline-block px-4 py-2 bg-primary/20 backdrop-blur-md border border-primary/30 rounded-full text-primary text-sm font-bold uppercase tracking-widest mb-6">
                        {{ $project->category }}
                    </span>
                    <h1 class="text-5xl md:text-8xl font-bold text-white leading-tight mb-4">
                        {{ $project->title }}
                    </h1>
                </div>
            </div>
        </div>

        {{-- 2. CONTENT GRID (SPLIT LAYOUT) --}}
        {{-- Menggunakan Grid 12 Kolom untuk membagi layar --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-24 relative">

            {{-- SIDEBAR KIRI (Sticky Info - Lebar 4 Kolom) --}}
            {{-- SIDEBAR KIRI (Project Metadata - No Navigation) --}}
            <div class="lg:col-span-4 space-y-8">
                <div class="lg:sticky lg:top-32 space-y-8">

                    {{-- 1. Project Context (Info Utama) --}}
                    <div class="bg-card-bg border border-gray-800 rounded-2xl p-6 space-y-6">
                        <h3 class="text-white font-bold text-lg flex items-center gap-2">
                            <i class="fas fa-info-circle text-primary"></i> Project Info
                        </h3>

                        {{-- Grid Layout untuk Metadata --}}
                        <div class="grid grid-cols-1 gap-6">

                            {{-- Role --}}
                            <div>
                                <span class="text-gray-500 text-xs uppercase tracking-wider font-semibold block mb-1">My
                                    Role</span>
                                <p class="text-white font-medium">Fullstack Developer</p>
                            </div>

                            {{-- Context (Tipe Project) --}}
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <span
                                        class="text-gray-500 text-xs uppercase tracking-wider font-semibold block mb-1">Type</span>
                                    <p class="text-gray-300 text-sm">Personal Project</p>
                                </div>
                                <div>
                                    <span
                                        class="text-gray-500 text-xs uppercase tracking-wider font-semibold block mb-1">Year</span>
                                    <p class="text-gray-300 text-sm">{{ $project->created_at->format('Y') }}</p>
                                </div>
                            </div>

                            {{-- Team & Duration (Bisa kamu buat dinamis nanti) --}}
                            <div class="grid grid-cols-2 gap-4 border-t border-gray-800 pt-4">
                                <div>
                                    <span
                                        class="text-gray-500 text-xs uppercase tracking-wider font-semibold block mb-1">Team</span>
                                    <p class="text-gray-300 text-sm">Solo Project</p>
                                </div>
                                <div>
                                    <span
                                        class="text-gray-500 text-xs uppercase tracking-wider font-semibold block mb-1">Timeline</span>
                                    <p class="text-gray-300 text-sm">~ 3 Weeks</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- 2. Tech Stack (Dipisah agar lebih rapi) --}}
                    <div class="space-y-3">
                        <h3 class="text-gray-400 text-sm font-bold uppercase tracking-widest px-1">Built With</h3>
                        <div class="flex flex-wrap gap-2">
                            @foreach ($project->tech as $tech)
                                <span
                                    class="px-3 py-1.5 bg-gray-900 border border-gray-700 rounded-lg text-sm text-gray-300 hover:border-primary/50 hover:text-white transition cursor-default">
                                    {{ $tech }}
                                </span>
                            @endforeach
                        </div>
                    </div>

                    {{-- 3. Resources / Links (Repository, Figma, etc) --}}
                    <div class="space-y-3 pt-4">
                        <h3 class="text-gray-400 text-sm font-bold uppercase tracking-widest px-1">Resources</h3>
                        <div class="flex flex-col gap-2">

                            {{-- Link Github (Contoh) --}}
                            <a href="#"
                                class="flex items-center justify-between p-3 rounded-xl bg-gray-900/50 border border-gray-800 hover:bg-gray-800 hover:border-gray-600 transition group">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-8 h-8 rounded-full bg-black flex items-center justify-center border border-gray-700">
                                        <i class="fab fa-github text-white"></i>
                                    </div>
                                    <span class="text-gray-300 text-sm font-medium group-hover:text-white">Source
                                        Code</span>
                                </div>
                                <i
                                    class="fas fa-arrow-right text-xs text-gray-600 group-hover:text-primary -rotate-45 group-hover:rotate-0 transition"></i>
                            </a>

                            {{-- Link Figma (Contoh) --}}
                            <a href="#"
                                class="flex items-center justify-between p-3 rounded-xl bg-gray-900/50 border border-gray-800 hover:bg-gray-800 hover:border-gray-600 transition group">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-8 h-8 rounded-full bg-black flex items-center justify-center border border-gray-700">
                                        <i class="fab fa-figma text-purple-400"></i>
                                    </div>
                                    <span class="text-gray-300 text-sm font-medium group-hover:text-white">Design
                                        File</span>
                                </div>
                                <i
                                    class="fas fa-arrow-right text-xs text-gray-600 group-hover:text-primary -rotate-45 group-hover:rotate-0 transition"></i>
                            </a>

                        </div>
                    </div>

                </div>
            </div>

            {{-- KONTEN KANAN (Scrollable - Lebar 8 Kolom) --}}
            <div class="lg:col-span-8 space-y-24">

                {{-- Section: Overview --}}
                <section id="overview" class="scroll-mt-32">
                    <h2 class="text-3xl md:text-5xl font-bold text-white mb-8">The Challenge</h2>
                    <div class="prose prose-invert prose-xl max-w-none text-gray-300 leading-relaxed">
                        {!! nl2br(e($project->description)) !!}
                    </div>
                </section>

                {{-- Section: Features (Contoh Dummy) --}}
                <section id="features" class="scroll-mt-32 border-t border-gray-800 pt-16">
                    <h2 class="text-3xl md:text-5xl font-bold text-white mb-12">Key Features</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        {{-- Feature Card 1 --}}
                        <div
                            class="bg-card-bg border border-gray-800 p-8 rounded-3xl hover:border-primary/50 transition duration-500">
                            <div
                                class="w-12 h-12 bg-primary/20 rounded-full flex items-center justify-center text-primary mb-6">
                                <i class="fas fa-bolt text-xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-4">Fast Performance</h3>
                            <p class="text-gray-400">Optimized database queries ensuring content loads in under 100ms.</p>
                        </div>

                        {{-- Feature Card 2 --}}
                        <div
                            class="bg-card-bg border border-gray-800 p-8 rounded-3xl hover:border-primary/50 transition duration-500">
                            <div
                                class="w-12 h-12 bg-primary/20 rounded-full flex items-center justify-center text-primary mb-6">
                                <i class="fas fa-shield-alt text-xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-4">Secure System</h3>
                            <p class="text-gray-400">Implemented advanced authentication and role-based access control.</p>
                        </div>
                    </div>
                </section>

                {{-- Section: Gallery (Contoh Visual Besar) --}}
                <section id="gallery" class="scroll-mt-32 border-t border-gray-800 pt-16">
                    <h2 class="text-3xl md:text-5xl font-bold text-white mb-12">Visual Gallery</h2>

                    <div class="space-y-8">
                        {{-- Large Image 1 --}}
                        <div
                            class="w-full h-[500px] bg-gray-800 rounded-3xl flex items-center justify-center text-gray-600 border border-gray-800">
                            <span>Gallery Image 1 (Add more images to DB later)</span>
                        </div>
                        {{-- Grid Images --}}
                        <div class="grid grid-cols-2 gap-8">
                            <div class="aspect-square bg-gray-800 rounded-3xl border border-gray-800"></div>
                            <div class="aspect-square bg-gray-800 rounded-3xl border border-gray-800"></div>
                        </div>
                    </div>
                </section>

            </div>
        </div>

    </div>

    {{-- BOTTOM NAVBAR (Floating Contextual) --}}
    <div id="bottom-navbar"
        class="fixed bottom-8 inset-x-0 z-40 mx-auto w-max transition-transform duration-500 ease-in-out translate-y-[200%]">

        <div
            class="flex items-center gap-2 bg-black/80 backdrop-blur-2xl border border-white/10 rounded-full p-2 shadow-2xl ring-1 ring-white/10 pl-6">

            <span class="text-white font-bold text-sm mr-2 hidden sm:block">{{ Str::limit($project->title, 20) }}</span>

            <div class="w-px h-6 bg-white/20 hidden sm:block"></div>

            <div class="flex items-center gap-1">
                <a href="#overview"
                    class="px-4 py-2 text-sm text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition">Overview</a>
                <a href="#features"
                    class="px-4 py-2 text-sm text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition">Features</a>
                <a href="#gallery"
                    class="px-4 py-2 text-sm text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition">Gallery</a>
            </div>

            @if ($project->link)
                <a href="{{ $project->link }}" target="_blank"
                    class="flex items-center gap-2 px-5 py-2.5 bg-white text-black text-sm font-bold rounded-full hover:bg-gray-200 transition ml-2">
                    Visit <span class="hidden sm:inline">Site</span> <i class="fas fa-arrow-right -rotate-45"></i>
                </a>
            @endif
        </div>
    </div>

    {{-- SCRIPT SCROLL LOGIC (Sama seperti sebelumnya, tapi lebih halus) --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            let lastScrollY = window.scrollY;
            const topNav = document.getElementById('top-navbar');
            const bottomNav = document.getElementById('bottom-navbar');

            window.addEventListener('scroll', () => {
                const currentScrollY = window.scrollY;

                // Mulai efek setelah scroll 100px agar tidak bentrok saat di paling atas
                if (currentScrollY > 100) {
                    if (currentScrollY > lastScrollY) {
                        // SCROLL KE BAWAH -> Hide Top, Show Bottom
                        topNav.classList.add('-translate-y-[200%]');
                        bottomNav.classList.remove('translate-y-[200%]');
                    } else {
                        // SCROLL KE ATAS -> Show Top, Hide Bottom
                        topNav.classList.remove('-translate-y-[200%]');
                        bottomNav.classList.add('translate-y-[200%]');
                    }
                } else {
                    // Posisi Awal (Paling Atas) -> Show Top, Hide Bottom
                    topNav.classList.remove('-translate-y-[200%]');
                    bottomNav.classList.add('translate-y-[200%]');
                }
                lastScrollY = currentScrollY;
            });
        });
    </script>
@endsection
