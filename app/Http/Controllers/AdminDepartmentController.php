<?php

namespace App\Http\Controllers;

use App\Department;
use App\Http\Requests\AdminDepartmentStoreRequest;
use App\Http\Requests\AdminDepartmentUpdateRequest;
use Illuminate\Http\Request;

class AdminDepartmentController extends Controller
{

    public function index()
    {
        $dep = Department::all();
        return view('admin.pages.departments.list',compact('dep'));
    }

    public function create()
    {
        return view('admin.pages.departments.create');
    }

    public function store(AdminDepartmentStoreRequest $request)
    {
        $dep = Department::create($request->validated());
        return redirect()->route('admin.departments.index');
    }

    public function show($id)
    {
        $dep = Department::findOrFail($id);
        return view('admin.pages.departments.show',compact('dep'));
    }

    public function edit($id)
    {
        $dep = Department::findOrFail($id);
        return view('admin.pages.departments.edit',compact('dep'));
    }

    public function update(AdminDepartmentUpdateRequest $request, $id)
    {
        $dep = Department::findOrFail($id);
        $dep->update($request->all());
        return redirect()->route('admin.departments.show',$id);
    }

    public function destroy($id)
    {
        $dep = Department::find($id);
        $dep->delete();
        return redirect()->route('admin.departments.index');
    }
}
