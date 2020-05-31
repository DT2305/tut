<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use Auth;
use Illuminate\Http\Request;

class AdminNewController extends Controller
{
    public function index()
    {
        $new = News::all();
        return view('admin.pages.news.list',compact('new'));
    }

    public function create()
    {
        // $cate = Category::all();
        $cat = Category::pluck('cate_name','id');
        $auth = Auth::guard('admin')->user();
        $author = $auth['fullname'];
        return view('admin.pages.news.create',compact('cat','auth'));
    }

    public function store(Request $request)
    {
        $this -> validate($request,[
            'title' => 'required',
            'description' => 'required',
            'author' => 'required',
            'avatar' => 'required',
            'category' => 'required',
            'status' => 'required',
            'content' => 'required',
        ],[
            'title.required' => 'Vui lòng nhập title',
            'description.required' => 'Vui lòng nhập description',
            'author.required' => 'Vui lòng nhập author',
            'avatar.required' => 'Vui lòng pick avatar',
            'category.required' => 'Vui lòng nhập category',
            'status.required' => 'Vui lòng nhập status',
            'content.required' => 'Vui lòng nhập content'
        ]);

        if($request -> hasFile('avatar')){
            $file = $request -> file('avatar');
            $fileType = $file -> getClientOriginalExtension('avatar');
            if($fileType == "jpg" || $fileType == 'png' || $fileType == 'jpeg'){
                $title = $request['title'];
                $description = $request['description'];
                $changetitle = changeTitle(trim($title));
                $changetitle .= rand(10,10000000);
                $author = $request['author'];
                $category = $request['category'];
                $status = $request['status'];
                $content = $request['content'];

                $AvatarName = 'avatar_'.$author.rand().'.'.$fileType;
                $file -> move('admin_layout/images/avatar-new',$AvatarName);
                $urlAvatar = 'admin_layout/images/avatar-new/'.$AvatarName;

                $new = new news;
                $ad = Auth::guard('admin')->user();
                $id = $ad['id'];
                $admin = admin::find($id);
                $author2 = $admin['username'];
                $new['title'] = $title;
                $new['changetitle'] = $changetitle;
                $new['description'] = $description;
                $new['author'] = $author;
                $new['author2'] = $author2;
                $new['category'] = $category;
                $new['status'] = $status;
                $new['content'] = $content;
                $new['avatar'] = $urlAvatar;
                $new -> save();

                return redirect()->route('admin.news.index');
                
            }
            else{
                return back()->with("error","Phải là file ảnh (jpg , png ,jpeg)");
            }
        }
        else{
            return back()->with("error","Bạn chưa chọn avatar");
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
