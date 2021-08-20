<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contact_uscontroller extends Controller
{
    public function contactus()
    {
        return view('customer.backend.layouts.contact_us');
    }
}
