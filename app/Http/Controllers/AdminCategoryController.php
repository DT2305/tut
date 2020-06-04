<?php

namespace App\Http\Controllers;

use App\Category;
use App\Course;
use App\Http\Requests\AdminCategoryStoreRequest;
use App\Http\Requests\AdminCategoryUpdateRequest;
use App\Http\Requests\AdminManagerUpdateRequest;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{

    public function index()
    {
        $cat = Category::all();
        return view('admin.pages.categories.list',compact('cat'));
    }

    public function create()
    {
        return view('admin.pages.categories.create');
    }

    public function store(AdminCategoryStoreRequest $request)
    {
        $cat = Category::create($request->all());
        return redirect()->route('admin.categories.index');
    }

    public function show(Category $category,$id)
    {
        $cat = Category::find($id);
        return view('admin.pages.categories.show',compact('cat'));
    }

    public function edit($id)
    {
        $cat = Category::findOrFail($id);
        return view('admin.pages.categories.edit',compact('cat'));
    }

    public function update(AdminCategoryUpdateRequest $request,$id)
    {
        $cat = Category::findOrFail($id);
        $cat->update($request->all());
        return redirect()->route('admin.categories.show',$cat);
    }

    public function destroy($id)
    {
        $cat = Category::find($id);
        $cat->delete();
        return redirect()->route('admin.categories.index');
    }
}
