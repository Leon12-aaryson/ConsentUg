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
Route::get('digital-rights', function () {
    return view('digital-rights');
});
Route::get('consumer-redress', function () {
    return view('consumer-redress');
});
