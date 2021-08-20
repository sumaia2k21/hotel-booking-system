<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;
use App\Models\Book;
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
    //   dd($profile_create->all());

    Guest::create([
        'Fullname'=>$profile_create->Fullname,
        'email'=>$profile_create->email,
        'Phonenumber'=>$profile_create->Phonenumber,
        'password'=>$profile_create->password,
        'repeatpassword'=>$profile_create->repeatpassword

    ]);
    return redirect()->back();
   
    }

    
   
  // public function booking()
  // {
  //     return view('customer.backend.layouts.book');
  // }
  // public function bookedlist()
  // {
  //   return view('customer.backend.layouts.bookedlist');
  // }

  public function booking_list(Request $booking_list)
  {
    //   dd($booking_list->all());
    Book::create([
        'room_type'=>$booking_list->room_type,
        'room_number'=>$booking_list->room_number,
        'person_number'=>$booking_list->person_number,
        'child_number'=>$booking_list->child_number,
        'res_facilities'=>$booking_list->res_facilities


    ]);
    return redirect()->back();
  }

  public function test()
  {
      return view('customer.backend.layouts.master');
    }

    public function bookingtest()
  {
      return view('customer.backend.layouts.bookingtest');
    }
  
    // check availability
    // public function checkavailability()
    // {
    //     return view('backend.partials.checkavailability');
    // }

}
