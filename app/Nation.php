<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nation extends Model
{
    public function showNation(){
        return $this->hasMany('App\Student');
    }



}
