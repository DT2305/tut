<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminManagerStoreRequest extends FormRequest
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
            'username'=>'required',
            'password'=>'required|confirmed',
            'email'=>'',
            'level'=>'required',
            'phone_number'=>'required',
            'avatar'=>'',
            'full_name'=>'',
            'position'=>'',
            'description'=>'',
            'status'=>'',
        ];
    }
}
