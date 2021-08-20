<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class enquirycontroller extends Controller
{
    public function enquirylist()
    {
        return view('admin.backend.layouts.enquirylist');
    }
    public function enquiry_list(Request $enquiry_list)
    {
        dd($enquiry_list->all);
    }
}
