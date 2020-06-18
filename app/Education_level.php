<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education_level extends Model
{
    public function show_education_level(){
        return $this->hasMany('App\Student');
    }
}
