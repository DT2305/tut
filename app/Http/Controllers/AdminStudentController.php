<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class AdminStudentController extends Controller
{
    public function getList(){
        $std = Student::all();
        return view('admin.pages.students.list',compact('std'));
    }

    public function  getCreate(){

        return view('admin.pages.students.create');
    }

    public function postCreate(){

    }
}
