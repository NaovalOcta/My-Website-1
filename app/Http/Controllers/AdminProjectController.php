<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'nullable|url',
            'tech' => 'required|array',
        ]);

        $imagePath = $request->file('image')->store('projects', 'public');
        $techInput = $request->input('tech');

        // Jika ada input tech
        if ($techInput) {
            // 1. Pecah string berdasarkan koma
            $techArray = explode(',', $techInput);

            // 2. Bersihkan spasi di awal/akhir setiap item (trim)
            $techArray = array_map('trim', $techArray);

            // 3. Ambil hanya 5 item pertama (Limitasi Max 5)
            $data['tech'] = array_slice($techArray, 0, 5);
        } else {
            $data['tech'] = []; // Kosongkan jika tidak ada input
        }

        Project::create([
            'title' => $request->title,
            'category' => $request->category,
            'description' => $request->description,
            'image' => $imagePath,
            'link' => $request->link,
            'tech' => $request->tech,
        ]);

        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil ditambahkan!');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image optional saat update
            'link' => 'nullable|url',
            'tech' => 'required|array',
        ]);

        $data = $request->only(['title', 'category', 'description', 'link']);
        $techInput = $request->input('tech');

        if ($techInput) {
            // 1. Pecah string berdasarkan koma
            $techArray = explode(',', $techInput);

            // 2. Bersihkan spasi di awal/akhir setiap item (trim)
            $techArray = array_map('trim', $techArray);

            // 3. Ambil hanya 5 item pertama (Limitasi Max 5)
            $data['tech'] = array_slice($techArray, 0, 5);
        } else {
            $data['tech'] = []; // Kosongkan jika tidak ada input
        }

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
            $data['image'] = $request->file('image')->store('projects', 'public');
        }

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
