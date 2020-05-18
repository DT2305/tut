<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Cache;

class Student extends Authenticatable
{
    use Notifiable;
    protected $table    =   'students';
    protected $guard    =   'student';

    public function showCourse(){
        return $this->belongsTo('App\Course','course_id','id')->withDefault(['name'   =>  '[Lớp đã bị xóa]']);
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

    public function show_issued_place(){
        return $this->belongsTo('App\Issued_place','id_issue_place','id');
    }





    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
//    protected $fillable = [
//        'name',
//        'gender',
//        'email',
//        'birthday',
//
//        'identify_number',
//        'id_number_date',
//        'id_issue_place',
//
//        'phone_number',
//        'avatar',
//        'address',
//        'student_code',
//        'password',
//
//        'course_id',
//
//        'start_date',
//        'school_name',
//        'education_type',
//        'education_level',
//
//        'birth_province',
//        'birth_district',
//        'birth_ward',
//
//        'permanent_address',
//        'permanent_province',
//        'permanent_district',
//        'permanent_ward',
//
//        'nation',
//        'religion',
//
//        'parent_number',
//
//        'insurance_number',
//
//        'bank_card',
//        'bank_card',
//
//        'position',
//        'description',
//        'status',
//
//        'remember_token',
//    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
