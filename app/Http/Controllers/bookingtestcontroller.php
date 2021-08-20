<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class bookingtestcontroller extends Controller
{
    
    public function booking()

    {
       
        return view('customer.backend.layouts.book');
    } 

   
    public function bookedlist()
    {
        
        $booked=Book::all();
        // dd($booked->all());

        // for pagination 
        $booked=Book::paginate(3);
        // end
        return view('customer.backend.layouts.bookedlist',compact('booked'));
    }


    public function booking_list(Request $booking_list)
    {
        dd($booking_list->all());
      Book::create([
          'room_type'=>$booking_list->room_type,
          'room_number'=>$booking_list->room_number,
          'person_number'=>$booking_list->person_number,
          'child_number'=>$booking_list->child_number,
          'res_facilities'=>$booking_list->res_facilities
  
  
      ]);
      return redirect()->back();
    }
}
