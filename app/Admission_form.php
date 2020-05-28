<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admission_form extends Model
{
    public function showAdmissionForm(){
        return $this->hasMany('App\User');
    }
}
