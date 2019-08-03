<?php
/**
 * Created by PhpStorm.
 * User: Qader Sawari
 * Date: 01/08/2019
 * Time: 01:00 AM
 */

namespace App\Http\Controllers\Traits;


use App\Father;
use App\Http\Requests\FatherRequest;
use App\User;
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

    public function fatherStore(FatherRequest $fatherRequest)
    {

        $father = auth()->user()->father()->create(request()->all());

        if($father instanceof Father) {
            //changing the register status of the user to not complete student information again and go to next step
            $user = User::find(auth()->user()->id);
            $user->register_status = 2;
            $user->save();

            //returning the user back so , due to his register status , he will be redirected to proper level of register
            return back();
        }
        return 'wrong !!!!!';

    }

    public function fatherEdit()
    {

    }

    public function fatherUpdate()
    {

    }

}