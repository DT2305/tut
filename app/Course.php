<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];
    public function show_faculty(){
        return $this->belongsTo('App\Faculty','faculty_id','id')->withDefault(['name'   =>  '[Ngành đã bị xóa]']);
    }
}
