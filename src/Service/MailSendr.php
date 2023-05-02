<?php

namespace App\Service;

use Symfony\Component\Mailer\Bridge\Google\Transport\GmailSmtpTransport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class MailSendr
{
    public function __construct(private MailerInterface $mailer)
    {

    }

    public function sendEmail(string $to): void
    {
        $email = (new Email())
            ->from("giovannijbakone@gmail.com")
            ->to($to)
            ->subject('Successful reservation')
            ->text("Hello,
Your booking has been registered successfully

Best regards,
The Los Devos team"
);
            $transport = new GmailSmtpTransport('giovannijbakone@gmail.com','rkxlltjrumnjlnmu');
            $mailer = new Mailer($transport);
           // ->html('<p>Message</p>');


             $mailer->send($email);
    }
}