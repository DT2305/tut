<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education_level extends Model
{
    public function show_Education_levels(){
        return $this->hasMany('App\Student');
    }
}
