<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'birth_date'=> 'required',
            'birth_place' => 'required',
            'birth_issued' => 'required',
            'serial_shenasname' => 'required|digits:6',
            'horoof_shenasname' => 'required',
            'sh_seri_shenasname' => 'required',
            'father_name' =>'required',
            'phone' => 'required|digits:11'
        ];
    }
}
