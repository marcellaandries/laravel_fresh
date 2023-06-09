<?php

use Illuminate\Support\Facades\Route;

// route formula
// url path
// view
// url name

Route::get('/', function () {
    return view('home');
})->name('front_home');

Route::get('/about', function () {
    return view('about_page');
})->name('front_about');



