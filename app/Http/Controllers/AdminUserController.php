<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Faculty;
use App\Http\Requests\AdminUserStoreRequest;
use App\Http\Requests\AdminUserUpdateRequest;
use App\Http\Requests\HomeUserStoreRequest;
use App\Issued_place;
use App\Subject_combination;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminUserController extends Controller
{
    public function index()
    {
        $usr = User::all();
        return view('admin.pages.users.list', compact('usr'));
    }

    public function create()
    {
//        $isd =Issued_place::get();
        $isd = Issued_place::pluck('name', 'id');
        $fal = Faculty::pluck('name', 'id');
        $scm = Subject_combination::pluck('name', 'id');

        $religions = DB::table('religions')->pluck('name', 'id');
        $nations = DB::table('nations')->pluck('name', 'id');

        return view('admin.pages.users.create', compact('isd', 'fal', 'scm', 'religions', 'nations'));

    }

    public function store(AdminUserStoreRequest $request)
    {
        $usr = User::create($request->validated());
        $usr['password'] = bcrypt($request['password']);
        $usr->save();
        return redirect()->route('admin.users.index')->with('success', 'Thêm Ứng viên thành công');

    }

    public function show($id)
    {
        $isd = Issued_place::pluck('name', 'id');
        $fal = Faculty::pluck('name', 'id');
        $scm = Subject_combination::pluck('name', 'id');
        $usr = User::find($id);
        return view('admin.pages.users.show', compact('usr', 'isd', 'fal', 'scm'));
    }

    public function edit($id)
    {
        $isd = Issued_place::pluck('name', 'id');
        $fal = Faculty::pluck('name', 'id');
        $scm = Subject_combination::pluck('name', 'id');
        $religions = DB::table('religions')->pluck('name', 'id');
        $nations = DB::table('nations')->pluck('name', 'id');
        $usr = User::find($id);

        return view('admin.pages.users.edit', compact('usr', 'isd', 'fal', 'scm', 'id', 'nations', 'religions'));
    }

    public function update(AdminUserUpdateRequest $request, $id)
    {
        $usr = User::find($id);
        if ($request['password'] != null) {
            $usr->update($request->except('password'));
            $usr['password'] = bcrypt($request['password']);
            $usr->save();
//            dd($usr);
        } else {
            $usr->update($request->except('password'));
//            dd($usr);
        }
        return redirect()->route('admin.students.show', $id)->with('success', 'Cập nhật Ứng viên thành công');
    }

    public function destroy($id)
    {
        $usr = User::find($id);
        $usr->delete();
        return redirect()->route('admin.students.index')->with('danger', 'Xóa Ứng viên thành công');
    }
    public  function addStudent($id){
        $isd = Issued_place::pluck('name', 'id');
        $fal = Faculty::pluck('name', 'id');
        $scm = Subject_combination::pluck('name', 'id');
        $religions = DB::table('religions')->pluck('name', 'id');
        $nations = DB::table('nations')->pluck('name', 'id');
        $usr = User::find($id);

        return view('admin.pages.users.edit', compact('usr', 'isd', 'fal', 'scm', 'id', 'nations', 'religions'));
    }
    public  function userTostudent($id){

    }

}
