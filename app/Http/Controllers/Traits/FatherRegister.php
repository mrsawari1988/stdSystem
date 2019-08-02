<?php
/**
 * Created by PhpStorm.
 * User: Qader Sawari
 * Date: 01/08/2019
 * Time: 01:00 AM
 */

namespace App\Http\Controllers\Traits;


use Illuminate\Support\Facades\Gate;

trait FatherRegister
{

    public function fatherRegister()
    {
        $user = auth()->user();
        $status = 1;
        if(Gate::allows('register_status' ,$status)){
            return view('student.register.father' , compact('user'));
        }
        return redirect()->route('mother.register');
    }

    public function fatherStore()
    {

    }

    public function fatherEdit()
    {

    }

    public function fatherUpdate()
    {

    }

}