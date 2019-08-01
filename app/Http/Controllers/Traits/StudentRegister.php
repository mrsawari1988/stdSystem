<?php
/**
 * Created by PhpStorm.
 * User: Qader Sawari
 * Date: 01/08/2019
 * Time: 12:59 AM
 */

namespace App\Http\Controllers\Traits;


use Illuminate\Http\Request;

trait StudentRegister
{
    public function studentRegister()
    {
        return view('student.register.student');
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