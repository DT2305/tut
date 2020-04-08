<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\Student;

class StudentController extends Controller
{
    public function getIndex(){
        /*TODO: thêm giao diện hiện thị tin tức cho sinh viên*/
//        return view('student.index');
        if (Auth::guard('student')->check()){
            return view('student.index');
        }
        return view('student.other.login');
    }

    public function  getLogin(){
        if (Auth::guard('student')->check()){
//            return back();
            return view('student.index');
        }
        return view('student.other.login');
    }

    public function getLogout()
    {
        Auth::guard('student')->logout();
        return redirect()->route('student.get.login');
    }

    public function postLogin(Request $request)
    {

        $student_code = $request->student_code;
        $password = $request->password;

        if (Auth::guard('student')->attempt(['student_code' => $student_code, 'password' => $password])) {
            return redirect()->route('student.get.index');
        }
        return back()->with('error', 'Đăng nhập không thành công !');
    }



}
