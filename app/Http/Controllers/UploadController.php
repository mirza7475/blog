<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    function upload(Request $request){

 $path = $request->file('file')->store('upload', 'public');
        $fileNameArray=explode("/",$path);
        $fileName=$fileNameArray[1];
        return view('display',['path'=>$fileName]);
        
    }
}
