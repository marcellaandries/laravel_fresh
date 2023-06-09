<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// controller formula:
// route path
// controller, function
// route name
Route::get('/', [StudentController::class, 'home'])->name('student.home');
Route::get('/about', [StudentController::class, 'about'])->name('student.about');






