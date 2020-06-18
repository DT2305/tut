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
        return $this->belongsTo('App\Location','birth_province','id')->withDefault(['name'   =>  '[...]']);
    }
    public function show_birth_district(){
        return $this->belongsTo('App\Location','birth_district','id')->withDefault(['name'   =>  '[...]']);
    }
    public function show_birth_ward(){
        return $this->belongsTo('App\Location','birth_ward','id')->withDefault(['name'   =>  '[...]']);
    }

    public function show_permanent_province(){
        return $this->belongsTo('App\Location','permanent_province','id')->withDefault(['name'   =>  '[...]']);
    }
    public function show_permanent_district(){
        return $this->belongsTo('App\Location','permanent_district','id')->withDefault(['name'   =>  '[...]']);
    }
    public function show_permanent_ward(){
        return $this->belongsTo('App\Location','permanent_ward','id')->withDefault(['name'   =>  '[...]']);
    }
    public function show_id_issue_place(){
        return $this->belongsTo('App\Issued_place','id_issue_place','id')
            ->withDefault(['name'   =>  '...']);
    }
    public function show_nation(){
        return $this->belongsTo('App\Nation','nation','id')->withDefault(['name'   =>  'Không']);
    }
    public function show_religion(){
        return $this->belongsTo('App\Religion','religion','id')->withDefault(['name'   =>  'Không']);
    }

    public function show_major_1(){
        return $this->belongsTo('App\Faculty','major_1','id')->withDefault(['name'   =>  '[...]']);
    }

    public function show_major_2(){
        return $this->belongsTo('App\Faculty','major_2','id')->withDefault(['name'   =>  '[...]']);
    }
    public function show_major_3(){
        return $this->belongsTo('App\Faculty','major_3','id')->withDefault(['name'   =>  '[...]']);
    }
    public function show_subject_combination_1(){
        return $this->belongsTo('App\Subject_combination','subject_combination_1','id')->withDefault(['name'   =>  '[...]']);
    }

    public function show_subject_combination_2(){
        return $this->belongsTo('App\Subject_combination','subject_combination_2','id')->withDefault(['name'   =>  '[...]']);
    }
    public function show_subject_combination_3(){
        return $this->belongsTo('App\Subject_combination','subject_combination_3','id')->withDefault(['name'   =>  '[...]']);
    }
    public function show_admission_form(){
        return $this->belongsTo('App\Admission_form','admission_form','id')->withDefault(['name'   =>  '[Chưa chọn hình thức ứng tuyển]']);
    }


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

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $guarded = [];

    protected $fillable = [
        'name',
        'gender',
        'birthday',
        'email',
        'phone_number',
        'identity_number',
        'id_issue_place',
        'id_number_date',
        'avatar',
        'password',
        'address',
        'birth_province',
        'birth_district',
        'birth_ward',
        'permanent_address',
        'permanent_province',
        'permanent_district',
        'permanent_ward',
        'nation',
        'religion',
        'admission_form',
        'subject_combination_1',
        'subject_combination_2',
        'subject_combination_3',
        'major_1',
        'major_2',
        'major_3',
        'point_img',
        'total_point_1' => 'numeric|min:0|max:30',
        'total_point_2' => 'numeric|min:0|max:30',
        'total_point_3' => 'numeric|min:0|max:30',
        'total_point_HCM' => 'numeric|min:0|max:30',
        'study_point',
        'active_point',
        'description',
        'status',
        'priority',
        'area',
        'is_student',
        'education_level',
    ];


}
