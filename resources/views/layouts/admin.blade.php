<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') - NaovalDev</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-dark-bg text-gray-300 font-sans antialiased flex h-screen overflow-hidden">

    <aside class="w-64 bg-card-bg border-r border-gray-800 flex-shrink-0 flex flex-col transition-all duration-300">
        <div class="h-16 flex items-center px-6 border-b border-gray-800">
            <a href="#" class="text-xl font-bold text-white tracking-wider">
                <span class="text-primary">Naoval</span>Admin
            </a>
        </div>

        <nav class="flex-1 overflow-y-auto py-4 px-3 space-y-1 custom-scrollbar">

            <p class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2 mt-2">Main</p>

            <a href="#"
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-primary/10 text-primary font-medium">
                <i class="fas fa-home w-5 text-center"></i>
                <span>Dashboard</span>
            </a>

            <p class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2 mt-6">Content</p>

            <a href="#"
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-400 hover:text-white hover:bg-gray-800 transition group">
                <i class="fas fa-briefcase w-5 text-center group-hover:text-primary transition"></i>
                <span>Projects</span>
            </a>

            <a href="#"
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-400 hover:text-white hover:bg-gray-800 transition group">
                <i class="fas fa-pen-nib w-5 text-center group-hover:text-primary transition"></i>
                <span>Blog / Articles</span>
            </a>

            <a href="#"
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-400 hover:text-white hover:bg-gray-800 transition group">
                <i class="fas fa-images w-5 text-center group-hover:text-primary transition"></i>
                <span>Gallery</span>
            </a>

            <p class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2 mt-6">System</p>

            <a href="#"
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-400 hover:text-white hover:bg-gray-800 transition group">
                <i class="fas fa-users w-5 text-center group-hover:text-primary transition"></i>
                <span>Users</span>
            </a>

            <a href="#"
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-400 hover:text-white hover:bg-gray-800 transition group">
                <i class="fas fa-cog w-5 text-center group-hover:text-primary transition"></i>
                <span>Settings</span>
            </a>
        </nav>

        <div class="p-4 border-t border-gray-800">
            <div class="flex items-center gap-3">
                <img src="https://ui-avatars.com/api/?name=Admin&background=FF6B4A&color=fff" alt="Admin"
                    class="w-9 h-9 rounded-full">
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-white truncate">Super Admin</p>
                    <p class="text-xs text-gray-500 truncate">admin@naoval.dev</p>
                </div>
                <button class="text-gray-400 hover:text-red-500 transition"><i class="fas fa-sign-out-alt"></i></button>
            </div>
        </div>
    </aside>

    <div class="flex-1 flex flex-col h-screen overflow-hidden relative">

        <header
            class="h-16 bg-dark-bg/80 backdrop-blur-md border-b border-gray-800 flex items-center justify-between px-6 z-10">
            <div class="flex items-center gap-4">
                <button class="text-gray-400 hover:text-white md:hidden">
                    <i class="fas fa-bars text-xl"></i>
                </button>
                <h1 class="text-lg font-semibold text-white">@yield('header', 'Dashboard')</h1>
            </div>

            <div class="flex items-center gap-5">
                <div class="relative hidden md:block">
                    <input type="text" placeholder="Search..."
                        class="bg-gray-800/50 border border-gray-700 text-sm rounded-full pl-10 pr-4 py-1.5 focus:outline-none focus:border-primary text-gray-300 w-64">
                    <i class="fas fa-search absolute left-3.5 top-2 text-gray-500 text-xs"></i>
                </div>

                <button class="relative text-gray-400 hover:text-white transition">
                    <i class="far fa-bell text-lg"></i>
                    <span class="absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                </button>
            </div>
        </header>

        <main class="flex-1 overflow-y-auto bg-dark-bg p-6 lg:p-10">
            @yield('content')
        </main>
    </div>

</body>

</html>
