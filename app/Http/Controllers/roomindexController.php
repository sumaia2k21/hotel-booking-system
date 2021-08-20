<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class roomindexController extends Controller
{
    public function room()
    {
        return view('rooms.roomindex');
    }
    public function roomstatus()
    {
        return view('testing.backend.roomstatus');
    }
}

