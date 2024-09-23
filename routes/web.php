<?php

use Illuminate\Support\Facades\Route;

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
