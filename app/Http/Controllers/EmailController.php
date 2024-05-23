<?php

namespace App\Http\Controllers;

use App\Jobs\sendEmail; // Importing the SendEmailJob class

use Illuminate\Mail\Mailer;
use Illuminate\Routing\Controller as BaseController; // Correcting the namespace for Controller

class EmailController extends BaseController
{
    protected $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendEmail()
    {
        $toEmail = 'gietconheo88@gmail.com';
        $subject = 'Hello';
        $body = 'This is a test email.';

        // Dispatch the job to send email
        sendEmail::dispatch($toEmail, $subject, $body);

        return response()->json(['message' => 'Email sent to queue']);
    }

    public function testAction()
    {
        // Set up email details
        $toEmail = 'gietconheo88@gmail.com';
        $subject = 'Hello';
        $body = 'This is a test email.';

        // Attempt to send the email and log the result
        $this->mailer->raw($body, function ($message) use ($toEmail, $subject) {
            $message->to($toEmail)
                ->subject($subject)
                ->from('20522113@gm.uit.edu.vn');
        });

        echo '[SWIFTMAILER] sent email to ' . $toEmail;
    }
}
