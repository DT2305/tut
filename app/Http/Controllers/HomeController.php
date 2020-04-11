<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Hash;
use App\User;
use App\Http\Requests\HomeUserRequest;

class HomeController extends Controller
{
    public function getRegis(){
        if(Auth::check()){
            return back();
        }
        return view('home.other.regis');
    }

    public function postRegis(HomeUserRequest $request){
        if(Auth::check()){
            return back();
        }
        $user = User::create($request->validated());

        return redirect()->route('home.get.login');
    }

    public function getIndex(){
        /*TODO: thêm giao diện hiện thị tin tức cho ứng viên*/
//        return view('home.index');
        if (Auth::check()){
            return view('home.index');
        }
        return view('home.other.login');
    }

    public function  getLogin(){
        if (Auth::check()){
//            return back();
            return view('home.index');
        }
        return view('home.other.login');
    }

    public function postLogin(Request $rq){
        if(Auth::check()){
            return back();
        }

        $phone_number = $rq->phone_number;
        $password = $rq->password;

        if(Auth::attempt(['phone_number' => $phone_number , 'password' => $password])){
            return redirect()->route('home.get.index');
        }
        else{
            return back()->with('error','Đăng nhập không thành công!!!');
        }
    }

    public function getLogout(){
        if(!Auth::check()){
            return back();
        }
        Auth::logout();
        return redirect()->route('home.get.index');
    }

    public function getEdit(){
        if(!Auth::check()){
            return back();
        }
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('home.edit',['user' => $user]);
    }


}
