<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil data project (bisa Anda isi dummy dulu di database)
        $projects = Project::all();
        return view('home', compact('projects'));
    }
}
