<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function homeView(){
        return view('welcome');
    }

    public function aboutView(){
        return view('about');
    }

    public function contactView(){
        return view('contact');

    }
}
