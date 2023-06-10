<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// controller formula:
// route path
// controller, function
// route name
// Route::get('/', [StudentController::class, 'index']);

// Route::get('/', [StudentController::class, 'home'])->name('student.home');
Route::get('/', [StudentController::class, 'index'])->name('student_home');
Route::get('/about', [StudentController::class, 'about'])->name('student_about');
// Route::get('/profile/{username}/{age}', [StudentController::class, 'profile'])->name('student.profile');






