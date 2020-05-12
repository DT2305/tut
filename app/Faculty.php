<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    public function showDepartment(){
        return $this->belongsTo('App\Department','department_id','id');
    }
    public function showCourse(){
        return $this->hasMany('App\Course');
    }
}
