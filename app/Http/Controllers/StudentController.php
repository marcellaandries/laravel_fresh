<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    
    //new code
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }
}
