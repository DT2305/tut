<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function showLocation(){
        return $this->hasMany('App\Student');
    }
}
