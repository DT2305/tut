<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomeUserEditRequest;
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

        $user['password'] = bcrypt($request['password']);
        $user -> save();
        return redirect()->route('home.get.login')->with(['uname' => $request['username'] , 'phanquyen' => 'Tạo tài khoản thành công !']);
    }

    public function getIndex(){
        /*TODO: thêm giao diện hiện thị tin tức cho ứng viên*/
//        return view('home.index');
        if (Auth::check()){
            return view('home.index');
        }
        return view('home.index');
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
            return view('home.other.login');
        }
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('home.edit',['user' => $user]);
    }
    public function postEdit(HomeUserEditRequest $request,User $user){

        $ad = Auth::user();
        $id = $ad['id'];
        $admin = User::find($id);
        $user = User::find($id);
        $user->update($request->all());


        if($request -> hasFile('point_img')){
            $file = $request -> file('point_img');
            $fileType = $file -> getClientOriginalExtension('point_img');
            if($fileType == "jpg" || $fileType == 'png' || $fileType == 'jpeg'){

                $AvatarName = 'point_img'.'_'.$admin['phone_number'].'_'.rand().'.'.$fileType;
                $file -> move('images/user_img/user-point-img',$AvatarName);
                if(file_exists($admin['point_img'])){
                    unlink($admin['point_img']);
                    $admin['point_img'] = "";
                }
                $urlAvatar = 'images/user_img/user-point-img/'.$AvatarName;
                $admin['point_img'] = $urlAvatar;

            }
            else{
                return back()->with("error","Phải là file ảnh (jpg , png ,jpeg)");
            }
        }

//        $name = $request['name'];
//        $gender = $request['gender'];
//        $identify_number = $request['identify_number'];
//        $email = $request['email'];
//        $birthday = $request['birthday'];
//        $phone_number = $request['phone_number'];
//        $address = $request['address'];
//        $major_1 = $request['major_1'];
//        $major_2 = $request['major_2'];
//        $major_3 = $request['major_3'];
//        $point_1 = $request['point_1'];
//        $point_2 = $request['point_2'];
//        $point_3 = $request['point_3'];
//        $priority = $request['priority'];
//        $area = $request['area'];
//
//        $admin['name'] = $name;
//        $admin['gender'] = $gender;
//        $admin['identify_number'] = $identify_number;
//        $admin['email'] = $email;
//        $admin['birthday'] = $birthday;
//        $admin['phone_number'] = $phone_number;
//        $admin['address'] = $address;
//        $admin['major_1'] = $major_1;
//        $admin['major_2'] = $major_2;
//        $admin['major_3'] = $major_3;
//        $admin['point_1'] = $point_1;
//        $admin['point_2'] = $point_2;
//        $admin['point_3'] = $point_3;
//        $admin['priority'] = $priority;
//        $admin['area'] = $area;


        $admin->save();

        return redirect()->route('home.get.edit')->with('phanquyen' ,'Cập nhật thông tin thành công !');

    }


    public function postChangePass(Request $rq){

        if(!empty($rq['oldpass']) && !empty($rq['newpass']) && !empty($rq['renewpass'])){

            $ad = Auth::user();
            $id = $ad['id'];
            $user = User::find($id);
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


}
