<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\PusherTestEvent;

use Pusher\Laravel\Facades\Pusher;

class PusherTestController extends Controller
{
    public function send($value='')
    {
    	echo "Pusher/Send<br>";
    	event(new PusherTestEvent("Pusher event test"));

    }

    public function get($value='')
    {
    	echo "Pusher/Get";
    	return view('tests.pusher');
    }
}
