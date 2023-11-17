<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JobApplication extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $attachmentPath;
    public $attachmentName;

    public function __construct($data, $attachmentPath, $attachmentName)
    {
        $this->data = $data;
        $this->attachmentPath = $attachmentPath;
        $this->attachmentName = $attachmentName;
    }

    public function build()
    {
        return $this->subject('New Job Application')
            ->view('emails.job_application')
            ->attach($this->attachmentPath, [
                'as' => $this->attachmentName,
                'mime' => mime_content_type($this->attachmentPath),
            ]);
    }
}
