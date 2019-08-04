<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminStudentRegisterRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function create()
    {
        return view('admin.student.create');
    }

    public function store(AdminStudentRegisterRequest $adminStudentRegisterRequest)
    {
        $data = [
            'name' => request()->input('name'),
            'family' => request()->input('family') ,
            'code_melli' => request()->input('code_melli') ,
            'password' => request()->input('code_melli') ,
            'username' => request()->input('code_melli'),
            'phone' => request()->input('phone'),
            'field' => request()->input('field') ,
            'grade' =>request()->input('grade')
        ];

        $user = User::create($data);

        if($user instanceof User){
            return 'Well Done' ;
        }
        return 'sowmthin went wrong';
    }
}
