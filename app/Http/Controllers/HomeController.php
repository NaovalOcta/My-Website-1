<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil 6 project terbaru untuk ditampilkan di homepage
        $projects = Project::latest()->take(6)->get();
        return view('home', compact('projects'));
    }
}
