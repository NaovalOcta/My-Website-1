<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        // 1. Perbaiki Validasi: 'tech' harus 'string' (bukan array)
        $request->validate([
            'title'       => 'required|string|max:255',
            'category'    => 'required|string|max:255',
            'description' => 'required',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link'        => 'nullable|url',
            'tech'        => 'nullable|string', // <--- UBAH INI JADI STRING
        ]);

        // 2. Ambil semua data request dasar dulu
        $data = $request->only(['title', 'category', 'description', 'link']);

        // 3. Proses Image
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('projects', 'public');
        }

        // 4. Generate Slug
        $data['slug'] = Str::slug($request->title);
        if (Project::where('slug', $data['slug'])->exists()) {
            $data['slug'] .= '-' . Str::random(5);
        }

        // 5. Proses Tech Stack (String -> Array)
        if ($request->filled('tech')) {
            // Pecah string "Laravel, MySQL" menjadi array ["Laravel", "MySQL"]
            $techArray = array_map('trim', explode(',', $request->tech));
            $techArray = array_filter($techArray);
            $data['tech'] = array_values(array_slice($techArray, 0, 5));
        } else {
            $data['tech'] = [];
        }

        // 6. Simpan ke Database
        Project::create($data);

        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil dibuat!');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        // 1. Validasi (Sama seperti store, tapi image jadi nullable)
        $request->validate([
            'title'       => 'required|string|max:255',
            'category'    => 'required|string|max:255',
            'description' => 'required',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Tidak wajib saat update
            'link'        => 'nullable|url',
            'tech'        => 'nullable|string', // WAJIB STRING (bukan array)
        ]);

        // 2. Ambil data dasar
        $data = $request->only(['title', 'category', 'description', 'link']);

        // 3. Logika Update Slug (Hanya generate ulang jika Title berubah)
        if ($request->title != $project->title) {
            $data['slug'] = Str::slug($request->title);

            // Cek unik: pastikan slug baru belum dipakai orang lain (kecuali diri sendiri)
            if (Project::where('slug', $data['slug'])->where('id', '!=', $project->id)->exists()) {
                $data['slug'] .= '-' . Str::random(5);
            }
        }

        // 4. Proses Tech Stack (String -> Array)
        if ($request->filled('tech')) {
            $techArray = array_map('trim', explode(',', $request->tech));
            $techArray = array_filter($techArray);
            $data['tech'] = array_values(array_slice($techArray, 0, 5));
        } else {
            // Jika input kosong, set array kosong (hapus tech stack yang ada)
            $data['tech'] = [];
        }

        // 5. Proses Image Baru (Hapus lama, simpan baru)
        if ($request->hasFile('image')) {
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
            $data['image'] = $request->file('image')->store('projects', 'public');
        }

        // 6. Eksekusi Update
        $project->update($data);

        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil diperbarui!');
    }

    public function destroy(Project $project)
    {
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }
        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil dihapus!');
    }
}
