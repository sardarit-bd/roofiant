<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Blog;
use App\Models\Project;
use App\Models\Service;

class DashboardController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        $areas = Area::all();
        $services = Service::all();
        $projects = Project::all();

        return view('dashboard.index', compact('blogs', 'areas', 'services', 'projects'));
    }

    public function blogs()
    {
        return view('dashboard.blogs.index');
    }
}
