<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUserCreateRequest extends FormRequest
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
//            'identity_number' => 'required|numeric|unique:users,identity_number|regex:/[0-9]{12}/',
            'identity_number' => 'required|numeric|unique:users,identity_number',
            'id_issue_place' => '',
            'id_number_date' => '',
            'email' => 'unique:users,email',
            'birthday' => 'required',
//            'phone_number' => 'numeric|unique:users,phone_number|regex:/(0)[0-9]{9}/',
            'phone_number' => 'numeric|unique:users,phone_number',
            'password' => 'required|confirmed',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            'address' => '',
            'birth_province'=>'',
            'birth_district'=>'',
            'birth_ward'=>'',

            'permanent_address'=>'',

            'permanent_province'=>'',
            'permanent_district'=>'',
            'permanent_ward'=>'',

            'nation'=>'',
            'religion'=>'',

            'admission_form' => '',

            'subject_combination_1' => '',
            'subject_combination_2' => '',
            'subject_combination_3' => '',
            'major_1' => '',
            'major_2' => '',
            'major_3' => '',
//            'point_img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'point_img' => '',
            'total_point_1' => 'numeric|min:0|max:30',
            'total_point_2' => 'numeric|min:0|max:30',
            'total_point_3' => 'numeric|min:0|max:30',
            'total_point_HCM' => 'numeric|min:0|max:30',
            'study_point' => '',
            'active_point' => '',

            'description' => '',
            'status' => '',

            'priority'=> '',
            'area'=> '',
        ];
    }

    public function attributes()
    {
        return [
            'total_point_1'=>'Điểm tổng',
            'total_point_2'=>'Điểm tổng',
            'total_point_3'=>'Điểm tổng',
            'total_point_HCM'=>'Điểm tổng',
            'point_img'=>'Ảnh chụp bảng điểm',


        ];
    }
}
