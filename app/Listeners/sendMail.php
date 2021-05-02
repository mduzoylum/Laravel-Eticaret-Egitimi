<?php

namespace App\Listeners;

use App\Events\BlogAdded;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class sendMail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param BlogAdded $event
     * @return void
     */
    public function handle(BlogAdded $event)
    {
        Log::info("Listener içerisindeyim");
        Log::info("Listener içerisindeyim Kayıt: ".$event->email);
        $userEmail=$event->email->content;

        $email = "mustafadigilli@gmail.com";
        $array = array(
            "name" => "Mustafa",
            "surname" => "Digilli",
            "date" => date("d-m-Y")
        );
        mail::send('mail.welcome', $array, function ($message) use ($userEmail) {
            $message->subject("Hoşgeldin");
            $message->to($userEmail);
        });

    }
}
