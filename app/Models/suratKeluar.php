<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suratKeluar extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pengirim', 'fungsi_jabatan','jenis','perihal' 
    ];
}
