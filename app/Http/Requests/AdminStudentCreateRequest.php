<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminStudentCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'',
            'gender'=>'',
            'birthday'=>'',

            'email'=>'',
            'phone_number'=>'',

            'identity_number'=>'',
            'id_number_date'=>'',
            'id_issue_place'=>'',

            'avatar'=>'',

            'address'=>'',
            'password'=>'',

            'student_code'=>'',

            'course_id'=>'',

            'start_date'=>'',
            'school_name'=>'',
            'education_type'=>'',
            'education_level'=>'',

            'birth_province'=>'',
            'birth_district'=>'',
            'birth_ward'=>'',

            'permanent_address'=>'',
            'permanent_province'=>'',
            'permanent_district'=>'',
            'permanent_ward'=>'',

            'nation'=>'',
            'religion'=>'',

            'parent_number'=>'',

            'insurance_number'=>'',
            'bank_card'=>'',
            'bank'=>'',
            'position'=>'',
            'description'=>'',
            'status'=>'',
        ];
    }
}
