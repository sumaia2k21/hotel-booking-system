<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexcontroller extends Controller
{
    public function main()
    {
        return view('index');
    }

    public function login()
    {
        return view('customer.backend.layouts.login');
    }

    public function profilecreate()
    {
        return view('customer.backend.layouts.createprofile');
    }
}
