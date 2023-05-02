<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\File\File;

class MaillingController extends AbstractController
{
    #[Route('/mailling', name: 'app_mailling')]
    public function index(): Response
    {
        
// Create a Transport object
$transport = Transport::fromDsn('smtp://rihem.drissi@esprit.tn:qnerkiajcikwckjj@smtp.gmail.com:587');

// Create a Mailer object
$mailer = new Mailer($transport);

// Create an Email object
$email = (new Email());

// Set the "From address"
$email->from('rihem.drissi@esprit.tn');

// Set the "To address"
$email->to(
    'mootez.nasri@esprit.tn'
    # 'email2@gmail.com',
    # 'email3@gmail.com'
);

// Set "CC"
# $email->cc('cc@example.com');
// Set "BCC"
# $email->bcc('bcc@example.com');
// Set "Reply To"
# $email->replyTo('fabien@example.com');
// Set "Priority"
# $email->priority(Email::PRIORITY_HIGH);

// Set a "subject"
$email->subject('A Cool Subject!');

// Set the plain-text "Body"
$email->text('N7ebeek Nasrii.');

// Set HTML "Body"
$email->html('
    <h1 style="color: #fff300; background-color: #0073ff; width: 500px; padding: 16px 0; text-align: center; border-radius: 50px;">
    N7ebeeek ya Nasriiii.
    </h1>
    <img src="cid:Image_Name_1" style="width: 600px; border-radius: 50px">
    <br>
    <img src="cid:Image_Name_2" style="width: 600px; border-radius: 50px">
    <h1 style="color: #ff0000; background-color: #5bff9c; width: 500px; padding: 16px 0; text-align: center; border-radius: 50px;">
    The End!
    </h1>
');

// Add an "Attachment"
//$email->attachFromPath('example_1.txt');
//$email->attachFromPath('example_2.txt');

// Add an "Image"
//$email->embed(fopen('image_1.png', 'r'), 'Image_Name_1');
//$email->embed(fopen('image_2.jpg', 'r'), 'Image_Name_2');

// Sending email with status
try {
    // Send email
    $mailer->send($email);

    // Display custom successful message
    die('<style> * { font-size: 100px; color: #444; background-color: #4eff73; } </style><pre><h1>&#127881;Email sent successfully!</h1></pre>');
} catch (TransportExceptionInterface $e) {
    // Display custom error message
    die('<style>* { font-size: 100px; color: #fff; background-color: #ff4e4e; }</style><pre><h1>&#128544;Error!</h1></pre>');

    // Display real errors
    # echo '<pre style="color: red;">', print_r($e, TRUE), '</pre>';

    
}
    }
    #[Route('/mailling', name: 'app_mailling')]
    public function sendEmail(string $name,\DateTime $dateAsString,float $Prix,string $lieux): Response
{
    { $Date = $dateAsString->format('Y-m-d');
        $transport = Transport::fromDsn('smtp://discovertn6@gmail.com:twxtgmrhhurekoud@smtp.gmail.com:587');
        $mailer = new Mailer($transport);
        $email = (new Email());
        $email->from('discovertn6@gmail.com');
        $email->to('rihem.dsi@gmail.com');
        $email->subject(sprintf(' Participation à %s le %s', $name, $Date ));
        $email->text(sprintf('vous avez participé à %s le %s.', $name, $Date));
        $email->html(sprintf('
    <div style="background-color: #F5F5F5; padding: 20px; font-family: Arial, sans-serif;">
        <h1 style="color: #0073ff; font-size: 24px; font-weight: bold; text-align: center; margin-bottom: 30px;">Participation</h1>
        <div style="background-color: #fff; padding: 20px; border-radius: 10px;">
            <p style="color: #444; font-size: 18px; margin-bottom: 10px;">vous avez participé à %s le %s.</p>
            <p style="color: #444; font-size: 18px; margin-bottom: 10px;">Prix: %s</p>
            <p style="color: #444; font-size: 18px; margin-bottom: 10px;">Lieux: %s</p>
        </div>
        <div style="background-color: #0073ff; color: #fff; text-align: center; padding: 10px; margin-top: 30px; border-radius: 10px;">
            <p style="font-size: 14px; margin: 0;">Thank you for using our service.</p>
        </div>
    </div>
', $name, $Date, $Prix, $lieux));
//$email->attach(new Attachment ($pdfFile, 'resume.pdf'));
        try {
            $mailer->send($email);
            die();
        } catch (TransportExceptionInterface $e) {
            die('<style>* { font-size: 100px; color: #fff; background-color: #ff4e4e; }</style><pre><h1>&#128544;Error!</h1></pre>');

        }
    }
}

}

