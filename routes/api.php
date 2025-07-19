<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserAuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');




Route::get('student',[StudentController::class,'getstudent']);

Route::post('adddata',[DataController::class,'adddata']);
Route::put('updatedata',[DataController::class,'updatedata']);
Route::delete('deletedata/{id}',[DataController::class,'deletedata']);

Route::get('searchdata/{name}',[DataController::class,'searchdata']);

Route::resource('member',MemberController::class);


Route::post('login',[UserAuthController::class,'login']);
Route::post('signup',[UserAuthController::class,'signup']);