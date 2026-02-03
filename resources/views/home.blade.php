@extends('layouts.app')

@section('content')
    <section id="home" class="min-h-screen flex items-center justify-center pt-8 px-6 relative overflow-hidden">
        <div class="absolute top-20 left-0 w-72 h-72 bg-primary/10 rounded-full blur-3xl -z-10 animate-float"></div>
        <div class="absolute bottom-20 right-0 w-96 h-96 bg-purple-600/10 rounded-full blur-3xl -z-10 animate-float"
            style="animation-delay: 2s;"></div>

        <div class="container mx-auto flex flex-col-reverse md:flex-row items-center gap-12">
            <div class="w-full md:w-1/2 text-center md:text-left z-10">
                <div class="animate-fade-in-up" style="animation-delay: 0.1s;">
                    <span
                        class="bg-card-bg border border-gray-700 text-primary px-4 py-2 rounded-full text-sm font-semibold tracking-wide uppercase shadow-lg inline-block mb-6">
                        👋 Welcome to my portfolio
                    </span>
                </div>

                <h1 class="text-5xl md:text-7xl font-bold text-white leading-tight animate-fade-in-up"
                    style="animation-delay: 0.3s;">
                    Hi, I'm <span class="text-primary">Naoval</span>
                </h1>

                <h2 class="text-2xl md:text-3xl text-gray-400 mt-4 font-light animate-fade-in-up h-10"
                    style="animation-delay: 0.5s;">
                    I am a <span id="typing-text" class="text-white font-semibold typing-cursor"></span>
                </h2>

                <p class="mt-8 text-gray-400 leading-relaxed text-lg max-w-lg mx-auto md:mx-0 animate-fade-in-up"
                    style="animation-delay: 0.7s;">
                    Membangun solusi digital yang efisien, interaktif, dan modern menggunakan teknologi terbaru seperti
                    Laravel 12 dan Flutter.
                </p>

                <div class="flex gap-4 justify-center md:justify-start mt-10 animate-fade-in-up"
                    style="animation-delay: 0.9s;">
                    <a href="#portfolio"
                        class="px-8 py-4 bg-primary text-white font-bold rounded-full hover:bg-orange-600 hover:scale-105 transition transform shadow-lg shadow-orange-500/30">
                        Lihat Karya
                    </a>
                    <a href="#contact"
                        class="px-8 py-4 border border-gray-600 text-white font-bold rounded-full hover:border-primary hover:text-primary hover:bg-gray-800 transition">
                        Hubungi Saya
                    </a>
                </div>
            </div>

            <div class="w-full md:w-1/2 flex justify-center relative animate-fade-in-up" style="animation-delay: 0.5s;">
                <div class="relative w-80 h-80 md:w-[450px] md:h-[450px]">
                    <div class="absolute inset-0 border-2 border-primary/20 rounded-full animate-spin-slow"
                        style="animation-duration: 20s;"></div>
                    <div class="absolute inset-8 border border-gray-700 rounded-full"></div>

                    <div class="absolute inset-0 flex items-center justify-center animate-float">
                        <div
                            class="w-64 h-64 md:w-80 md:h-80 rounded-full overflow-hidden border-4 border-card-bg shadow-2xl relative z-10 group cursor-pointer">
                            <img src="{{ asset('images/my-profile.jpg') }}" alt="Naoval Profile"
                                class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-700 transform group-hover:scale-150">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-32 relative reveal">
        <div class="absolute top-1/2 right-0 w-96 h-96 bg-primary/5 rounded-full blur-[128px] -z-10"></div>
        <div class="absolute bottom-0 left-20 w-72 h-72 bg-purple-600/5 rounded-full blur-[96px] -z-10"></div>

        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-16">

                <div class="w-full md:w-5/12 relative group">
                    <div
                        class="relative rounded-3xl overflow-hidden border border-gray-700 transform rotate-3 group-hover:rotate-0 transition duration-500 shadow-2xl">
                        <img src="{{ asset('images/my-profile.jpg') }}" alt="About Naoval"
                            class="w-full h-auto object-cover grayscale group-hover:grayscale-0 transition duration-700">

                        <div class="absolute inset-0 bg-gradient-to-t from-dark-bg/80 via-transparent to-transparent"></div>
                    </div>

                    <div
                        class="absolute -bottom-6 -right-6 md:-right-10 bg-card-bg/90 backdrop-blur-md p-6 rounded-2xl border border-gray-700 shadow-xl animate-float">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-primary/20 rounded-full flex items-center justify-center text-primary">
                                <i class="fas fa-code text-xl"></i>
                            </div>
                            <div>
                                <p class="text-3xl font-bold text-white">2+</p>
                                <p class="text-xs text-gray-400 uppercase tracking-wide">Years Experience</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-7/12">
                    <div
                        class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 border border-primary/20 text-primary text-xs font-semibold tracking-wide uppercase mb-6">
                        <span class="w-2 h-2 rounded-full bg-primary"></span> About Me
                    </div>

                    <h2 class="text-4xl font-bold text-white mb-6 leading-tight">
                        Mengkombinasikan <br><span class="text-primary">Logika</span> & <span
                            class="text-purple-400">Kreativitas</span>
                    </h2>

                    <div class="text-gray-400 space-y-4 text-lg leading-relaxed mb-8">
                        <p>
                            Halo! Saya Naoval, seorang mahasiswa Informatika yang memiliki ketertarikan mendalam pada dunia
                            <span class="text-gray-200 font-medium">Software Engineering</span>.
                        </p>
                        <p>
                            Perjalanan koding saya dimulai dari rasa penasaran tentang bagaimana sebuah website bekerja.
                            Kini, saya fokus mengembangkan aplikasi web modern yang tidak hanya fungsional,
                            tetapi juga memiliki performa tinggi dan *user experience* yang intuitif.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-10">
                        <div class="flex items-start gap-4">
                            <div
                                class="w-10 h-10 rounded-lg bg-gray-800 flex items-center justify-center text-primary shrink-0">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold">Pendidikan</h4>
                                <p class="text-sm text-gray-500">S1 Informatika, Universitas Muhammadiyah Malang</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div
                                class="w-10 h-10 rounded-lg bg-gray-800 flex items-center justify-center text-primary shrink-0">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold">Email</h4>
                                <p class="text-sm text-gray-500">nopal.r.octa@gmail.com</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div
                                class="w-10 h-10 rounded-lg bg-gray-800 flex items-center justify-center text-primary shrink-0">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold">Domisili</h4>
                                <p class="text-sm text-gray-500">Malang, Indonesia</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div
                                class="w-10 h-10 rounded-lg bg-gray-800 flex items-center justify-center text-primary shrink-0">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold">Minat Utama</h4>
                                <p class="text-sm text-gray-500">Website Developer</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-4 border-t border-gray-800 pt-8">
                        <a href="#"
                            class="px-7 py-3 bg-white text-dark-bg font-bold rounded-full hover:bg-gray-200 transition flex items-center gap-2">
                            Download CV <i class="fas fa-download text-sm"></i>
                        </a>
                        <div class="flex gap-4 items-center px-4">
                            <a href="https://github.com/NaovalOcta"
                                class="w-10 h-10 rounded-full border border-gray-600 flex items-center justify-center text-gray-400 hover:text-white hover:border-primary hover:bg-primary transition duration-300">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/naoval-ramadian-octaviansyah-3b6552314/"
                                class="w-10 h-10 rounded-full border border-gray-600 flex items-center justify-center text-gray-400 hover:text-white hover:border-primary hover:bg-primary transition duration-300">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="https://www.instagram.com/naopalism/?hl=en"
                                class="w-10 h-10 rounded-full border border-gray-600 flex items-center justify-center text-gray-400 hover:text-white hover:border-primary hover:bg-primary transition duration-300">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="py-32 relative overflow-hidden reveal">
        <div class="absolute top-1/2 left-10 w-64 h-64 bg-primary/5 rounded-full blur-3xl -z-10"></div>

        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-white mb-4">Expertise <span class="text-primary">& Skills</span></h2>
                <p class="text-gray-400 max-w-xl mx-auto">Teknologi yang saya gunakan untuk mengubah ide menjadi produk
                    digital yang fungsional.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div
                    class="bg-card-bg p-8 rounded-3xl border border-gray-800 hover:border-primary transition duration-500 group hover:-translate-y-2">
                    <div
                        class="w-14 h-14 bg-gray-800 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors text-3xl">
                        <i class="fab fa-laravel text-red-500 group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Laravel</h3>
                    <p class="text-gray-500 text-sm mb-4">Backend & API Development</p>
                    <div class="w-full bg-gray-700 h-1.5 rounded-full overflow-hidden">
                        <div class="bg-primary h-full rounded-full skill-bar-fill" style="width: 95%"></div>
                    </div>
                </div>

                <div
                    class="bg-card-bg p-8 rounded-3xl border border-gray-800 hover:border-primary transition duration-500 group hover:-translate-y-2">
                    <div
                        class="w-14 h-14 bg-gray-800 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors text-3xl">
                        <i class="fas fa-mobile-alt text-blue-400 group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Flutter</h3>
                    <p class="text-gray-500 text-sm mb-4">Cross-platform Mobile Apps</p>
                    <div class="w-full bg-gray-700 h-1.5 rounded-full overflow-hidden">
                        <div class="bg-primary h-full rounded-full skill-bar-fill" style="width: 85%"></div>
                    </div>
                </div>

                <div
                    class="bg-card-bg p-8 rounded-3xl border border-gray-800 hover:border-primary transition duration-500 group hover:-translate-y-2">
                    <div
                        class="w-14 h-14 bg-gray-800 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors text-3xl">
                        <i class="fab fa-css3 text-cyan-400 group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Tailwind CSS</h3>
                    <p class="text-gray-500 text-sm mb-4">Modern UI/UX Design</p>
                    <div class="w-full bg-gray-700 h-1.5 rounded-full overflow-hidden">
                        <div class="bg-primary h-full rounded-full skill-bar-fill" style="width: 90%"></div>
                    </div>
                </div>

                <div
                    class="bg-card-bg p-8 rounded-3xl border border-gray-800 hover:border-primary transition duration-500 group hover:-translate-y-2">
                    <div
                        class="w-14 h-14 bg-gray-800 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors text-3xl">
                        <i class="fas fa-database text-orange-400 group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">MySQL</h3>
                    <p class="text-gray-500 text-sm mb-4">Database Management</p>
                    <div class="w-full bg-gray-700 h-1.5 rounded-full overflow-hidden">
                        <div class="bg-primary h-full rounded-full skill-bar-fill" style="width: 80%"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="py-32 reveal">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                <div>
                    <h2 class="text-4xl font-bold text-white mb-4">Featured <span class="text-primary">Projects</span>
                    </h2>
                    <p class="text-gray-400 max-w-lg">Beberapa project terbaik yang pernah saya kerjakan, mulai dari
                        website
                        hingga aplikasi mobile.</p>
                </div>
                @if ($projects->count() > 0)
                    <a href="{{ route('projects.index') }}"
                        class="text-primary font-semibold hover:text-white transition flex items-center gap-2 group">
                        View All Projects <i class="fas fa-arrow-right group-hover:translate-x-1 transition"></i>
                    </a>
                @endif
            </div>

            {{-- Cek apakah ada project --}}
            @if ($projects->count() > 0)
                {{-- Grid selalu 3 kolom agar ukuran card konsisten dan rata kiri --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach ($projects as $project)
                        <a href="{{ route('projects.show', $project) }}"
                            class="group relative rounded-3xl overflow-hidden border border-gray-800 bg-card-bg hover:border-primary/50 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/10 block">
                            {{-- LOGIKA GAMBAR: Cek apakah gambar dari database (tersimpan di folder projects) atau dummy --}}
                            @php
                                $imagePath = $project->image
                                    ? (Str::startsWith($project->image, 'projects')
                                        ? asset('storage/' . $project->image)
                                        : asset($project->image))
                                    : 'https://placehold.co/600x400/111827/334155?text=' . urlencode($project->title);
                            @endphp

                            <div class="aspect-video bg-gray-800 relative overflow-hidden">
                                <img src="{{ $imagePath }}" alt="{{ $project->title }}"
                                    class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                                {{-- Overlay gradient --}}
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-card-bg/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                </div>
                            </div>

                            <div class="p-6">
                                @if ($project->category)
                                    <span class="text-primary text-xs font-bold uppercase tracking-wider mb-2 block">
                                        {{ $project->category }}
                                    </span>
                                @endif
                                <h3 class="text-xl font-bold text-white mb-2 group-hover:text-primary transition-colors">
                                    {{ $project->title }}</h3>
                                <p class="text-gray-400 text-sm line-clamp-2 mb-4">{{ $project->description }}</p>
                                @if ($project->tech && count($project->tech) > 0)
                                    <div class="flex flex-wrap gap-2">
                                        @foreach (array_slice($project->tech, 0, 4) as $item)
                                            <span
                                                class="px-3 py-1 bg-gray-800 text-xs text-gray-300 rounded-full">{{ $item }}</span>
                                        @endforeach
                                        @if (count($project->tech) > 4)
                                            <span
                                                class="px-3 py-1 bg-gray-700 text-xs text-gray-400 rounded-full">+{{ count($project->tech) - 4 }}</span>
                                        @endif
                                    </div>
                                @endif
                            </div>
                        </a>
                    @endforeach
                </div>
            @else
                {{-- Empty state yang user-friendly --}}
                <div class="flex flex-col items-center justify-center py-20 px-6">
                    <div class="w-32 h-32 bg-gray-800/50 rounded-full flex items-center justify-center mb-8 animate-pulse">
                        <i class="fas fa-folder-open text-5xl text-gray-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Belum Ada Project</h3>
                    <p class="text-gray-400 text-center max-w-md mb-8">
                        Saat ini belum ada project yang ditampilkan. Project-project terbaik saya akan segera hadir di sini!
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#contact"
                            class="px-8 py-4 bg-primary text-white font-bold rounded-full hover:bg-orange-600 hover:scale-105 transition transform shadow-lg shadow-orange-500/30 flex items-center gap-2">
                            <i class="fas fa-envelope"></i> Hubungi Saya
                        </a>
                        <a href="#about"
                            class="px-8 py-4 border border-gray-600 text-white font-bold rounded-full hover:border-primary hover:text-primary hover:bg-gray-800 transition flex items-center gap-2">
                            <i class="fas fa-user"></i> Tentang Saya
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <section id="contact" class="py-32 relative reveal">
        <div
            class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-full max-w-3xl h-64 bg-primary/20 rounded-full blur-[100px] -z-10">
        </div>

        <div class="container mx-auto px-6 max-w-4xl">
            <div
                class="bg-gradient-to-br from-card-bg to-gray-900 border border-gray-800 rounded-[3rem] p-10 md:p-16 text-center shadow-2xl relative overflow-hidden group">
                <div
                    class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full blur-3xl transform translate-x-1/2 -translate-y-1/2 group-hover:bg-primary/10 transition duration-1000">
                </div>

                <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">Tertarik Bekerja Sama?</h2>
                <p class="text-gray-400 mb-10 text-lg">Saya selalu terbuka untuk diskusi mengenai projek baru, ide kreatif,
                    atau kesempatan menjadi bagian dari visi Anda.</p>

                <div class="flex flex-col md:flex-row justify-center gap-6">
                    <a href="{{ route('contact') }}"
                        class="px-10 py-4 bg-primary text-white font-bold rounded-full hover:bg-orange-600 transition shadow-lg shadow-orange-500/25 flex items-center justify-center gap-3">
                        <i class="far fa-envelope"></i> Kirim Email
                    </a>
                    <button type="button" disabled
                        class="px-10 py-4 bg-gray-800/50 text-gray-500 font-bold rounded-full cursor-not-allowed flex items-center justify-center gap-3 border border-gray-700/50 relative group/whatsapp"
                        title="Fitur ini belum tersedia sementara">
                        <i class="fab fa-whatsapp"></i> Chat WhatsApp
                        {{-- Tooltip --}}
                        <span
                            class="absolute -top-12 left-1/2 -translate-x-1/2 px-3 py-2 bg-gray-900 text-gray-300 text-xs rounded-lg opacity-0 group-hover/whatsapp:opacity-100 transition-opacity whitespace-nowrap border border-gray-700 pointer-events-none">
                            🚧 Fitur ini belum tersedia
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection
