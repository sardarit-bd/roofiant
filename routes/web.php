<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\AreaserviceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware(['auth', 'verified'])->prefix('dashboards')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::prefix('blogs')->group(function () {
        Route::get('/', [BlogController::class, 'myblog'])
            ->name('admin.blog.index');
        Route::get('/create', [BlogController::class, 'create'])
            ->name('admin.blog.create');
        Route::post('/create', [BlogController::class, 'store'])
            ->name('blogs.store');
    });

    Route::prefix('areas')->group(function () {
        Route::get('/', [AreaController::class, 'index'])
            ->name('admin.area.index');

        Route::get('/create', [AreaController::class, 'create'])
            ->name('areas.create');

        Route::post('/create', [AreaController::class, 'store'])
            ->name('areas.store');

        Route::post('/delete', [AreaController::class, 'destroy'])
            ->name('areas.destroy');
    });

    Route::resource('services', ServiceController::class);
    Route::resource('area-services', AreaserviceController::class);
    // Projects Resource
    Route::resource('projects', ProjectController::class);

    // Delete single project image
    Route::delete('project-images/{image}', [ProjectController::class, 'deleteImage'])
        ->name('project-images.destroy');

    // Settings

    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::post('/settings', [SettingController::class, 'update'])->name('settings.update');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

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

Route::get('/products', function () {
    return view('pages.products');
})->name('products');

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

    Route::get('/', [BlogController::class, 'index'])->name('index');

    Route::get('/details', function () {
        return view('pages.blogs.details');
    })->name('details');
});

/*
|--------------------------------------------------------------------------
| Projects Section
|--------------------------------------------------------------------------
*/
Route::prefix('project')->name('project.')->group(function () {

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

/*
|--------------------------------------------------------------------------
| Team Section
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->prefix('dashboard')->group(function () {

    // Teams & Categories Management
    Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');

    // Category Routes
    Route::post('/team-categories', [TeamController::class, 'storeCategory'])->name('team.categories.store');
    Route::put('/team-categories/{category}', [TeamController::class, 'updateCategory'])->name('team.categories.update');
    Route::delete('/team-categories/{category}', [TeamController::class, 'destroyCategory'])->name('team.categories.destroy');

    // Team Routes
    Route::post('/teams', [TeamController::class, 'storeTeam'])->name('teams.store');
    Route::put('/teams/{team}', [TeamController::class, 'updateTeam'])->name('teams.update');
    Route::delete('/teams/{team}', [TeamController::class, 'destroyTeam'])->name('teams.destroy');

});

require __DIR__.'/auth.php';
