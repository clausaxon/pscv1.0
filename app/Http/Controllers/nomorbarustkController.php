<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stk;
use Carbon\Carbon;
use DB;


class nomorbarustkController extends Controller
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
        return view('nomorbarustk');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->addSection();
        $this->validate($request, [
            'nama_pengirim'     => 'required',
            'fungsi_jabatan'     => 'required',
            'jenis'   => 'required',
            'perihal' => 'required',
            'judul_stk' => 'required'
        ]);
        stk::create($request->all());
        $date = Carbon::now();
        $taun = $date->year;
        $nomor = DB::table('stks')
        
        ->where('perihal' ,'=', $request->get('perihal'))->first();

        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $phpWord->setDefaultFontSize(20);
        $section = $phpWord->addSection();
        $writing = $section->addTextRun(array('size'=> 20));

        $noid = str_pad($nomor->id, 3, "0", STR_PAD_LEFT);
        $writing->addText('Nomor : ');
        $writing->addText($nomor->jenis);
        $writing->addText('-');
        $writing->addText($noid);
        $writing->addText('/PSC');
        $writing->addText('/');
        $writing->addText($taun);
        $writing->addText('-S0');



        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save('SuratSTK_'.$noid.'.docx');
        return response()->download(public_path('SuratSTK_'.$noid.'.docx'));
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
