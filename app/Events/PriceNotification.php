<?php

namespace App\Events;

use Carbon\Carbon;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PriceNotification implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $userid;
    public $price;
    public $date;
    public $time;
    public function __construct($data = [])
    {
        $this->userid = $data['user_id'];
        $this->price = $data['price'];
        $this->date = date("Y-m-d", strtotime(Carbon::now()));
        $this->time = date("h:i A", strtotime(Carbon::now()));
    }
    public function broadcastOn()
    {
        return new Channel('new_price');
        // return ['new_email'];
    } 
    public function broadcastAs()
    {
        return 'PriceNotification';

    }
}
