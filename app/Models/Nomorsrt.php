<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nomorsrt extends Model
{
    public $fillable = ['name', 'email', 'phone_number', 'dob'];
}
