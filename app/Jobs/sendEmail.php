<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

//implement này để báo cho trường trình biết là sẽ sử dụng dụng trong queue
//
class sendEmail implements ShouldQueue
{

    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $toEmail;
    protected $subject;
    protected $body;
    // ví dụ class  SendEmail::dispatch($toEmail, $subject, $body);
    // đây là dùng cái trait của  Dispatchable
    public function __construct($toEmail, $subject, $body)
    {
        $this->toEmail = $toEmail;
        $this->subject = $subject;
        $this->body = $body;
    }

    public function handle()
    {
        Mail::raw($this->body, function ($message) {
            $message->to($this->toEmail)
                ->subject($this->subject);
        });
    }
}
