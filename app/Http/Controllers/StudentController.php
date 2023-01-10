<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function loginView()
    {
        return view('studentlogin');
    }

    public function registerView()
    {
        return view('studentregister');
    }

    public function registerStudent(Request $request)
    {
        $this->validate($request, [
            'matNo' => 'required',
            'surname' => 'required',
            'state_of_origin' => 'required',
            'dob' => 'required',
            'password' => 'bail|required|string|min:8',
        ]);

        $register = new User();
        $register->mat_no = $request->matNo;
        $register->surname = $request->surname;
        $register->state_of_origin = $request->state_of_origin;
        $register->date_of_birth = $request->dob;
        $register->password = bcrypt($request->password);
        $register->department_id = 1;
        $register->role_id = 2;
        $register->save();
        return redirect((route('student_login')))->with('successMsg', 'Account Successfully Created.');
    }

}
