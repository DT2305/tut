<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Hash;
use App\Admin;

class AdminController extends Controller
{
    public function getLogin()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.get.index');
        }
        return view('admin.other.login');
    }

    public function getIndex()
    {
        $admin = DB::table('admins')->count();
        $user = DB::table('users')->count();
        $student = DB::table('students')->count();
        $new = DB::table('news')->count();
        $category = DB::table('categories')->count();



        return view('admin.index', ['admin' => $admin,'user' => $user,'student'=>$student,'new'=>$new,'category'=>$category]);
    }

    public function getLogout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.get.login');
    }

    public function getListAdmin(){
        $check = admin::all();
        return view('admin.admin-profile.list',compact('check'));
    }

    public function postLogin(Request $request)
    {

        $username = $request->username;
        $password = $request->password;
        $remember = $request->remember ? $request->remember : 0;

        if (Auth::guard('admin')->attempt(['username' => $username, 'password' => $password], $remember)) {
            return redirect()->route('admin.get.index');
        }
        return back()->with('error', 'Đăng nhập không thành công !');
    }

}