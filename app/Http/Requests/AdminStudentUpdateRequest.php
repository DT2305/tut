<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class
AdminStudentUpdateRequest extends FormRequest
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
            'name' => 'required',
            'gender' => 'required',
            'birthday' => 'required',

            'email'=>'required|email|unique:students,email,'.$this->id,
            'phone_number' => "numeric|unique:students,phone_number,{$this->id}",

            'identity_number' => 'required|numeric|regex:/[0-9]{12}/|unique:students,identity_number,'.$this->id,
            'id_number_date'=>'',
            'id_issue_place'=>'',

            'avatar'=>'',

            'address'=>'',
            'password'=>'confirmed',

            'student_code'=>'',

            'course_id'=>'',

            'start_date'=>'',
            'school_name'=>'',
            'education_type'=>'required',
            'education_level'=>'required',

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
    public function attributes()
    {
        return [
            'student_code' => 'Mã số sinh viên',
        ];
    }
}
