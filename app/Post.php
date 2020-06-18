<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];
    public function show_category(){
        return $this->belongsTo('App\Category','category_id','id')->withDefault(['name'   =>  '[Không thuộc thể loại]']);
    }

}
