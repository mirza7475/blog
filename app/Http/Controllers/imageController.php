<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\image;
class imageController extends Controller
{
    //

    function uploadImage(Request $request){
        
        $image=$request->file('image')->store('upload', 'public');
        $imageModel=new image();
        $imageModel->path=$image;
        if ($imageModel->save()){
            return redirect  ('displayimage');
        }else{
            return "Image not uploaded";
        }
       


    }
    function displayImage(){
        $image=image::all();
        return view('displayimage',['image'=>$image]);
    }
}
