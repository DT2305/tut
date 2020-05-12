<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function showFaculty(){
        return $this->hasMany('App\Faculty');
    }
}
