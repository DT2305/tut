<?php

namespace App\Http\Controllers;

use App\Department;
use App\Faculty;
use App\Http\Requests\AdminFacultyStoreRequest;
use App\Http\Requests\AdminFacultyUpdateRequest;
use Illuminate\Http\Request;

class AdminFacultyController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin2')->except('index');
    }
    public function index()
    {
        $fal = Faculty::all();
        return view('admin.pages.faculties.list',compact('fal'));
    }

    public function create()
    {
        $dep = Department::pluck('name','id');
        return view('admin.pages.faculties.create',compact('dep'));
    }

    public function store(AdminFacultyStoreRequest $request)
    {
        $fal = Faculty::create($request->validated());
//        return redirect()->route('admin.faculties.index')->with('success', 'Thêm ngành thành công');
        return redirect()->route('admin.faculties.show',$fal)->with('success', 'Thêm ngành thành công');
    }

    public function show($id)
    {
        $fal = Faculty::findOrFail($id);
        return view('admin.pages.faculties.show',compact('fal'));
    }

    public function edit($id)
    {
        $dep = Department::pluck('name','id');
        $fal = Faculty::findOrFail($id);
        return view('admin.pages.faculties.edit',compact('fal','dep'));
    }

    public function update(AdminFacultyUpdateRequest $request, $id)
    {
        $fal = Faculty::findOrFail($id);
        $fal->update($request->all());
        return redirect()->route('admin.faculties.show',$id)->with('success', 'Cập nhật Khoa thành công');
    }

    public function destroy($id)
    {
        $fal = Faculty::find($id);
        $fal->delete();
        return redirect()->route('admin.faculties.index')->with('danger', 'Xóa Khoa thành công');
    }
}
