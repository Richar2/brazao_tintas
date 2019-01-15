<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomerControllerller extends Controller
{
    public function home()
    {
       return view('templates.home');
    }

    public function dash(){
        return view('components.dashcli');

    }

     
}
