<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function sendTestMail()
    {
        $data = [
            'name' => 'Mango'
        ];

        Mail::send(['html' => 'mail'], $data, function ($message) {
            $message->to('usman.faisal60@gmail.com')
                ->subject('Test mail');
            $message->from('test@mangoMail.com');
        });

        return 'Mail should be sent by now';
    }
}
