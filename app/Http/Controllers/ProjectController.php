<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Menampilkan daftar project (Asli atau Dummy).
     */
    public function index()
    {
        // 1. Coba ambil data asli dari Database
        $projects = Project::latest()->get();

        // 2. LOGIKA GRACEFUL DEGRADATION
        // Jika database kosong, gunakan data dummy
        if ($projects->isEmpty()) {
            $projects = collect([
                [
                    'title' => 'E-Commerce Mobile App (Dummy)',
                    'category' => 'Mobile Development',
                    'image' => 'https://placehold.co/800x600/111827/334155?text=Shoe+Store+App',
                    'description' => 'Aplikasi marketplace sepatu second-hand dengan fitur payment gateway dan real-time chat.',
                    'tech' => ['Flutter', 'Laravel API', 'Stripe']
                ],
                [
                    'title' => 'Sistem Informasi Wisata (Dummy)',
                    'category' => 'Web Development',
                    'image' => 'https://placehold.co/800x600/1e293b/4f46e5?text=Visit+Batu',
                    'description' => 'Platform promosi pariwisata daerah Batu dengan fitur booking tiket dan peta interaktif.',
                    'tech' => ['Laravel 12', 'Bootstrap 5', 'LeafletJS']
                ],
                [
                    'title' => 'Smart Home Dashboard (Dummy)',
                    'category' => 'IoT',
                    'image' => 'https://placehold.co/800x600/0f172a/0ea5e9?text=IoT+Dashboard',
                    'description' => 'Dashboard monitoring suhu dan kelembaban rumah berbasis web realtime menggunakan protokol MQTT.',
                    'tech' => ['Vue.js', 'Express', 'MQTT']
                ],
                // Tambahkan dummy lain jika perlu...
            ]);

            // Konversi Array menjadi Object agar konsisten dengan Eloquent ($project->title)
            $projects = $projects->map(function ($item) {
                return (object) $item;
            });
        }

        // 3. Kirim data ke View
        return view('projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
        // Mengembalikan view detail dengan data project
        return view('projects.show', compact('project'));
    }
}
