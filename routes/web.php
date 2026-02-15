<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Main Pages
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

/*
|--------------------------------------------------------------------------
| About Section
|--------------------------------------------------------------------------
*/
Route::prefix('about')->name('about.')->group(function () {

    Route::get('/team', function () {
        return view('pages.team');
    })->name('team');

    Route::get('/testimonials', function () {
        return view('pages.testimonials');
    })->name('testimonials');

    Route::get('/financing', function () {
        return view('pages.financing');
    })->name('financing');
});

/*
|--------------------------------------------------------------------------
| Blog Section
|--------------------------------------------------------------------------
*/
Route::prefix('blogs')->name('blogs.')->group(function () {

    Route::get('/', function () {
        return view('pages.blogs.index');
    })->name('index');

    Route::get('/details', function () {
        return view('pages.blogs.details');
    })->name('details');
});

/*
|--------------------------------------------------------------------------
| Projects Section
|--------------------------------------------------------------------------
*/
Route::prefix('projects')->name('projects.')->group(function () {

    Route::get('/', function () {
        return view('pages.project.index');
    })->name('index');

    Route::get('/details', function () {
        return view('pages.project.details');
    })->name('details');
});

/*
|--------------------------------------------------------------------------
| Services Section
|--------------------------------------------------------------------------
*/
Route::prefix('services')->name('services.')->group(function () {

    Route::get('/roofing-repairs', function () {
        return view('pages.roof-repair');
    })->name('roof-repair');

    Route::get('/area', function () {
        return view('pages.service-area');
    })->name('service-area');
});
