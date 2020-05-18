<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject_combination extends Model
{
    public function show_Subject_combination_1(){
        return $this->belongsTo('App\Subject_combination','subject_combination_1','id')->withDefault(['name'   =>  '[Không có tổ hợp]']);
    }
    public function show_Subject_combination_2(){
        return $this->belongsTo('App\Subject_combination','subject_combination_2','id')->withDefault(['name'   =>  '[Không có tổ hợp]']);
    }
    public function show_Subject_combinatio_3(){
        return $this->belongsTo('App\Subject_combination','subject_combination_3','id')->withDefault(['name'   =>  '[Không có tổ hợp]']);
    }
}
