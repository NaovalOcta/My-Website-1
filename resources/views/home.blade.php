@extends('layouts.app')

@section('content')
    <section id="home" class="min-h-screen flex items-center justify-center pt-20 px-6 relative overflow-hidden">
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
                            <img src="https://placehold.co/500x500/1e293b/white?text=Naoval" alt="Naoval"
                                class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-700 transform group-hover:scale-110">
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
                    <h2 class="text-4xl font-bold text-white mb-4">Featured <span class="text-primary">Projects</span></h2>
                    <p class="text-gray-400 max-w-lg">Beberapa project terbaik yang pernah saya kerjakan, mulai dari website
                        hingga aplikasi mobile.</p>
                </div>
                <a href="#" class="text-primary font-semibold hover:text-white transition flex items-center gap-2">
                    View All Projects <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="group relative rounded-3xl overflow-hidden border border-gray-800 bg-card-bg">
                    <div class="aspect-video bg-gray-800 relative overflow-hidden">
                        <img src="https://placehold.co/600x400/111827/334155?text=Project+Preview" alt="Project 1"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        <div
                            class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                            <a href="#"
                                class="px-6 py-2 bg-primary text-white rounded-full font-bold transform translate-y-4 group-hover:translate-y-0 transition duration-300">View
                                Details</a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-2">E-Commerce App</h3>
                        <p class="text-gray-400 text-sm mb-4 line-clamp-2">Aplikasi toko online berbasis mobile menggunakan
                            Flutter dan Laravel API.</p>
                        <div class="flex gap-2">
                            <span class="px-3 py-1 bg-gray-800 text-xs text-gray-300 rounded-full">Flutter</span>
                            <span class="px-3 py-1 bg-gray-800 text-xs text-gray-300 rounded-full">Laravel</span>
                        </div>
                    </div>
                </div>

                <div class="group relative rounded-3xl overflow-hidden border border-gray-800 bg-card-bg">
                    <div class="aspect-video bg-gray-800 relative overflow-hidden">
                        <img src="https://placehold.co/600x400/111827/334155?text=Coming+Soon" alt="Project 2"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-2">Tourism Website</h3>
                        <p class="text-gray-400 text-sm mb-4 line-clamp-2">Sistem informasi pariwisata daerah dengan fitur
                            booking tiket online.</p>
                        <div class="flex gap-2">
                            <span class="px-3 py-1 bg-gray-800 text-xs text-gray-300 rounded-full">Laravel</span>
                            <span class="px-3 py-1 bg-gray-800 text-xs text-gray-300 rounded-full">Bootstrap</span>
                        </div>
                    </div>
                </div>

                <div class="group relative rounded-3xl overflow-hidden border border-gray-800 bg-card-bg">
                    <div class="aspect-video bg-gray-800 relative overflow-hidden">
                        <img src="https://placehold.co/600x400/111827/334155?text=Coming+Soon" alt="Project 3"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-2">IoT Dashboard</h3>
                        <p class="text-gray-400 text-sm mb-4 line-clamp-2">Dashboard monitoring perangkat IoT Realtime
                            menggunakan protokol MQTT.</p>
                        <div class="flex gap-2">
                            <span class="px-3 py-1 bg-gray-800 text-xs text-gray-300 rounded-full">Vue.js</span>
                            <span class="px-3 py-1 bg-gray-800 text-xs text-gray-300 rounded-full">MQTT</span>
                        </div>
                    </div>
                </div>
            </div>
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
                    <a href="mailto:email@naoval.com"
                        class="px-10 py-4 bg-primary text-white font-bold rounded-full hover:bg-orange-600 transition shadow-lg shadow-orange-500/25 flex items-center justify-center gap-3">
                        <i class="far fa-envelope"></i> Kirim Email
                    </a>
                    <a href="#"
                        class="px-10 py-4 bg-gray-800 text-white font-bold rounded-full hover:bg-gray-700 transition flex items-center justify-center gap-3 border border-gray-700">
                        <i class="fab fa-whatsapp"></i> Chat WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
