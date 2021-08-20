<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mastercontroller extends Controller
{
    public function master()
    {
        
        return view('admin.master');
    }
    public function home()
    {
        
        return view('admin.backend.layouts.home');
    }
    

   
}
