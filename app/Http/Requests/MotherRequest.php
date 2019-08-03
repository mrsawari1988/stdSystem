<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MotherRequest extends FormRequest
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
            'sh_shenasname' => 'required',
            'birth_date' => 'required',
            'birth_place' => 'required',
            'birth_issued' => 'required',
            'serial_shenasname' => 'required|digits:6',
            'horoof_shenasname'=> 'required',
            'sh_seri_shenasname' => 'required',
            'father_name' => 'required',
            'phone' => 'required|digits:11',
            'job' => 'required' ,
            'code_melli' => 'required|digits:10' ,
            'first_name' => 'required',
            'last_name' => 'required'
        ];
    }
}
