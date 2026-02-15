<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/blogs', function () {
    return view('pages.blogs.index');
})->name('blogs');

Route::get('/blogs/details', function () {
    return view('pages.blogs.details');
})->name('blogs.details');

Route::get('/projects', function () {
    return view('pages.project.index');
})->name('projects');

Route::get('/projects/details', function () {
    return view('pages.project.details');
})->name('projects.details');

Route::get('/about/financing', function () {
    return view('pages.financing');
})->name('about.financing');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/services/roofing-repairs', function () {
    return view('pages.roof-repair');
})->name('services.roof-repair');

Route::get('/services/area', function () {
    return view('pages.service-area');
})->name('services.service-area ');
