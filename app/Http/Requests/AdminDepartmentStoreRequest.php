<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminDepartmentStoreRequest extends FormRequest
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
            'department_code'=>'required|unique:departments,department_code',
            'description'=>'',
        ];
    }
    public function attributes()
    {
        return [
            'department_code'=>'Mã khoa'
        ];
    }
}
