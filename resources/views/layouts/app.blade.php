<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naoval - Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-dark-bg text-gray-300 font-sans antialiased">

    <nav id="top-navbar"
        class="fixed top-6 inset-x-0 z-50 mx-auto max-w-7xl px-4 transition-transform duration-500 ease-in-out">
        <div
            class="flex items-center justify-between bg-gray-900/80 backdrop-blur-md border border-white/10 rounded-full px-6 py-3 shadow-2xl ring-1 ring-white/5">

            {{-- 1. Logo Section --}}
            <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                {{-- Ganti src ini dengan logo kamu --}}
                <div
                    class="w-8 h-8 rounded-full bg-gradient-to-tr from-primary to-orange-400 flex items-center justify-center text-white font-bold text-sm shadow-lg group-hover:scale-110 transition duration-300">
                    N
                </div>
                <span class="font-bold text-lg tracking-tight group-hover:text-primary transition">
                    <span class="text-primary">Naoval</span>Dev.
                </span>
            </a>

            {{-- 2. Menu Links (Hidden on Mobile) --}}
            <div class="hidden md:flex items-center bg-white/5 rounded-full px-1 p-1 border border-white/5">
                <a href="{{ route('home') }}"
                    class="px-5 py-1.5 text-sm font-medium rounded-full transition-all duration-300 {{ request()->routeIs('home') ? 'bg-primary text-white shadow-md' : 'text-gray-400 hover:text-white hover:bg-white/5' }}">
                    Home
                </a>
                <a href="{{ route('projects.index') }}"
                    class="px-5 py-1.5 text-sm font-medium rounded-full transition-all duration-300 {{ request()->routeIs('projects.*') ? 'bg-primary text-white shadow-md' : 'text-gray-400 hover:text-white hover:bg-white/5' }}">
                    Works
                </a>
            </div>

            {{-- 3. Call to Action / Contact --}}
            <div class="flex items-center gap-4">
                {{-- Social Icons (Opsional) --}}
                <div class="hidden sm:flex items-center gap-3 pr-4 border-r border-gray-700">
                    <a href="https://github.com/NaovalOcta" class="text-gray-400 hover:text-white transition"><i
                            class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/naoval-ramadian-octaviansyah-3b6552314/"
                        class="text-gray-400 hover:text-white transition"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.instagram.com/naopalism/?hl=en"
                        class="text-gray-400 hover:text-white transition"><i class="fab fa-instagram"></i></a>
                </div>

                <a href="mailto:email@kamu.com"
                    class="group relative inline-flex items-center gap-2 px-5 py-2 bg-white text-black text-sm font-bold rounded-full hover:bg-gray-200 transition duration-300 overflow-hidden">
                    <span class="relative z-10">Let's Talk</span>
                    <i
                        class="fas fa-arrow-right -rotate-45 group-hover:rotate-0 transition-transform duration-300 relative z-10"></i>
                </a>
            </div>

        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-card-bg py-10 mt-20 border-t border-gray-800">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-2xl font-bold text-white mb-4"><span class="text-primary">Naoval</span>Dev.</h2>
            <p class="mb-6 max-w-lg mx-auto">Mahasiswa Informatika yang fokus pada pengembangan web dan aplikasi mobile.
            </p>
            <div class="flex justify-center space-x-6 mb-8">
                <a href="https://github.com/NaovalOcta" class="text-2xl hover:text-primary"><i
                        class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/naoval-ramadian-octaviansyah-3b6552314/"
                    class="text-2xl hover:text-primary"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.instagram.com/naopalism/?hl=en" class="text-2xl hover:text-primary"><i
                        class="fab fa-instagram"></i></a>
            </div>
            <p class="text-sm text-gray-500">© {{ date('Y') }} Naoval. All Rights Reserved.</p>
        </div>
    </footer>
</body>

</html>
