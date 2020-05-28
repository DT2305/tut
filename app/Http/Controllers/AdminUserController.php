<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Faculty;
use App\Http\Requests\AdminUserCreateRequest;
use App\Http\Requests\AdminUserEditRequest;
use App\Http\Requests\HomeUserRequest;
use App\Issued_place;
use App\Subject_combination;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminUserController extends Controller
{
    public function index(){
        $usr = User::all();
        return view('admin.pages.users.list',compact('usr'));
    }

    public function  create(){
//        $isd =Issued_place::get();
        $isd = Issued_place::pluck('name','id');
        $fal = Faculty::pluck('name','id');
        $scm = Subject_combination::pluck('name','id');

        $religions = DB::table('religions')->pluck('name','id');
        $nations = DB::table('nations')->pluck('name','id');

        return view('admin.pages.users.create',compact('isd','fal','scm','religions','nations'));

    }

    public function store(AdminUserCreateRequest $request){
        $user = User::create($request->validated());
        $user['password'] = bcrypt($request['password']);
        $user -> save();
        dd($user);
        return redirect()->route('admin.users.index');

    }

    public function show($id)
    {
        $isd = Issued_place::pluck('name','id');
        $fal = Faculty::pluck('name','id');
        $scm = Subject_combination::pluck('name','id');
        $usr = User::find($id);
        return view('admin.pages.users.show',compact('usr','isd','fal','scm'));
    }

    public function edit($id){
        $isd = Issued_place::pluck('name','id');
        $fal = Faculty::pluck('name','id');
        $scm = Subject_combination::pluck('name','id');
        $usr = User::find($id);

        return view('admin.pages.users.edit',compact('usr','isd','fal','scm','id'));
    }
    public function update(AdminUserEditRequest $request,$id){
        $usr = User::find($id);

        $usr->update($request->all());


        return redirect()->route('admin.users.show',$id);

    }
}
