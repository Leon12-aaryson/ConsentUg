<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;

// Static Pages Routes
Route::view('/', 'index');
Route::view('about', 'about');
Route::view('contact', 'contact');
Route::view('events', 'events');
Route::view('how-we-work', 'how-we-work');
Route::view('what-we-do', 'what-we-do');
Route::view('consumer-access', 'consumer-access');
Route::view('right-to-inclusivity', 'right-to-inclusivity');
Route::view('consumer-information', 'consumer-information');
Route::view('consumer-protection', 'consumer-protection');
Route::view('consumer-representation', 'consumer-representation');
Route::view('digital-rights', 'digital-rights');
Route::view('consumer-education', 'consumer-education');
Route::view('sustainability', 'sustainability');
Route::view('consumer-redress', 'consumer-redress');
Route::view('consumer-empowerment', 'consumer-empowerment');
Route::view('agrifood-systems', 'agrifood-systems')->name('agrifood-systems');
Route::view('sustainable-trade', 'sustainable-trade')->name('sustainable-trade');
Route::view('quality-utilities', 'quality-utilities')->name('quality-utilities');
Route::view('environment', 'environment')->name('environment');

// Move all admin routes under domain constraint
Route::domain('admin.consentug.org')->group(function () {
    // Authentication routes
    require __DIR__.'/auth.php';

    // Protected routes
    Route::middleware(['auth', 'verified'])->group(function () {
        // Dashboard route
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        // Users route
        Route::get('/users', function () {
            return view('dashboard.users');
        })->name('users');

        // Settings route
        Route::get('/settings', function () {
            return view('dashboard.settings');
        })->name('settings');

        // Blog management routes
        Route::get('/dashboard/blogs', [BlogController::class, 'dashboard'])->name('dashboard.blogs');
        Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
        Route::put('/blogs/{blog}', [BlogController::class, 'update'])->name('blogs.update');
        Route::delete('/blogs/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');

        // Profile routes
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});

// Remove duplicate routes and move public blog routes outside domain constraint
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blogs.show');

Route::get('/check-blogs', function () {
    dd(App\Models\Blog::all());
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/test-404', function() {
    abort(404);
});
