<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    //
    // function getstudent(){
    //     $students=\App\Models\Student::all();
    //     return view('students',['data'=>$students]);
    // }

    function add_user(Request $request){
        $student=new Student();
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->save();
        if($student){
            echo "Student Added Successfully";
        } else{
            echo "Something went wrong";
        }
    }

    function list(){
         $students=Student::paginate(2);
        // $students=Student::all();
        return view('list-user',['students'=>$students]);
    }

    function delete($id){
        $student=Student::find($id);
        $student->delete();
        return redirect('list');
    } 
    
    function edit($id){
        $student=Student::find($id);
        return view('edit',['student'=>$student]);
    }
    function update(Request $request,$id){
        $student=Student::find($id);
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->save();
        return redirect('list');
        
    }
    function search(Request $request){
        $search=$request->search;
        $students=Student::where('name','like','%'.$search.'%')->paginate(10);
        return view('list-user',['students'=>$students,'search'=>$search]);
    }

    function deletemultiple(Request $request){
        $ids=$request->ids;
        Student::whereIn('id',$ids)->delete();
        return redirect('list');
    }

    function getstudent(){
        $students=Student::all();
        return $students;
    }

    

}
