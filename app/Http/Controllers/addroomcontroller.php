<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addroomcontroller extends Controller
{
    public function addroom()
    {
        return view('testing.backend.add_room');
    }

}
