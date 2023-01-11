<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
//        return view('auth.login');
    }

    public function studentLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mat_no' => 'required',
            'password' => 'required',
        ]);
        if($validator->fails()){
            return redirect('/student/register')->withInput()->withErrors($validator);
        }

        $credentials = $request->only('mat_no', 'password');
        if (Auth::attempt($credentials)) {
            return "logged in";
//            return redirect()->intended('dashboard')
//                ->withSuccess('Signed in');
        }

        return redirect('/student/login')->with('errorMsg', 'Confirm your username and password');
    }


    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
