<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];
    public function show_category(){
        return $this->belongsTo('App\Category','category','id')->withDefault(['name'   =>  '[Chưa chọn thể loại]']);
    }

}
