<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about/marcella', function () {
    return view('about_page');
});

//url, page
Route::view('/about/cella', 'about_page');