<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    
    //new code
    public function index(){
        $data ['student_name'] = [
            'name' => 'Marcella Andries',
            'email' => 'marcella@gmail.com',
            'phone' => '021'
        ];

        // dd($data);
        // foreach($data['student_name'] as $value) {
        //     echo $value.'-';
        // }

        return view('welcome', $data);
    }

    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    // . meaning subfolder
    public function profile($uname, $age){
        return view('student.profile', ['un'=>$uname, 'age'=>$age]);
    }

     
} 
