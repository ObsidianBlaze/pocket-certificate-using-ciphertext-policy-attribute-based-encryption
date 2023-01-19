<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Certificate;
use App\Models\Departments;
use App\Models\Levels;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function loginView()
    {
        return view('/admin/adminlogin');
    }

    public function uploadCertificate(){
        $data = Session::get('admin');

        //Checking if the session is empty so as to ensure the admin gets routed to the login page
        if ($data == "") {
            return view('admin/adminlogin');

        } else {
            //Getting the admin email
            $email = $data->email;

            $user = Admin::all()->where('email', '=', $email);
        }

        $levels = Levels::all();

        $students = User::all();

        $certificate = Certificate::all();

        $department = Departments::all();

        return view('/admin/upload_certificate', compact('user','levels', 'students', 'certificate', 'department'));

    }

    public function dashboardView()
    {
        $data = Session::get('admin');

        //Checking if the session is empty so as to ensure the admin gets routed to the login page
        if ($data == "") {
            return view('admin/adminlogin');

        } else {
            //Getting the admin email
            $email = $data->email;


            $user = Admin::all()->where('email', '=', $email);
        }

        return view('/admin/dashboard', compact('user'));
    }

    public function createAdmin(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:admins',
            'password' => 'bail|required|string|min:8',
        ]);

        $register = new Admin();

        if ($register::where('email',$request->email)->first()){
            return redirect('/admin/dashboard')->with('errorMsg', 'Account Already Exists');
        }
        if($validator->fails()){
            return redirect('/admin/dashboard')->withInput()->withErrors($validator);
        }
        $register->email = $request->email;
        $register->role_id = 1;
        $register->password = bcrypt($request->password);
        $register->save();
        return redirect((route('admin_dashboard')))->with('successMsg', 'Account Successfully Created.');

    }

}
