<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Faculty;
use App\Http\Requests\AdminUserCreateRequest;
use App\Http\Requests\HomeUserRequest;
use App\Issued_place;
use App\Subject_combination;
use App\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function getList(){
        $usr = User::all();
        return view('admin.pages.users.list',compact('usr'));
    }

    public function  getCreate(){
//        $isd =Issued_place::get();
        $isd = Issued_place::pluck('name','id');
        $fal = Faculty::pluck('name','id');
        $scm = Subject_combination::pluck('name','id');
        return view('admin.pages.users.create',compact('isd','fal','scm'));
    }

    public function postCreate(AdminUserCreateRequest $request){
        $user = User::create($request->validated());



        dd($user);

        return redirect()->route('admin.users.get.list');

    }
}
