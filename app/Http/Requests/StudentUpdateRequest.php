<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentUpdateRequest extends FormRequest
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
            'gender'=>'',
            'identity_number'=>"required|numeric|regex:/[0-9]{12}/|unique:students,identity_number,{$this->user('student')->id}",
            'email'=>"required|email|unique:students,email,{$this->user('student')->id}",
            'birthday'=>'required',
            'phone_number'=>"required|numeric|regex:/(0)[0-9]/|unique:students,phone_number,{$this->user('student')->id}",

            'id_issue_place',

//            'avatar'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address',
        ];
    }
}
