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
                @foreach ($projects as $project)
                    <div
                        class="group relative rounded-3xl overflow-hidden border border-gray-800 bg-card-bg hover:border-primary/50 transition duration-500 hover:-translate-y-2 reveal">

                        <div class="aspect-[4/3] bg-gray-800 relative overflow-hidden">
                            <img src="{{ $project->image }}" alt="{{ $project->title }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition duration-700">

                            <div class="absolute top-4 left-4">
                                <span
                                    class="px-3 py-1 bg-dark-bg/80 backdrop-blur-md border border-gray-700 text-xs font-bold text-white rounded-full uppercase tracking-wider">
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

                            <div class="flex flex-wrap gap-2">
                                @foreach ($project->tech as $tech)
                                    <span
                                        class="px-3 py-1 bg-gray-800/50 border border-gray-700 rounded-lg text-xs text-gray-300 font-medium group-hover:border-primary/30 transition">
                                        {{ $tech }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
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
