<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUserUpdateRequest extends FormRequest
{
    /**
     * @var mixed
     */
    private $user;

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

            'email'=>'required|email|unique:users,email,'.$this->id,
            'phone_number' => "numeric|unique:users,phone_number,{$this->id}",

            'identity_number' => 'required|numeric|regex:/[0-9]{12}/|unique:users,identity_number,'.$this->id,
            'id_issue_place' => '',
            'id_number_date' => '',

            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password'=>'confirmed',

            'address' => '',
            'birth_province' => '',
            'birth_district' => '',
            'birth_ward' => '',

            'permanent_address' => '',
            'permanent_province' => '',
            'permanent_district' => '',
            'permanent_ward' => '',

            'nation' => '',
            'religion' => '',

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

            'priority' => '',
            'area' => '',
        ];
    }

    public function attributes()
    {
        return [
            'total_point_1' => 'Điểm tổng',
            'total_point_2' => 'Điểm tổng',
            'total_point_3' => 'Điểm tổng',
            'total_point_HCM' => 'Điểm tổng',
            'point_img' => 'Ảnh chụp bảng điểm',


        ];
    }
}
