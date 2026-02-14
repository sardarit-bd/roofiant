<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/services/roofing-repairs', function () {
    return view('pages.roof-repair');
})->name('services.roof-repair');

Route::get('/services/area', function () {
    return view('pages.service-area');
})->name('services.service-area ');
