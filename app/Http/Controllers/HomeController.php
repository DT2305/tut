<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\HomeUserUpdateRequest;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Hash;
use App\User;
use App\Http\Requests\HomeUserStoreRequest;

class HomeController extends Controller
{
    public function getRegis(){
        if(Auth::check()){
            return back();
        }
        return view('home.others.register');
    }

    public function postRegis(HomeUserStoreRequest $request){
        if(Auth::check()){
            return back();
        }
        $user = User::create($request->validated());

        $user['password'] = bcrypt($request['password']);
        $user -> save();
        return redirect()->route('home.get.login')->with(['uname' => $request['username'] , 'phanquyen' => 'Tạo tài khoản thành công !']);
    }

    public function getWelcome(){
        return view('home.pages.welcome');
    }
    public function getHistory(){
        return view('home.about.history');
    }

    public function getIndex(){
        /*TODO: thêm giao diện hiện thị tin tức cho ứng viên*/
//        $pos = Post::orderBy('id', 'desc')->paginate(6);
        $pos = Post::where('status','1')
            ->where('target','1')
            ->orderBy('id', 'desc')
            ->paginate(6);
        if (Auth::check()){
            return view('home.pages.posts.index',compact('pos'));
        }
        return view('home.others.login');
    }

//    Lấy tin tức theo Thể loại
    public function getCategory($cate){
//        $new = DB::table('news')->where('category','=',$cate)->get();
        $cat = Category::findOrFail($cate)->name;
        $pos = Post::where('category_id',$cate)
            ->orderBy('id', 'desc')
            ->where('target','1')
            ->where('status','1')
            ->paginate(6);
        return view('home.pages.posts.posts-cate',compact('pos','cat','cate'));
    }

    public function getContent($tit){
        $pos = Post::where('changedtitle','=',$tit)->get();

        foreach($pos as $val){
            $id = $val->id;
            $n = Post::find($id);
            $n['view'] += 1;
            $n->save();
        }
        return view('home.pages.posts.single-post',compact('pos'));
    }

    public function  getLogin(){
        if (Auth::check()){
//            return back();
            return view('home.pages.posts.index');
        }
        return view('home.others.login');
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

    public function getInfo(){
        if(!Auth::check()){
            return view('home.others.login');
        }
        $issued_place = DB::table('issued_places')->get();
        $religions = DB::table('religions')->get();
        $nations = DB::table('nations')->get();


        $id = Auth::user()->id;
        $user = User::find($id);
        return view('home.pages.info',['usr' => $user], ['isu' => $issued_place])->with(['rel' => $religions])->with(['nat' => $nations]);
    }

    public function getEdit(){
        if(!Auth::check()){
            return view('home.others.login');
        }
        $issued_place = DB::table('issued_places')->get();
        $religions = DB::table('religions')->get();
        $nations = DB::table('nations')->get();


        $id = Auth::user()->id;
        $user = User::find($id);
        return view('home.pages.edit',['usr' => $user], ['isu' => $issued_place])->with(['rel' => $religions])->with(['nat' => $nations]);
    }
    public function postEdit(HomeUserUpdateRequest $request, User $user){

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


        $admin->save();

        return redirect()->route('home.get.info')->with('phanquyen' ,'Cập nhật thông tin thành công !');

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
