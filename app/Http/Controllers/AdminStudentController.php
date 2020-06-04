<?php

namespace App\Http\Controllers;

use App\Course;
use App\Department;
use App\Education_level;
use App\Education_type;
use App\Faculty;
use App\Http\Requests\AdminStudentStoreRequest;
use App\Http\Requests\AdminStudentUpdateRequest;
use App\Issued_place;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminStudentController extends Controller
{
    public function index(){
        $std = cache()->remember('remember_student',60*60*24,function (){
            return Student::all();
        });

        return view('admin.pages.students.list',compact('std'));
    }

    public function  create(){
        $isd = Issued_place::pluck('name','id');
        $fal = Faculty::pluck('name','id');
        $dep = Department::pluck('name','id');
        $cor = Course::pluck('name','id');

        $religions = DB::table('religions')->pluck('name','id');
        $nations = DB::table('nations')->pluck('name','id');

        $edu_type = Education_type::pluck('name');
        $edu_level = Education_level::pluck('name');
        $maxStuCode = Student::max('student_code');

        return view('admin.pages.students.create',compact('isd','fal','dep','cor','maxStuCode','edu_type','edu_level','religions','nations'));
    }

    public function store(AdminStudentStoreRequest $request){
        $std = Student::create($request->all());
        $std['password'] = bcrypt($request['password']);
        $std -> save();
        return redirect()->route('admin.students.index');
    }

    public function show($id){
        $std = Student::findOrFail($id);
        return view('admin.pages.students.show',compact('std'));
    }

    public function  edit($id){
        $isd = Issued_place::pluck('name','id');
        $fal = Faculty::pluck('name','id');
        $dep = Department::pluck('name','id');
        $cor = Course::pluck('name','id');

        $religions = DB::table('religions')->pluck('name','id');
        $nations = DB::table('nations')->pluck('name','id');

        $edu_type = Education_type::pluck('name','id');
        $edu_level = Education_level::pluck('name','id');
        $maxStuCode = Student::max('student_code');
        $std = Student::findOrFail($id);
        return view('admin.pages.students.edit',compact('std','isd','fal','dep','cor','maxStuCode','edu_type','edu_level','religions','nations'));
    }

    public function update(AdminStudentUpdateRequest $request, $id){
        $std = Student::find($id);
        $std->update($request->validated());
        return redirect()->route('admin.students.show',$id);

    }
    public function destroy($id)
    {
        $std = Student::find($id);
        $std->delete();
        return redirect()->route('admin.students.index');
    }
}
