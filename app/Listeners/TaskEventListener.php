<?php

namespace App\Listeners;

use App\Events\TaskEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class TaskEventListener
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
     * @param TaskEvent $event
     * @return void
     */
    public function handle(TaskEvent $event)
    {
        Mail::send(['html' => 'mail'], ['name' => 'usman'], function ($message) {
            $message->to('usman.faisal60@gmail.com')
                ->subject('Mango');
        });
    }
}
