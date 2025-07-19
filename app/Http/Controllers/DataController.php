<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class DataController extends Controller
{
    //
    function adddata(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|min:2|max:8',
        'email' => 'required|email|max:255',
        'batch' => 'nullable|string|max:255',
    ]);

    if ($validator->fails()) {
        return response()->json($validator->errors(), 422);
    } else {
        $student = new User();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->batch = $request->batch;

        if ($student->save()) {
            return response()->json(['message' => 'Student Added Successfully'], 201);
        } else {
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }
}

    function updatedata(Request $request){
        $student=User::find($request->id);
        $student->name=$request->name;
        $student->email=$request->email;
          $student->batch=$request->batch;
       
        if($student->save()){
            return response()->json(['message' => 'Student Updated Successfully'], 201);

        } else{
            return "Something went wrong";
        }            
        
    }

    function deletedata($id){
        $student=User::find($id);
        if($student){
            $student->delete();
            return response()->json(['message' => 'Student Deleted Successfully'], 200);
        } else {
            return response()->json(['message' => 'Student Not Found'], 404);
        }
    }

    function searchdata($name){
        $student=User::where('name', 'like', '%' . $name . '%')->get();
        if($student->isEmpty()){
            return response()->json(['message' => 'No Student Found'], 404);
        } else {
            return response()->json($student, 200);
        }
    }

}
