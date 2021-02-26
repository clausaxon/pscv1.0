<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftarstk extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomorsurat', 'jenissurat'
    ];
}
