<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class roomcontroller extends Controller
{
    public function addroom()
    {
        return view('admin.backend.layouts.add_room');
    }
}
