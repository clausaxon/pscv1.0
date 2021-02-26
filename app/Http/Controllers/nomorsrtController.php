<?php

namespace App\Http\Controllers;

use App\Models\suratKeluar;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use \PDF;

class nomorsrtController extends Controller
{
    public function index(){
        $logs = $surat_keluars = suratKeluar::latest();
        return view('nomorsrt', compact('logs'));
    }
  
      // Generate PDF
      public function createPDF() {
        // retreive all records from db
        $data = suratkeluar::all();
  
        // share data to view
        view()->share('nomorsrt',$data);
        $pdf = PDF::loadView('nomorsrt', $data);
  
        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
      }
}
