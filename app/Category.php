<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];
    public function showPost(){
        return $this->hasMany('App\Post');
    }


}
