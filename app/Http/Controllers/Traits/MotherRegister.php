<?php
/**
 * Created by PhpStorm.
 * User: Qader Sawari
 * Date: 01/08/2019
 * Time: 01:01 AM
 */

namespace App\Http\Controllers\Traits;


use Illuminate\Support\Facades\Gate;

trait MotherRegister
{

    public function motherRegister()
    {
        $user = auth()->user();
        $status = 2;
        if(Gate::allows('register_status' ,$status)){
            return view('student.register.mother' , compact('user'));
        }
        return redirect()->route('address.register');
    }

    public function motherStore()
    {

    }

    public function motherEdit()
    {

    }

    public function motherUpdate()
    {

    }

}