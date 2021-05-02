<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    public function send()
    {
            $email="mustafadigilli@gmail.com";
            $array=array(
                "name" =>"Mustafa",
                "surname" =>"Digilli",
                "date" => date("d-m-Y")
            );
            mail::send('email.welcome',$array,function ($message) use($email){
                $message->subject("Hoşgeldin");
                $message->to($email);
            });

        Mail::create(["content"=>"Merhaba Mustafa Sistemimize Hoşgeldin. (ÖÇĞÜ)"]);
    }
}
