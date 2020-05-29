<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeUserCreateRequest extends FormRequest
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
            'identity_number' => 'required|numeric|unique:users,identity_number|regex:/[0-9]{12}/',
            'id_issue_place' => '',
            'email' => 'required|email|unique:users,email',
            'birthday' => 'required',
            'phone_number' => 'required|numeric|unique:users,phone_number|regex:/(0)[0-9]{9}/',
            'password' => 'required|confirmed',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address' => '',
            'subject_combination_1' => '',
            'subject_combination_2'=> '',
            'subject_combination_3'=> '',
            'major_1'=> '',
            'major_2'=> '',
            'major_3'=> '',
            'point_img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'total_point_1'=> '',
            'total_point_2'=> '',
            'total_point_3'=> '',
            '',
            'priority',
            'area',
        ];
    }

}
