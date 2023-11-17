<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Enquiry extends Mailable
{
    use Queueable, SerializesModels;

    
    
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
       
    }

    public function build()
    {
        $serialId = '';

        switch ($this->data['type']) {
            case 1:
                $serialId = "DEPT";
                $name = "Common Enquiry";
                break;
            case 2:
                $serialId = "PROD";
                $name = "Product Enquiry";
                break;
            case 3:
                $serialId = "SERV";
                $name = "Service Enquiry";
                break;
            // Add more cases for other types if needed

            default:
                $serialId = "DEFAULT"; // Default case, adjust as needed
                $name = "";
                break;
        }

        $serialId .= str_pad($this->data['id'], 4, '0', STR_PAD_LEFT);

        return $this->view('emails.enquiry')
                    ->subject($name .'- ' . $serialId)
                    ->with(['data' => $this->data]);
    }



}
