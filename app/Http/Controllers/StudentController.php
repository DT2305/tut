<?php

namespace App\Http\Controllers;
use App\Http\Requests\StudentEditRequest;
use Illuminate\Http\Request;
use Auth;
use Hash;
use App\Student;
use App\Course;
use App\Faculty;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function getWelcome(){
        return view('student.pages.welcome');
    }

    public function getIndex(){
        /*TODO: thêm giao diện hiện thị tin tức cho sinh viên*/
//        return view('student.index');
        if (Auth::guard('student')->check()){
            return view('student.pages.index');
        }
        return view('student.others.login');
    }

    public function  getLogin(){
        if (Auth::guard('student')->check()){
//            return back();
            return view('student.pages.index');
        }
        return view('student.others.login');
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

    public function getInfo(){
        if(!Auth("student")->check()){
            return back();
        }
        $issued_place = DB::table('issued_places')->get();
        $religions = DB::table('religions')->get();
        $nations = DB::table('nations')->get();


        $id = Auth("student")->user()->id;
        $user = Student::find($id);

        return view('student.pages.info',['usr' => $user], ['isu' => $issued_place])->with(['rel' => $religions])->with(['nat' => $nations]);
    }

    public function getEdit(){
        if(!Auth("student")->check()){
            return back();
        }
        $issued_place = DB::table('issued_places')->get();
        $religions = DB::table('religions')->get();
        $nations = DB::table('nations')->get();

        $id = Auth("student")->user()->id;
        $user = Student::find($id);


        return view('student.pages.edit',['usr' => $user], ['isu' => $issued_place])->with(['rel' => $religions])->with(['nat' => $nations]);
    }

    public function postEdit(StudentEditRequest $request,Student $user){

        $ad = Auth('student')->user();
        $id = $ad['id'];
        $admin = Student::find($id);
        $user = Student::find($id);
        $user->update($request->all());

        $admin->save();

        return redirect()->route('student.get.info')->with('phanquyen' ,'Cập nhật thông tin thành công !');

    }

    public function postChangePass(Request $rq){

        if(!empty($rq['oldpass']) && !empty($rq['newpass']) && !empty($rq['renewpass'])){

            $ad = Auth::guard('student')->user();
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
