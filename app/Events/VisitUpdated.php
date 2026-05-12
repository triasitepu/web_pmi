<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class VisitUpdated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $stats;

    public function __construct($stats)
    {
        $this->stats = $stats;
    }

    public function broadcastOn(): Channel
    {
        return new Channel('visits');
    }

    public function broadcastAs(): string
    {
        return 'visit.updated';
    }

    public function broadcastWith(): array
    {
        return [
            'stats' => $this->stats
        ];
    }
}