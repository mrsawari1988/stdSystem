<?php
/**
 * Created by PhpStorm.
 * User: Qader Sawari
 * Date: 01/08/2019
 * Time: 01:01 AM
 */

namespace App\Http\Controllers\Traits;


use App\Address;
use App\User;
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
        $address = auth()->user()->address()->create(request()->all());

        if($address instanceof Address) {
            //changing the register status of the user to not complete student information again and go to next step
            $user = User::find(auth()->user()->id);
            $user->register_status = 4;
            $user->save();

            //returning the user back so , due to his register status , he will be redirected to proper level of register
            return back();
        }
        return 'wrong !!!!!';

    }

    public function addressEdit()
    {

    }

    public function addressUpdate()
    {

    }
}