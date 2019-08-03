<?php
/**
 * Created by PhpStorm.
 * User: Qader Sawari
 * Date: 01/08/2019
 * Time: 12:59 AM
 */

namespace App\Http\Controllers\Traits;



use App\Http\Requests\StudentRequest;
use App\Student;
use App\User;
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

    public function studentStore(StudentRequest $studentRequest)
    {

        $data = [
            'code_melli' => auth()->user()->code_melli,
            'birth_date'=> request()->input('birth_date'),
            'birth_place' => request()->input('birth_place'),
            'birth_issued' => request()->input('birth_issued'),
            'serial_shenasname' => request()->input('serial_shenasname'),
            'horoof_shenasname' => request()->input('horoof_shenasname'),
            'sh_seri_shenasname' => request()->input('sh_seri_shenasname'),
            'father_name' => request()->input('horoof_shenasname'),
            'phone'=> request()->input('horoof_shenasname')
        ];
        $student = auth()->user()->student()->create($data);

        if($student instanceof Student) {
            //changing the register status of the user to not complete student information again and go to next step
            $user = User::find(auth()->user()->id);
            $user->register_status = 1;
            $user->save();

            //returning the user back so , due to his register status , he will be redirected to proper level of register
            return back();
        }
        return 'wrong !!!!!';
    }

    public function studentEdit()
    {

    }

    public function studentUpdate()
    {

    }

}