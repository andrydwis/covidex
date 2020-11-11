<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function dashboard()
    {
        return view('client.dashboard');
    }

    public function global()
    {
        return view('client.global');
    }

    public function local()
    {
        return view('client.local');
    }
}
