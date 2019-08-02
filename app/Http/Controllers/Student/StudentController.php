<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Traits\AddressRegister;
use App\Http\Controllers\Traits\FatherRegister;
use App\Http\Controllers\Traits\MotherRegister;
use App\Http\Controllers\Traits\StudentRegister;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
 use StudentRegister , FatherRegister , MotherRegister ,AddressRegister;

 public function panel()
 {
     $user = auth()->user();
    return view('student.panel', compact('user'));
 }



}
