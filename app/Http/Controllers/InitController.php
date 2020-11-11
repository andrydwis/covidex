<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InitController extends Controller
{
    //
    public function main()
    {
        return view('init.main');
    }

    public function profile()
    {
        return view('init.profile');
    }
    
    public function setting()
    {
        return view('init.setting');
    }

    public function editProfile()
    {
        return view('init.editProfile');
    }

    public function editPassword()
    {
        return view('init.editPassword');
    }
}
