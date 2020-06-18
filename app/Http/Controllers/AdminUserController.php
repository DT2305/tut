<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Course;
use App\Department;
use App\Education_level;
use App\Education_type;
use App\Faculty;
use App\Http\Requests\AdminStudentStoreRequest;
use App\Http\Requests\AdminUserMovedRequest;
use App\Http\Requests\AdminUserStoreRequest;
use App\Http\Requests\AdminUserUpdateRequest;
use App\Http\Requests\HomeUserStoreRequest;
use App\Issued_place;
use App\Nation;
use App\Religion;
use App\Student;
use App\Subject_combination;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin2')->except('index');
    }
    public function index()
    {
        $usr = User::orderBy('id', 'desc')->where('is_student',null)->get();
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
        return view('admin.pages.users.show', compact('usr'))->with('success', 'Thêm Ứng viên thành công');

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
        return redirect()->route('admin.users.show', $id)->with('success', 'Cập nhật Ứng viên thành công');
    }

    public function destroy($id)
    {
        $usr = User::find($id);
        $usr->delete();
        return redirect()->route('admin.users.index')->with('danger', 'Xóa Ứng viên thành công');
    }

    public function addStudent($id)
    {
        $isd = Issued_place::pluck('name', 'id');
        $fal = Faculty::pluck('name', 'id');
        $scm = Subject_combination::pluck('name', 'id');
        $religions = DB::table('religions')->pluck('name', 'id');
        $nations = DB::table('nations')->pluck('name', 'id');
        $usr = User::find($id);

        return view('admin.pages.users.edit', compact('usr'
            , 'isd', 'fal', 'scm', 'id', 'nations', 'religions'));
    }

    public function move($id)
    {
        $isd = Issued_place::pluck('name', 'id');
        $fal = Faculty::pluck('name', 'id');
        $scm = Subject_combination::pluck('name', 'id');
        $religions = Religion::pluck('name', 'id');
        $nations = Nation::pluck('name', 'id');
        $dep = Department::pluck('name', 'id');
        $cor = Course::pluck('name', 'id');

        $edu_type = Education_type::pluck('name', 'id');
        $edu_level = Education_level::pluck('name', 'id');
        $maxStuCode = Student::max('student_code', 'id');

        $usr = User::find($id);

        return view('admin.pages.users.move', compact('usr'
            , 'isd', 'fal', 'scm', 'id', 'nations', 'religions', 'dep', 'cor', 'edu_level', 'edu_type', 'maxStuCode'));
    }

    public function moved(AdminUserMovedRequest $request)
    {

        $usr = User::where('email', $request->email)
            ->orWhere('identity_number',$request->identity_number)
            ->first();
//        $usr = User::where(function ($query){
//            $query->where()
//        });
        if ($request->password == $usr->password) {
            $std = Student::create($request->all());
            $usr->is_student = 1;
            $usr->save();
            return redirect()->route('admin.students.show', $std['id'])->with('success', 'Chuyển ứng viên sang sinh viên thành công (Sử dụng mật khẩu cũ)');
        }
        $std = Student::create($request->all());
        $std->password = bcrypt($request->password);
        $std->save();
        $usr->is_student = 1;
        $usr->save();
        return redirect()->route('admin.students.show', $std['id'])->with('success', 'Chuyển thành công (Sử dụng mật khẩu mới)');


    }


}
//
//$std = Student::create($request->all());
//$std->password = bcrypt($request->password);
//if ($std->save())
//{
//    $usr =  User::where('email',$request->email)->first();
//    $usr->is_student = 1;
//    $usr->save();
//    return redirect()->route('admin.students.index')->with('success', 'Chuyển thành công');
//}
