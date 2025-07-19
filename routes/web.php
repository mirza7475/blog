<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController2;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\imageController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\EmailController;

Route::get('/home/{name}', function ($name) {
    return view('home', ['name' => $name]);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('student', [StudentController::class, 'getstudent']);
Route::get('user/{name}', [UserController::class, 'getuser']);
Route::get('admin', [UserController::class, 'adminlogin']);
Route::view('home2', 'home2')->middleware('check1');
Route::view('about2', 'about');

Route::get('queries', [UserController::class, 'queries']);
Route::get('user', [UserController::class, 'users']);
Route::get('user2', [UserController2::class, 'getuser']);
Route::get('user3', [UserController2::class, 'user3']);
Route::view('user3', 'user3');

Route::post('user4', [UserController2::class, 'login']);
Route::view('form', 'user4');

Route::view('login', 'login');
Route::post('login', [UserController::class, 'login']);
Route::view('profile', 'profile');
Route::get('logout', [UserController::class, 'logout']);

Route::view('upload', 'upload');
Route::post('upload', [UploadController::class, 'upload']);

Route::view('add-user', 'add-student');
Route::post('add-user', [StudentController::class, 'add_user']);
Route::get('list', [StudentController::class, 'list']);
Route::get('delete/{id}', [StudentController::class, 'delete']);
Route::get('edit/{id}', [StudentController::class, 'edit']);
Route::put('update/{id}', [StudentController::class, 'update']);
Route::get('search', [StudentController::class, 'search']);
Route::post('deletemultiple', [StudentController::class, 'deletemultiple']);

Route::view('uploadimage', 'uploadimage');
Route::post('uploadimage', [imageController::class, 'uploadImage']);
Route::get('displayimage', [imageController::class, 'displayImage']);

Route::get('seller', [SellerController::class, 'getSeller']);

// Route::get('email', [EmailController::class, 'sendEmail']);

Route::view('send-email', 'send-email');
Route::post('send-email', [EmailController::class, 'sendEmail']);
