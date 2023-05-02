<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;
class MailingController extends AbstractController
{
    #[Route('/mailing', name: 'app_mailing')]
    public function send($emailAdr,$subject,$html)
    {
        $transport = Transport::fromDsn('smtp://discovertn6@gmail.com:snxnhczvtdywulqr@smtp.gmail.com:587?allow_self_signed=true&verify_peer=false&verify_peer_name=false');

        // Create a Mailer object
        $mailer = new Mailer($transport);
        
        // Create an Email object
        $email = (new Email());
        
        // Set the "From address"
        $email->from('discovertn6@gmail.com');
        
        // Set the "To address"
        $email->to($emailAdr);
        
        $email->subject($subject);
        
        //$email->text('The plain text version of the message.');
        
        $email->html($html);
        try {
            $mailer->send($email);
            //return true;
            //die('<style> * { font-size: 100px; color: #444; background-color: #4eff73; } </style><pre><h1>&#127881;Email sent successfully!</h1></pre>');
        } catch (TransportExceptionInterface $e) {
           // return false;
            //die('<style>* { font-size: 100px; color: #fff; background-color: #ff4e4e; }</style><pre><h1>&#128544;Error!</h1></pre>');

        }
        //return $this->redirectToRoute('app_evenement_client_index', [], Response::HTTP_SEE_OTHER);
    }
}
