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

    <nav class="fixed w-full z-50 bg-dark-bg/90 backdrop-blur-md border-b border-gray-800">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-white"><span class="text-primary">Naoval</span>Dev.</a>

            <div class="hidden md:flex space-x-8">
                <a href="#home" class="hover:text-primary transition">Home</a>
                <a href="#about" class="hover:text-primary transition">About</a>
                <a href="#skills" class="hover:text-primary transition">Skills</a>
                <a href="#portfolio" class="hover:text-primary transition">Portfolio</a>
            </div>

            <a href="#contact"
                class="px-6 py-2 bg-primary text-white font-semibold rounded-full hover:bg-orange-600 transition">Let's
                Talk</a>
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
                <a href="#" class="text-2xl hover:text-primary"><i class="fab fa-github"></i></a>
                <a href="#" class="text-2xl hover:text-primary"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="text-2xl hover:text-primary"><i class="fab fa-instagram"></i></a>
            </div>
            <p class="text-sm text-gray-500">© {{ date('Y') }} Naoval. All Rights Reserved.</p>
        </div>
    </footer>
</body>

</html>
