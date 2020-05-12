<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issued_place extends Model
{
    public function show_issued_place(){
        return $this->hasMany('App\Issued_place');
    }
}
