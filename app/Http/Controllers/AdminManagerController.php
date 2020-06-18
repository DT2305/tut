<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminManagerStoreRequest;
use App\Http\Requests\AdminManagerUpdateRequest;
use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\DB;


class AdminManagerController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin3')->except('index');
    }
    public function index()
    {
        $check = admin::all();
        return view('admin.pages.admin-managers.list', compact('check'));
    }

    public function create()
    {
        return view('admin.pages.admin-managers.create');
    }

    public function store(AdminManagerStoreRequest $request)
    {
        $adm = Admin::create($request->all());
        $adm['password'] = bcrypt($request['password']);
        $adm->save();
        return view('admin.pages.admin-managers.show', compact('adm'))->with('success', 'Thêm Quản trị viên thành công');
    }

    public function show($id)
    {
        $adm = Admin::find($id);
        return view('admin.pages.admin-managers.show', compact('adm'));

    }

    public function edit($id)
    {
        $adm = Admin::findOrFail($id);
        return view('admin.pages.admin-managers.edit', compact('adm'));
    }

    public function update(AdminManagerUpdateRequest $request, $id)
    {
        $adm = Admin::find($id);
        if ($request['password'] != null) {
            $adm->update($request->except('password'));
            $adm['password'] = bcrypt($request['password']);
            $adm->save();
        } else {
            $adm->update($request->except('password'));
        }
        return redirect()->route('admin.managers.show', $id)->with('success', 'Cập nhật Quản trị viên thành công');
    }

    public function destroy($id)
    {
        $adm = Admin::find($id);
        $adm->delete();
        return redirect()->route('admin.managers.index')->with('danger', 'Xóa Quản trị viên thành công');
    }
}
