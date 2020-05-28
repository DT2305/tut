<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education_type extends Model
{
    public function show_Education_types(){
        return $this->hasMany('App\Student');
    }
}
