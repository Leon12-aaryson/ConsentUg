<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});
Route::get('events', function () {
    return view('events');
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('how-we-work', function () {
    return view('how-we-work');
});

Route::get('what-we-do', function () {
    return view('what-we-do');
});
Route::get('consumer-access', function () {
    return view('consumer-access');
});

Route::get('right-to-inclusivity', function () {
    return view('right-to-inclusivity');
});

Route::get('consumer-information', function () {
    return view('consumer-information');
});

Route::get('consumer-protection', function () {
    return view('consumer-protection');
});

Route::get('consumer-representation', function () {
    return view('consumer-representation');
});

Route::get('digital-rights', function () {
    return view('digital-rights');
});

Route::get('consumer-education', function () {
    return view('consumer-education');
});

Route::get('sustainability', function () {
    return view('sustainability');
});

Route::get('consumer-redress', function () {
    return view('consumer-redress');
});

Route::get('consumer-empowerment', function () {
    return view('consumer-empowerment');
});

Route::get('agrifood-systems', function () {
    return view('agrifood-systems');
})->name('agrifood-systems');

Route::get('sustainable-trade', function () {
    return view('sustainable-trade');
})->name('sustainable-trade');

Route::get('quality-utilities', function () {
    return view('quality-utilities');
})->name('quality-utilities');

Route::get('environment', function () {
    return view('environment');
})->name('environment');


Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('blogs', function () {
    return view('blogs');
})->name('blogs');

Route::get('users', function () {
    return view('users');
})->name('users');

Route::get('settings', function () {
    return view('settings');
})->name('settings');



// Route to display the list of blogs and the creation form
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');

// Route to handle storing a new blog
Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');

// Route to edit a blog
Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');

// Route to update a blog
Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blogs.update');

// Route to delete a blog
Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');
Route::get('/blog', [BlogController::class, 'showBlogPage'])->name('blog.index');



// Route to display the list of users and the creation form
Route::get('/users', [UserController::class, 'index'])->name('users.index');

// Route to handle storing a new user
Route::post('/users', [UserController::class, 'store'])->name('users.store');

// Route to edit a user
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');

// Route to update a user
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');

// Route to delete a user
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
