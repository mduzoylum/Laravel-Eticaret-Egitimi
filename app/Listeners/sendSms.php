<?php

namespace App\Listeners;

use App\Events\BlogAdded;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class sendSms
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
     * @param  BlogAdded  $event
     * @return void
     */
    public function handle(BlogAdded $event)
    {
        Log::info("Sms gönderildi");
    }
}
