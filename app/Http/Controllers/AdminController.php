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

//        return view('admin.index', ['admin' => $admin,'user' => $user,'student'=>$student,'new'=>$new,'category'=>$category]);
        return view('admin.pages.index',compact('admin','user','student','new','category'));
    }

    public function getLogout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.get.login');
    }

    public function postChangePass(Request $rq){

        if(!empty($rq['oldpass']) && !empty($rq['newpass']) && !empty($rq['renewpass'])){

            $ad = Auth::guard('admin')->user();
            $id = $ad['id'];
            $user = Admin::find($id);
            $password = $user -> password;
            $oldpass = $rq-> oldpass;
            hash::check($oldpass,$password);

            if(!hash::check($oldpass,$password)){
                echo 'Mật khẩu cũ không chính xác !';
            }
            elseif ($rq -> newpass != $rq -> renewpass){
                echo 'Mật khẩu nhập lại không khớp !';
            }
            else{
                $user -> password = bcrypt($rq -> newpass);

                $user -> save();
                echo 'Đổi mật khẩu thành công !';
            }

        }
        else{
            echo 'Vui lòng nhập đầy đủ thông tin !';
        }

    }

    public function getListAdmin(){
        $check = admin::all();
        return view('admin.pages.admin-profiles.list',compact('check'));
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
