<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminStudentRegisterRequest extends FormRequest
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
            'code_melli' => 'required|digits:10',
            'phone'=> 'required|digits:11',
            'name' => 'required',
            'family' => 'required',
            'field' => 'required',
            'grade' => 'required'
        ];
    }
}
