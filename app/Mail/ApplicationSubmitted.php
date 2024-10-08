<?php

namespace App\Mail;

use App\Models\JobApply;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplicationSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $application;

    public function __construct(JobApply $application)
    {
        $this->application = $application;
    }

    public function build()
    {
        return $this->from($this->application->email) // Gửi từ địa chỉ email của người dùng
                    ->subject('Đơn ứng tuyển của bạn đã được gửi!')
                    ->view('emails.application_submitted');
    }
}
