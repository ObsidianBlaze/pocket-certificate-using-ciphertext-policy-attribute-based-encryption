<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loginView()
    {
        return view('/admin/adminlogin');
    }

    public function dashboardView()
    {
        return view('/admin/dashboard');
    }

}
