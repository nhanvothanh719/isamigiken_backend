<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUsMail extends Mailable {

    use Queueable, SerializesModels;

    protected $data; 

    public function __construct($data) {
        $this->data = $data;
    }

    public function build() {
        return $this
        ->from('isamigiken@gmail.com')
        ->subject('Contact Us Form submission')
        ->view('mails.contact')
        ->with('data', $this->data);
    }
}
