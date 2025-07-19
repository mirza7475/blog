<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class EmailController extends Controller
{
    //
    function sendEmail(Request $request){
        $to=$request->email;
        $subject=$request->subject;
        $mailMessage=$request->message;
        Mail::to($to)->send(new WelcomeEmail($subject, $mailMessage));
        return "Message Sent Successfully";

    }
}
