<?php


use App\Http\Controllers\admincontroller; 

use App\Http\Controllers\addroomcontroller;
use App\Http\Controllers\roomindexController;
use App\Http\Controllers\indexcontroller;
use App\Http\Controllers\bookingtestcontroller;
use App\Http\Controllers\contact_uscontroller;
use App\Http\Controllers\enquirycontroller;
use App\Http\Controllers\facilitiescontroller;
use App\Http\Controllers\mastercontroller;
use App\Http\Controllers\newroombookingcontroller;
use App\Http\Controllers\roomcatagorycontroller;
use App\Http\Controllers\roomcontroller;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// index start
Route::get('/',[indexcontroller::class,'main']);
Route::get('/login',[indexcontroller::class,'login']);
Route::get('/profilecreate',[indexcontroller::class,'profilecreate']);
Route::post('/profile_create',[indexcontroller::class,'profile_create'])->name('profile_create');
// Route::get('/checkavailability',[indexcontroller::class,'checkavailability'])->name('availability');


// index end

// booklist start
Route::get('/booking',[bookingtestcontroller::class,'booking'])->name('book');
Route::get('/bookedlist',[bookingtestcontroller::class,'bookedlist'])->name('bookedlist');
Route::post('/booking_list',[indexcontroller::class,'booking_list'])->name('booking_list');
// booklist end








// dashboard start
Route::get('/test',[indexcontroller::class,'test'])->name('test');
// dashboard end

// add_room_form
Route::get('/addroom',[addroomcontroller::class,'addroom'])->name('addroom');
// end_room_form

// rooms start
Route::get('/room',[roomindexController ::class,'room'])->name('room');
    // room status
    Route::get('/roomstatus',[roomindexController ::class,'roomstatus'])->name('roomstatus');





//adminmaster rout -> admin panel


Route::get('/admin',[admincontroller::class,'Admin'])->name('admin');






// contact us end

//contact_us/enquirylist table
Route::get('/enquirylist',[enquirycontroller ::class,'enquirylist'])->name('enquirylist');
Route::post('/enquiry_list',[enquirycontroller ::class,'enquiry_list'])->name('enquiry_list');

// enquirylist table

// new booking
Route::get('/newbooking',[newroombookingcontroller ::class,'newbooking'])->name('newbooking');
// new booking end




// master templeting work
// root
Route::get('/master',[mastercontroller ::class,'master'])->name('master');

//homepage
Route::get('/home',[mastercontroller ::class,'home'])->name('home');
// contact us
Route::get('/contact',[mastercontroller ::class,'contact_us'])->name('contact_us');


// Room catagory form start
Route::get('/roomcatagory',[roomcatagorycontroller::class,'roomcatagory'])->name('roomcatagory');
// Room catagory form end

// Add facilities start
Route::get('/addfacilities',[facilitiescontroller::class,'addfacilities'])->name('addfacilities');
// Add facilities start end

// Add newroom add start
Route::get('/add_room',[roomcontroller::class,'addroom'])->name('addroom');

//  start end

//new booking
Route::get('/new_booking',[mastercontroller ::class,'new_booking'])->name('new_booking');





