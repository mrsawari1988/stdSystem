<?php
/**
 * Created by PhpStorm.
 * User: Qader Sawari
 * Date: 01/08/2019
 * Time: 01:01 AM
 */

namespace App\Http\Controllers\Traits;


use Illuminate\Support\Facades\Gate;

trait AddressRegister
{
    public function addressRegister()
    {
        $user = auth()->user();
        $status = 3;
        if(Gate::allows('register_status' ,$status)){
            return view('student.register.address' , compact('user'));
        }
        return redirect()->route('student.panel');
    }

    public function addressStore()
    {

    }

    public function addressEdit()
    {

    }

    public function addressUpdate()
    {

    }
}