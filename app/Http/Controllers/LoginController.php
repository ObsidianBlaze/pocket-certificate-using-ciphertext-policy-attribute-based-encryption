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

    //Student login
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
        if(auth()->attempt(['mat_no' => $request->input('mat_no'),  'password' => $request->input('password')])){
            $user = auth()->user();

            //Starting a user session
            Session::put('user', $user);

            return redirect()->route('student_dashboard');
        }

        return redirect('/student/login')->with('errorMsg', 'Confirm your username and password');
    }

//    Admin login
    public function adminLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if($validator->fails()){
            return redirect('/admin/register')->withInput()->withErrors($validator);
        }

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return "logged in";
//            return redirect()->intended('dashboard')
//                ->withSuccess('Signed in');
        }

        return redirect('/admin/login')->with('errorMsg', 'Confirm your username and password');
    }

    public function dashboard()
    {
        $data = Session::get('user');

        //Checking if the session is empty so as to ensure the admin gets routed to the login page
        if ($data == "") {
            return view('student/studentlogin');

        } else {
            //Getting the admin email
            $mat_no = $data->mat_no;


            $user = User::all()->where('mat_no', '=', $mat_no);
        }

        return view('/student/dashboard', compact('user'));
    }

    public function signOut() {
        auth()->logout();
        Session::flush();
        Session::put('success', 'You are logout sucessfully');
        return redirect(route('student_login'));
    }
}
