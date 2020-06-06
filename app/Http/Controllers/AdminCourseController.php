<?php

namespace App\Http\Controllers;

use App\Course;
use App\Faculty;
use App\Http\Requests\AdminCourseStoreRequest;
use App\Http\Requests\AdminCourseUpdateRequest;
use Illuminate\Http\Request;

class AdminCourseController extends Controller
{

    public function index()
    {
        $cor = Course::all();
        return view('admin.pages.courses.list',compact('cor'));
    }

    public function create()
    {
        $fal = Faculty::pluck('name','id');
        return view('admin.pages.courses.create',compact('fal'));
    }

    public function store(AdminCourseStoreRequest $request)
    {
        $cor = Course::create($request->validated());
        return redirect()->route('admin.courses.index')->with('success', 'Thêm Lớp thành công');
    }

    public function show($id)
    {
        $cor = Course::findOrFail($id);
        return view('admin.pages.courses.show',compact('cor'));
    }

    public function edit($id)
    {
        $fal = Faculty::pluck('name','id');
        $cor = Course::findOrFail($id);
        return view('admin.pages.courses.edit',compact('fal','cor'));
    }

    public function update(AdminCourseUpdateRequest $request, $id)
    {
        $cor = Course::findOrFail($id);
        $cor->update($request->all());
        return redirect()->route('admin.courses.show',$id)->with('success', 'Cập nhật Lớp thành công');
    }

    public function destroy($id)
    {
        $cor = Course::find($id);
        $cor->delete();
        return redirect()->route('admin.courses.index')->with('danger', 'Xóa Lớp thành công');
    }
}
