<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    

    protected $fillable=['room_type','room_number','person_number','child_number','res_facilities'];
}
