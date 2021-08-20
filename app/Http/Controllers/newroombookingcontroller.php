<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newroombookingcontroller extends Controller
{
    // newbooking
    public function newbooking()
    {
        return view('customer.backend.layouts.newbooking');
    }
}
