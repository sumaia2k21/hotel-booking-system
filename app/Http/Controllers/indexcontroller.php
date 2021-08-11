<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;

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

    public function profile_create(Request $profile_create)
    {
    //    dd($profile_create->all());
    Guest::create([
        'Fullname'=>$profile_create->Fullname,
        'email'=>$profile_create->email,
        'Phonenumber'=>$profile_create->Phonenumber,
        'password'=>$profile_create->password,
        'repeatpassword'=>$profile_create->repeatpassword

    ]);
    }
}
