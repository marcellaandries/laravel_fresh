<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('front_home');

Route::get('/about', function () {
    return view('about_page');
})->name('front_about');














// lesson archive
//url, page

// Route::get('/about/marcella', function () {
//     return view('about_page');
// });

// Route::view('/about/cella', 'about_page');

// Route::get('/about/{username}/{age}', function ($username, $age) {
//     return view('about_page',['un'=>$username, 'age'=>$age]);
// });

// Route::get('/', function () {
//     return redirect('about');
