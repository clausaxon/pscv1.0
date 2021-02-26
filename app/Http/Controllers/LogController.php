<?php

namespace App\Http\Controllers;

use App\Models\suratKeluar;
use App\Models\daftarstk;
use App\Models\stk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LogController extends Controller
{
    //

    public function index(){
        $logs = $surat_keluars = suratKeluar::latest()->paginate(10);
        return view('log', compact('logs'));

        $logs2 = $daftarstks = daftarstk::latest()->paginate(10);
        return view('daftarstk', compact('logs2'));

        $logs3 = $stks = stk::latest()->paginate(10);
        return view('stk', compact('logs3'));


    }
}
