<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function redirect()
    {

        if(auth()->user()->role == 'student')
        {
           return redirect('/student/panel');
        }
        return redirect('/admin/students');
    }
    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }
}
