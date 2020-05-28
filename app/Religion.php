<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Religion extends Model
{
    public function showReligion(){
        return $this->hasMany('App\Student');
    }
}
