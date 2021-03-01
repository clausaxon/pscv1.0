<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\jenisSurat;
use App\Models\suratKeluar;
use Illuminate\Http\Request;
use DB;

class suratkeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('suratkeluar');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        function numberToRoman($number) {
            $map = array('X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
            $returnValue = '';
            while ($number > 0) {
                foreach ($map as $roman => $int) {
                    if($number >= $int) {
                        $number -= $int;
                        $returnValue .= $roman;
                        break;
                    }
                }
            }
            return $returnValue;
        }
        $this->validate($request, [
            'nama_pengirim'     => 'required',
            'fungsi_jabatan'     => 'required',
            'jenis'   => 'required',
            'perihal' => 'required'
        ]);
        
        suratkeluar::create($request->all());
        $date = Carbon::now();
        $bulan = numberToRoman($date ->month);
        $taun = $date->year;
        $nomor = DB::table('surat_keluars')
        
        ->where('perihal' ,'=', $request->get('perihal'))->first();

        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $phpWord->setDefaultFontSize(20);
        $section = $phpWord->addSection();
        $writing = $section->addTextRun(array('size'=> 20));

        $noid = str_pad($nomor->id, 3, "0", STR_PAD_LEFT);
        $writing->addText('Nomor : ');
        $writing->addText($noid);
        $writing->addText('/');
        $writing->addText($request->get('jenis'));
        $writing->addText('/');
        $writing->addText($bulan);
        $writing->addText('/');
        $writing->addText($taun);
        $writing->addText('-S0');



        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save('SuratKeluar_'.$noid.'.docx');
        return response()->download(public_path('SuratKeluar_'.$noid.'.docx'));
        

            //redirect dengan pesan sukses
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
