<?php

namespace App\Http\Controllers;

use App\Models\email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class emailController extends Controller
{
    public function send()
    {
        $email = "mustafadigilli@gmail.com";
        $array = array(
            "name" => "Mustafa",
            "surname" => "Digilli",
            "date" => date("d-m-Y")
        );
        $allEmail=email::select("content")->get();
        foreach ($allEmail as $mailName) {
            $name=$mailName->content;
            mail::send('mail.welcome', $array, function ($message) use ($name) {
                $message->subject("Hoşgeldin");
                $message->to($name);
            });
        }

        email::create(["content" => strtoupper("Merhaba Mustafa Sistemimize Hoşgeldin. (ÖÇĞÜ)")]);
        echo "Gönderme işlemi başarılı. ÖÇĞÜ";
    }
}
