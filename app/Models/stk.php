<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stk extends Model
{
    use HasFactory;
    use HasFactory;

    protected $fillable = [
        'nama_pengirim', 'fungsi_jabatan','jenis','perihal' , 'judul_stk'
    ];
}
