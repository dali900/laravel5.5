<?php

namespace App\Listeners;

use App\Events\PusherTestEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

# Event beskoristan ukoliko event implementira broudcast, salju se podaci pusheru
class PusherTestListener
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
     * @param  PusherTestEvent  $event
     * @return void
     */
    public function handle(PusherTestEvent $event)
    {
        //echo $event->msg;
    }
}
