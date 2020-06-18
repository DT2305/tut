<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\AdminPostStoreRequest;
use App\Http\Requests\AdminPostUpdateRequest;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


//use Psy\Util\Str;
use Illuminate\Support\Str;

class AdminPostController extends Controller
{


    public function index()
    {
        $pos = Post::orderBy('created_at', 'desc')->get();
        return view('admin.pages.posts.list', compact('pos'));
    }


    public function create()
    {
        $cat = Category::pluck('name','id');
        $aut = Auth::guard('admin')->user();
//        $author = $aut['full_name'];
        return view('admin.pages.posts.create', compact('cat', 'aut'));
    }

    public function store(AdminPostStoreRequest $request)
    {
        $pos = Post::create($request->all());
        $pos['changedtitle'] = Str::slug($request['title'] . '-'.rand(10, 10000000), '-');
        $pos['origional_author'] = $request['author'];

//        $image = $request->file('avatar');
//        $new_name = $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
//        $image->move(public_path('post_avatar'), $new_name);
//        $pos['avatar'] = $new_name;

        $pos->save();
//        dd($pos);
        return redirect()->route('admin.posts.index')->with('success', ' Thêm tin tức thành công');
    }

    public function show($id)
    {
        $cat = Category::pluck('name','id');
        $pos = Post::findOrFail($id);
        return view('admin.pages.posts.show', compact('pos', 'cat'));
    }

    public function edit($id)
    {
        $cat = Category::pluck('name','id');
        $aut = Auth::guard('admin')->user();
        $pos = Post::findOrFail($id);
        return view('admin.pages.posts.edit', compact('pos', 'cat', 'aut'));
    }

    public function update(AdminPostUpdateRequest $request, $id)
    {
        $pos = Post::findOrFail($id);
        if ($pos['title']==$request['title']){
            $pos->update($request->all());
//            dd($pos);
            return redirect()->route('admin.posts.show', $pos)->with('success', 'Cập nhật tin tức thành công');
        }else{
            $pos->update($request->all());
            $pos['changedtitle'] = Str::slug($request['title'].-rand(10, 10000000), '-');
            $pos->save();
//            dd($pos);
            return redirect()->route('admin.posts.show', $pos)->with('success', 'Cập nhật tin tức thành công');
        }
    }

    public function destroy($id)
    {
        $pos = Post::find($id);
        $pos->delete();
        return redirect()->route('admin.posts.index')->with('danger', 'Xóa dữ liệu thành công');
    }
}
