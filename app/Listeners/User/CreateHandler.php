<?php

namespace STS\Listeners\User;

use STS\Events\User\Create;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateHandler
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
     * @param  Create  $event
     * @return void
     */
    public function handle(Create $event)
    {
        //
    }
}