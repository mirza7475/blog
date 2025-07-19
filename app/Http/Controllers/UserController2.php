<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController2 extends Controller

{
    //
    function getuser(){
    $response=Http::get('https://jsonplaceholder.typicode.com/users');
    return view('userview',['data'=>json_decode($response)]);
}

     function user3(){
        return "Get User 3";
     }

     function login(Request $req){
        return $req;
     }

}


