<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function loginView(){
        return view('studentlogin');
    }

    public function registerView(){
        return view('studentregister');
    }

}
