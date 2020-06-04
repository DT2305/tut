<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $guarded = [];

    public function showFaculty(){
        return $this->hasMany('App\Faculty');
    }
}
