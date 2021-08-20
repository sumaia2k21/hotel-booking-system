<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class facilitiescontroller extends Controller
{
    public function addfacilities()
    {
        return view('admin.backend.layouts.add_facilities');
    }
}
