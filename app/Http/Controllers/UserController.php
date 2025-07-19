<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\User;
class UserController extends Controller
{
   function queries(){
      // $result=DB::table('users')->get();
         // $result=DB::table('users')->where('name','usman')->get();
         // $result= DB::table('users')->insert([  
         //    'name'=>'irfan',
         //    'email'=>'mirza@gmail.com',
         //      'batch'=>'mirza@gmail.com',
         //       'password'=>'mirza@gmail.com',
         //       ]);
         // if($result){
         //    return "Data Inserted Successfully";
         // }
         // else{
         //    return "Data Not Inserted";
         // }
      // return view('users',['users'=>$result]);
      //  $result=DB::table('users')->where('name','irfan')->update
      //  (['name'=>'usman2']);
      //  if($result){
      //     return "Data Updated Successfully";
      //  }
      //  else{
      //     return "Data Not Updated";
      //  }


      $result=DB::table('users')->where('name','ahemd')->delete();
      
       if($result){
          return "Data deleted Successfully";
       }
       else{
          return "Data Not deleted";
       }

     



       // $result=User::get();
         // $result=User::where('name','usman')->get();
         // $result= User::insert([  
         //    'name'=>'irfan',
         //    'email'=>'mirza@gmail.com',
         //      'batch'=>'mirza@gmail.com',
         //       'password'=>'mirza@gmail.com',
         //       ]);
         // if($result){
         //    return "Data Inserted Successfully";
         // }
         // else{
         //    return "Data Not Inserted";
         // }
      // return view('users',['users'=>$result]);
      //  $result=User::where('name','irfan')->update
      //  (['name'=>'usman2']);
      //  if($result){
      //     return "Data Updated Successfully";
      //  }
      //  else{
      //     return "Data Not Updated";
      //  }


      // $result=User::where('name','ahemd')->delete();
      
      //  if($result){
      //     return "Data deleted Successfully";
      //  }
      //  else{
      //     return "Data Not deleted";
      //  }

   }

   // function users(){
   //    $user= DB::Select("SELECT * FROM users");
   //    return view('users',["users"=>$user]);
   // }

    //
   //  function getuser($name){
     
   //     return view('getuser',["name"=>$name]);
   //  }

   //  function adminlogin(){
     
   //      return view('admin.login');
   //   }



     function login(Request $req){
       // for flash message it retain untill we refresh the page
         $req->session()->flash('message','Added Successfully');
       // putting data in session
        $req->session()->put('user',$req->user);
         return redirect('profile');
       }

       function logout(){
         session()->pull('user');
         return redirect('login');
       }

       
}
