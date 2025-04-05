<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Blasting extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {
        
    }

    public function build(): self
    {
        return $this->subject("This is a blast email")
                    ->with("Hi, this is a blast email");
    }
}
