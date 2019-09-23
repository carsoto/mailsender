<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailTemplate;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(){
        $mail = new \stdClass();
        $mail->demo_one = 'Demo One Value';
        $mail->demo_two = 'Demo Two Value';
        $mail->sender = 'SenderUserName';
        $mail->receiver = 'ReceiverUserName';

        Mail::to('carsoto8691@gmail.com')->send(new MailTemplate($mail));
    }
}
