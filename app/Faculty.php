<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    public function showDepartment(){
        return $this->belongsTo('App\Department','department_id','id')->withDefault(['name'   =>  '[Khoa đã bị xóa]']);
    }
    public function showCourse(){
        return $this->hasMany('App\Course');
    }
//    public function show_major(){
//        return $this->hasMany('App\Student');
//    }

}
