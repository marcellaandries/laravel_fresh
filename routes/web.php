<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('home');
});

Route::get('/about/{username}/{age}', function ($username, $age) {
    return view('about_page',['un'=>$username, 'age'=>$age]);
});














// lesson archive
//url, page

// Route::get('/about/marcella', function () {
//     return view('about_page');
// });

// Route::view('/about/cella', 'about_page');

// Route::get('/about/{username}/{age}', function ($username, $age) {
//     return view('about_page',['un'=>$username, 'age'=>$age]);
// });