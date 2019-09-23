<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailTemplate extends Mailable
{
    use Queueable, SerializesModels;

    public $template;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($template)
    {
        $this->template = $template;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('carsoto8691@gmail.com')
        ->view('mails.template')
        ->text('mails.template_plain')
        ->with([
            'testVarOne' => '1',
            'testVarTwo' => '2',
        ])
        ->attach(public_path('/images').'/demo.jpg',[
            'as' => 'demo.jpg',
            'mine' => 'image/jpeg'
        ]);

        //return $this->view('view.name');
    }
}
