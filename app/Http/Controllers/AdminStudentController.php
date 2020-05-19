<?php

namespace App\Http\Controllers;

use App\Course;
use App\Department;
use App\Faculty;
use App\Issued_place;
use App\Student;
use Illuminate\Http\Request;

class AdminStudentController extends Controller
{
    public function getList(){
        $std = Student::all();
        return view('admin.pages.students.list',compact('std'));
    }

    public function  getCreate(){
        $isd = Issued_place::pluck('name','id');
        $fal = Faculty::pluck('name','id');
        $dep = Department::pluck('name','id');
        $cor = Course::pluck('name','id');
        return view('admin.pages.students.create',compact('isd','fal','dep','cor'));
    }

    public function postCreate(){

    }
}
