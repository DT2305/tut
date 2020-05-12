<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    public function showCourse(){
        return $this->belongsTo('App\Course','course_id','id');
    }

    public function show_birth_province(){
        return $this->belongsTo('App\Location','birth_province','id');
    }
    public function show_birth_district(){
        return $this->belongsTo('App\Location','birth_district','id');
    }
    public function show_birth_ward(){
        return $this->belongsTo('App\Location','birth_ward','id');
    }

    public function show_permanent_province(){
        return $this->belongsTo('App\Location','permanent_province','id');
    }
    public function show_permanent_district(){
        return $this->belongsTo('App\Location','permanent_district','id');
    }
    public function show_permanent_ward(){
        return $this->belongsTo('App\Location','permanent_ward','id');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

//    protected $fillable = [
//        'name',
//        'email',
//        'password',
//        'identify_number',
//        'gender',
//        'phone_number',
//        'birthday','avatar',
//        'address',
//        'major_1',
//        'major_2',
//        'major_3',
//        'subject_combination_1',
//        'subject_combination_2',
//        'subject_combination_3',
//        'point_1',
//        'point_2',
//        'point_3',
//        'point_img',
//        'priority',
//        'area',
//    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


}
