<?php
/**
 * Created by PhpStorm.
 * User: Qader Sawari
 * Date: 01/08/2019
 * Time: 01:01 AM
 */

namespace App\Http\Controllers\Traits;


use App\Http\Requests\MotherRequest;
use App\Mother;
use App\User;
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

    public function motherStore(MotherRequest $motherRequest)
    {
        $mother = auth()->user()->mother()->create(request()->all());

        if($mother instanceof Mother) {
            //changing the register status of the user to not complete student information again and go to next step
            $user = User::find(auth()->user()->id);
            $user->register_status = 3;
            $user->save();

            //returning the user back so , due to his register status , he will be redirected to proper level of register
            return back();
        }
        return 'wrong !!!!!';

    }

    public function motherEdit()
    {

    }

    public function motherUpdate()
    {

    }

}