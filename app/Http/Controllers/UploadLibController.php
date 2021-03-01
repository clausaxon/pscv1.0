<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lib;

class UploadLibController extends Controller
{
    public function uploadForm(){
		$libs = lib::get();
		return view('/lib',['libs' => $libs]);
    }

    public function uploadFile(Request $request){
        $this->validate($request, [
			'file' => 'required',
		]);
        $file = $request->file('file');
        $destinationPath = 'uploads';
        $nama_file = $file->getClientOriginalName();
        $file->move($destinationPath,$nama_file);
        lib::create([
			'namafile' => $nama_file,
		]);
        return redirect()->back();
    }
    public function hapus($id){
        $libs = lib::find($id);
        $libs->delete();
        return redirect('/lib');
    }

    public function download($id){
        $libs = lib::where('id', $id)->firstOrFail();
        $pathToFile = public_path('uploads/' . $libs->namafile);
        return response()->download($pathToFile);
    }
}

