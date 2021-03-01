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
        $logs2 = $stks = stk::latest()->paginate(10);
        $logs3 = $daftarstks = daftarstk::latest()->paginate(10);
        return view('log', compact('logs', 'logs2', 'logs3'));

    }

    public function downloadsk($id){
        $surat_keluars = suratKeluar::where('id', $id)->firstOrFail();
        $noid = str_pad($surat_keluars->id, 3, "0", STR_PAD_LEFT);
        $pathToFile = public_path('SuratKeluar_'.$noid.'.docx');
        return response()->download($pathToFile);

    }

    public function downloadstk($id){
        $stks = stk::where('id', $id)->firstOrFail();
        $noid = str_pad($stks->id, 3, "0", STR_PAD_LEFT);
        $pathToFile = public_path('SuratSTK_'.$noid.'.docx');
        return response()->download($pathToFile);
    }
}
