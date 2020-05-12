<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class HomeUserEditRequest extends FormRequest
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
//            'name'=>'required',
            'gender'=>'required',
            'identify_number'=>"required|numeric|regex:/[0-9]{12}/|unique:users,identify_number,{$this->user()->id}",
            'email'=>"required|email|unique:users,email,{$this->user()->id}",
            'birthday'=>'required',
//            'phone_number'=>"required|numeric|regex:/(0)[0-9]/|unique:users,phone_number,{$this->user()->id}",

            'avatar'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address',
            'major_1',
            'major_2',
            'major_3',
            'point_img'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'subject_combination_1',
            'subject_combination_2',
            'subject_combination_3',
            'point_1',
            'point_2',
            'point_3',
            'priority',
            'area',
        ];
    }
    public function attributes()
    {
        return [
            'point_img'=>'Ảnh chụp bảng điểm',

        ];
    }
}
