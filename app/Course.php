<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];
    public function showFaculty(){
        return $this->belongsTo('App\Faculty','faculty_id','id')->withDefault(['name'   =>  '[Ngành đã bị xóa]']);
    }
}
