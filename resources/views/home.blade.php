@extends('layouts.app')

@section('content')
    <section id="home" class="pt-32 pb-20 px-6">
        <div class="container mx-auto flex flex-col-reverse md:flex-row items-center gap-12">
            <div class="w-full md:w-1/2">
                <span class="bg-gray-800 text-white px-4 py-1 rounded-full text-sm">About Me</span>
                <h1 class="text-4xl md:text-5xl font-bold text-white mt-6 leading-tight">
                    Membangun solusi digital yang <br>
                    <span class="text-primary">Efisien & Menarik!</span>
                </h1>
                <p class="mt-6 text-gray-400 leading-relaxed">
                    Halo, saya Naoval. Seorang mahasiswa Informatika. Saya membuat website Laravel, aplikasi Flutter, dan
                    eksplorasi teknologi terbaru.
                </p>

                <div
                    class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8 mb-8 p-6 bg-card-bg rounded-xl border border-gray-800">
                    <div>
                        <span class="text-primary text-sm">Email:</span>
                        <p class="text-white font-medium">email@naoval.com</p>
                    </div>
                    <div>
                        <span class="text-primary text-sm">Phone:</span>
                        <p class="text-white font-medium">+62 812 3456 7890</p>
                    </div>
                    <div>
                        <span class="text-primary text-sm">Role:</span>
                        <p class="text-white font-medium">Fullstack Developer</p>
                    </div>
                    <div>
                        <span class="text-primary text-sm">Location:</span>
                        <p class="text-white font-medium">Indonesia</p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <a href="#contact"
                        class="px-8 py-3 bg-primary text-white font-bold rounded-full hover:bg-orange-600 transition shadow-lg shadow-orange-500/20">Contact
                        Me</a>
                    <a href="#"
                        class="px-8 py-3 border border-gray-600 text-white font-bold rounded-full hover:border-primary hover:text-primary transition">Download
                        CV <i class="fas fa-download ml-2"></i></a>
                </div>
            </div>

            <div class="w-full md:w-1/2 flex justify-center relative">
                <div class="w-80 h-80 md:w-96 md:h-96 rounded-full border-4 border-primary p-2 relative z-10">
                    <img src="https://placehold.co/400x400/1e293b/white?text=Foto+Naoval" alt="Naoval"
                        class="w-full h-full rounded-full object-cover grayscale hover:grayscale-0 transition duration-500">
                </div>
                <div class="absolute top-0 right-10 w-20 h-20 bg-primary rounded-full blur-3xl opacity-20"></div>
                <div class="absolute bottom-0 left-10 w-32 h-32 bg-purple-600 rounded-full blur-3xl opacity-20"></div>
            </div>
        </div>
    </section>

    <section id="skills" class="py-20 bg-card-bg/30">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-white">My Work <span class="text-primary">Skills</span></h2>
                <p class="text-gray-400 mt-2">Tools dan teknologi yang saya gunakan sehari-hari.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @php
                    $skills = [
                        [
                            'name' => 'Laravel',
                            'icon' => 'fab fa-laravel',
                            'color' => 'text-red-500',
                            'percent' => '90%',
                        ],
                        [
                            'name' => 'Flutter',
                            'icon' => 'fas fa-mobile-alt',
                            'color' => 'text-blue-400',
                            'percent' => '85%',
                        ],
                        ['name' => 'Tailwind', 'icon' => 'fab fa-css3', 'color' => 'text-cyan-400', 'percent' => '95%'],
                        [
                            'name' => 'MySQL',
                            'icon' => 'fas fa-database',
                            'color' => 'text-orange-400',
                            'percent' => '80%',
                        ],
                    ];
                @endphp

                @foreach ($skills as $skill)
                    <div
                        class="bg-dark-bg p-6 rounded-2xl border border-gray-800 text-center hover:border-primary transition group">
                        <i class="{{ $skill['icon'] }} text-4xl mb-4 {{ $skill['color'] }}"></i>
                        <h3 class="text-xl font-semibold text-white mb-2">{{ $skill['name'] }}</h3>
                        <div class="w-full bg-gray-700 h-2 rounded-full mt-2">
                            <div class="bg-primary h-2 rounded-full" style="width: {{ $skill['percent'] }}"></div>
                        </div>
                        <span class="text-sm text-gray-400 mt-2 block">{{ $skill['percent'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="portfolio" class="py-20 px-6">
        <div class="container mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-white">My <span class="text-primary">Portfolio</span></h2>
                <p class="text-gray-400 mt-2">Beberapa project website dan aplikasi yang telah saya kerjakan.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($projects as $project)
                    <div
                        class="bg-card-bg rounded-2xl overflow-hidden border border-gray-800 group hover:scale-[1.02] transition duration-300">
                        <div class="h-48 bg-gray-700 overflow-hidden relative">
                            <img src="{{ $project->image ?? 'https://placehold.co/600x400/1e293b/white?text=Project+Thumbnail' }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                            <div
                                class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                                <a href="{{ $project->link }}"
                                    class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white hover:bg-white hover:text-primary transition">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="p-6">
                            <span
                                class="text-primary text-xs font-bold uppercase tracking-wider">{{ $project->category }}</span>
                            <h3 class="text-xl font-bold text-white mt-2 mb-2">{{ $project->title }}</h3>
                            <p class="text-gray-400 text-sm line-clamp-2">{{ $project->description }}</p>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center text-gray-500">
                        <p>Belum ada project yang ditambahkan.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <section id="contact" class="py-20 bg-card-bg/30">
        <div class="container mx-auto px-6 max-w-4xl text-center">
            <h2 class="text-3xl font-bold text-white mb-8">Tertarik bekerja sama?</h2>
            <div class="bg-gradient-to-r from-orange-500 to-red-500 p-10 rounded-3xl">
                <h3 class="text-2xl font-bold text-white mb-4">Ayo buat sesuatu yang hebat!</h3>
                <p class="text-white/90 mb-8">Saya siap membantu mewujudkan ide aplikasi atau website Anda.</p>
                <a href="mailto:email@naoval.com"
                    class="bg-white text-orange-600 px-8 py-3 rounded-full font-bold hover:bg-gray-100 transition">Kirim
                    Email</a>
            </div>
        </div>
    </section>
@endsection
