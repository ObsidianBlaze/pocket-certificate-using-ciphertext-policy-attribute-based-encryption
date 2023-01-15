<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
