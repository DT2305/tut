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

    public function show_course(){
        return $this->belongsTo('App\Course','course_id','id')->withDefault(['name'   =>  '[Lớp đã bị xóa]']);
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
        return $this->belongsTo('App\Issued_place','id_issue_place','id')->withDefault(['name'   =>  '[...]']);
    }

    public function show_nation(){
        return $this->belongsTo('App\Nation','nation','id')->withDefault(['name'   =>  'Không']);
    }
    public function show_religion(){
        return $this->belongsTo('App\Religion','religion','id')->withDefault(['name'   =>  'Không']);
    }

    public function show_education_type(){
        return $this->belongsTo('App\Education_type','education_type','id')->withDefault(['name'   =>  '[...]']);
    }
    public function show_education_level(){
        return $this->belongsTo('App\Education_level','education_level','id')->withDefault(['name'   =>  '[...]']);
    }







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
        'id_number_date',
        'id_issue_place',

        'avatar',

        'address',
        'password',

        'student_code',

        'course_id',

        'start_date',
        'school_name',
        'education_type',
        'education_level',

        'birth_province',
        'birth_district',
        'birth_ward',

        'permanent_address',
        'permanent_province',
        'permanent_district',
        'permanent_ward',

        'nation',
        'religion',

        'parent_number',

        'insurance_number',
        'bank_card',
        'bank',
        'position',
        'description',
        'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
