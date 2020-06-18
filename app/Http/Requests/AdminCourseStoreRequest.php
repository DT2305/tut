<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminCourseStoreRequest extends FormRequest
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
            'course_code'=>'required|unique:courses,course_code',
            'name'=>'required',
            'faculty_id'=>'required',
            'description'=>'',
        ];
    }
    public function attributes()
    {
        return [
            'course_code'=>'Mã lớp'
        ];
    }
}
