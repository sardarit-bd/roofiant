<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function blogs()
    {
        return view('dashboard.blogs.index');
    }
}
