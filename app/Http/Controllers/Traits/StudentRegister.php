<?php
/**
 * Created by PhpStorm.
 * User: Qader Sawari
 * Date: 01/08/2019
 * Time: 12:59 AM
 */

namespace App\Http\Controllers\Traits;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use function Sodium\compare;

trait StudentRegister
{
    public function studentRegister()
    {
        $user = auth()->user();
        $status = 0;

        /*
        in this gate we pass to values : user and status
        the gate checks if the user->register_status is equal to this level
        if the answer is false the next level of the register starts

        */
        if(Gate::allows('register_status' ,$status)){
            return view('student.register.student' , compact('user'));
        }
        return redirect()->route('father.register');

    }

    public function studentStore(Request $request)
    {
        return $request->all();
    }

    public function studentEdit()
    {

    }

    public function studentUpdate()
    {

    }

}