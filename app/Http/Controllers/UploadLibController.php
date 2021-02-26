<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadLibController extends Controller
{
    public function uploadForm(){
        return view('/lib');
    }

    public function uploadFile(Request $request){
        $request->file->store('public');
        return "File has been uploaded succesfully";
    }
}
