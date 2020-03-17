<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pusher\Pusher;

class PusherNotificationController extends Controller {
    public function sendNotification(){
        //Remember to change this with your cluster name.
        $options = array(
            'cluster' => 'ap1',
            'encrypted' => true
        );

        //Remember to set your credentials below.
        $pusher = new Pusher(
            '72f209b771778f605aa1',
            '994ddc905a94827da0c0',
            '964596', $options
        );

        $message= "Hello Boy!!";

        //Send a message to notify channel with an event name of notify-event
        $pusher->trigger('notification', 'notification-event', $message);
    }
}
