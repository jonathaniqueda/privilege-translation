<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('[Privilège Translation] Nova mensagem de contato')
//            ->to('comercial@privilege-ts.com.br', 'Contato Privilège')
            ->to('japaxiqueda@gmail.com', 'Contato Privilège')
            ->from($this->data['email'], $this->data['name'])
            ->view('email.contact', ['data' => $this->data]);
    }
}
