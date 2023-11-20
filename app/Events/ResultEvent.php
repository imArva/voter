<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ResultEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private $vote;
    private $votingId;
    /**
     * Create a new event instance.
     */


    public function __construct($votingId, $vote)
    {
        $this->votingId = $votingId;
        $this->vote = $vote;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('private.result.'.$this->votingId)
        ];
    }

    public function broadcastAs(){
        return 'result';
    }

    public function broadcastWith(){
        return [
            'result' => $this->vote
        ];
    }
}
