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
