<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeUserRequest extends FormRequest
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
            'name'=>'required',
            'gender'=>'required',
            'identify_number'=>'required|numeric|unique:users,identify_number|regex:/[0-9]{12}/',
            'email'=>'required|email|unique:users,email',
            'birthday'=>'required',
            'phone_number'=>'required|numeric|unique:users,phone_number|regex:/(0)[0-9]{9}/',
            'password'=>'required|confirmed',
            'avatar'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address',
            'major_1',
            'major_2',
            'major_3',
            'point_img'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'point_1',
            'point_2',
            'point_3',
            'priority',
            'area',
        ];
    }
}
