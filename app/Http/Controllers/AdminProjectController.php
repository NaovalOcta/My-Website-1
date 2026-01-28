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
        // 1. Validasi
        $request->validate([
            'title'       => 'required|string|max:255',
            'category'    => 'required|string|max:255',
            'description' => 'required',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link'        => 'nullable|url',
            'github_link' => 'nullable|url',
            'design_link' => 'nullable|url',
            'tech'        => 'nullable|string',
            'features'             => 'nullable|array',
            'features.*.title'     => 'nullable|string|max:255',
            'features.*.icon'      => 'nullable|string|max:100',
            'features.*.description' => 'nullable|string|max:500',
            'gallery.*'   => 'nullable|image|max:2048',
            // Project Info
            'role'        => 'nullable|string|max:255',
            'project_type' => 'nullable|string|max:255',
            'year'        => 'nullable|string|max:10',
            'team'        => 'nullable|string|max:255',
            'timeline'    => 'nullable|string|max:100',
        ]);

        // 2. Ambil semua data request dasar dulu
        $data = $request->only(['title', 'category', 'description', 'link', 'github_link', 'design_link', 'role', 'project_type', 'year', 'team', 'timeline']);

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
            $techArray = array_map('trim', explode(',', $request->tech));
            $techArray = array_filter($techArray);
            $data['tech'] = array_values(array_slice($techArray, 0, 5));
        } else {
            $data['tech'] = [];
        }

        // 6. Proses Features (Array of Objects)
        if ($request->filled('features')) {
            $features = collect($request->features)
                ->filter(fn($f) => !empty($f['title']))
                ->map(fn($f) => [
                    'title' => $f['title'] ?? '',
                    'icon' => $f['icon'] ?? 'fas fa-check',
                    'description' => $f['description'] ?? ''
                ])
                ->values()
                ->toArray();
            $data['features'] = $features;
        } else {
            $data['features'] = [];
        }

        // 7. Simpan ke Database
        $project = Project::create($data);

        // 8. Upload Gallery (Multiple)
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $file) {
                $path = $file->store('projects/gallery', 'public');
                $project->galleries()->create(['image_path' => $path]);
            }
        }

        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil dibuat!');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        // 1. Validasi
        $request->validate([
            'title'       => 'required|string|max:255',
            'category'    => 'required|string|max:255',
            'description' => 'required',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link'        => 'nullable|url',
            'github_link' => 'nullable|url',
            'design_link' => 'nullable|url',
            'tech'        => 'nullable|string',
            'features'             => 'nullable|array',
            'features.*.title'     => 'nullable|string|max:255',
            'features.*.icon'      => 'nullable|string|max:100',
            'features.*.description' => 'nullable|string|max:500',
            'gallery.*'   => 'nullable|image|max:2048',
            // Project Info
            'role'        => 'nullable|string|max:255',
            'project_type' => 'nullable|string|max:255',
            'year'        => 'nullable|string|max:10',
            'team'        => 'nullable|string|max:255',
            'timeline'    => 'nullable|string|max:100',
        ]);

        // 2. Ambil data dasar
        $data = $request->only(['title', 'category', 'description', 'link', 'github_link', 'design_link', 'role', 'project_type', 'year', 'team', 'timeline']);

        // 3. Logika Update Slug (Hanya generate ulang jika Title berubah)
        if ($request->title != $project->title) {
            $data['slug'] = Str::slug($request->title);

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
            $data['tech'] = [];
        }

        // 5. Proses Image Baru (Hapus lama, simpan baru)
        if ($request->hasFile('image')) {
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
            $data['image'] = $request->file('image')->store('projects', 'public');
        }

        // 6. Proses Features (Array of Objects)
        if ($request->filled('features')) {
            $features = collect($request->features)
                ->filter(fn($f) => !empty($f['title']))
                ->map(fn($f) => [
                    'title' => $f['title'] ?? '',
                    'icon' => $f['icon'] ?? 'fas fa-check',
                    'description' => $f['description'] ?? ''
                ])
                ->values()
                ->toArray();
            $data['features'] = $features;
        } else {
            $data['features'] = [];
        }

        // 7. Upload Gallery (Multiple)
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $file) {
                $path = $file->store('projects/gallery', 'public');
                $project->galleries()->create(['image_path' => $path]);
            }
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
