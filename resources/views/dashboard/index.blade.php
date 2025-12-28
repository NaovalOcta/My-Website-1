<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - NaovalDev</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-dark-bg text-gray-300 font-sans antialiased">

    <nav class="fixed w-full z-50 bg-dark-bg/90 backdrop-blur-md border-b border-gray-800">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <a href="{{ url('/dashboard') }}" class="text-2xl font-bold text-white">
                    <span class="text-primary">Naoval</span>Dashboard
                </a>
                <span class="bg-gray-800 text-xs px-2 py-1 rounded text-gray-400">Admin Area</span>
            </div>

            <div class="flex items-center space-x-6">
                <a href="{{ url('/') }}" class="text-sm hover:text-primary transition">
                    <i class="fas fa-external-link-alt mr-2"></i>Lihat Website
                </a>
                <button
                    class="px-5 py-2 border border-red-500 text-red-500 rounded-full hover:bg-red-500 hover:text-white transition text-sm font-semibold">
                    Logout
                </button>
            </div>
        </div>
    </nav>

    <main class="pt-28 pb-10 container mx-auto px-6">

        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold text-white">Kelola Projects</h1>
                <p class="text-gray-500 mt-1">Atur portofolio yang tampil di halaman utama.</p>
            </div>
            <a href="#"
                class="px-6 py-3 bg-primary text-white font-semibold rounded-lg hover:bg-orange-600 transition shadow-lg shadow-orange-500/20">
                <i class="fas fa-plus mr-2"></i> Tambah Project
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <div class="bg-card-bg p-6 rounded-xl border border-gray-800">
                <h3 class="text-gray-400 text-sm">Total Projects</h3>
                <p class="text-3xl font-bold text-white mt-2">{{ $projects->count() }}</p>
            </div>
        </div>

        <div class="bg-card-bg rounded-xl border border-gray-800 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-800/50 text-gray-400 text-sm uppercase tracking-wider">
                            <th class="p-6 font-semibold">Image</th>
                            <th class="p-6 font-semibold">Title & Description</th>
                            <th class="p-6 font-semibold">Category</th>
                            <th class="p-6 font-semibold text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-800">
                        @forelse($projects as $project)
                            <tr class="hover:bg-gray-800/30 transition">
                                <td class="p-6 align-top">
                                    <div class="w-20 h-14 bg-gray-700 rounded overflow-hidden">
                                        @if ($project->image)
                                            <img src="{{ asset('storage/' . $project->image) }}"
                                                class="w-full h-full object-cover" alt="Project">
                                        @else
                                            <div
                                                class="w-full h-full flex items-center justify-center text-gray-500 text-xs">
                                                No Img</div>
                                        @endif
                                    </div>
                                </td>
                                <td class="p-6 align-top">
                                    <h4 class="text-white font-bold text-lg">{{ $project->title }}</h4>
                                    <p class="text-gray-500 text-sm mt-1 line-clamp-2">{{ $project->description }}</p>
                                    @if ($project->link)
                                        <a href="{{ $project->link }}" target="_blank"
                                            class="text-primary text-xs mt-2 inline-block hover:underline">
                                            <i class="fas fa-link mr-1"></i> {{ $project->link }}
                                        </a>
                                    @endif
                                </td>
                                <td class="p-6 align-top">
                                    <span
                                        class="px-3 py-1 bg-gray-800 text-primary rounded-full text-xs font-medium border border-gray-700">
                                        {{ $project->category }}
                                    </span>
                                </td>
                                <td class="p-6 align-top text-center">
                                    <div class="flex justify-center space-x-3">
                                        <a href="#" class="text-gray-400 hover:text-white transition"
                                            title="Edit">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <button class="text-gray-400 hover:text-red-500 transition" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="p-10 text-center text-gray-500">
                                    <i class="fas fa-folder-open text-4xl mb-3 opacity-50"></i>
                                    <p>Belum ada project yang ditambahkan.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </main>
</body>

</html>
