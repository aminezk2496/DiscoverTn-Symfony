<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Entity\Hebergement;
//use App\Controller\EntityManagerInterface;
use Doctrine\ORM\EntityManagerInterface;
use DateTimeImmutable;
use Mixpanel\Mixpanel;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class ReservationController extends AbstractController
{
    #[Route('/reservation/index', name: 'app_reservation')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $reservations = $doctrine->getRepository(Reservation::class)->findAll();

        // Afficher la liste des reser dans la vue
        return $this->render('reservation/view.html.twig', [
            'reservations' => $reservations,
        ]);
    }

    #[Route('/success', name: 'win_reservation')]
    public function success(): Response
    {
        return $this->render('reservation/success.html.twig', [
        ]);
    }
    
   

    #[Route('/reservation/add', name: 'add_Reservation')]
    public function addReservation(Request $req,ManagerRegistry $doctrine, MailerInterface $mailer): Response
    {
        $reservation = new Reservation();
        $hebergements = new Hebergement();
        $admin='joyanaclet.bakonegiovanni@esprit.tn';
        $form = $this->createForm(ReservationType::class, $reservation);
        
        $form->handleRequest($req);
        
        
        if($form->isSubmitted() && $form->isValid())
        { 
           // $this->SendMail($admin,$mailer);
            $dateReser = $form->get('dateReser')->getData(); // Récupération de l'objet DateTime soumis
            $this->SendMail($admin,$mailer);
            // $dateReserString = $dateReser->format('Y-m-d'); // Conversion de l'objet DateTime en chaîne de caractères au format "AAAA-MM-JJ "
        
            $reservation->setDateReser($dateReser);

             $nomHeberCherche = $form->get('nomHeber')->getData();
           
             foreach ($hebergements as $hebergement) {
                if ($hebergement->getNomHeber()->equals($nomRecherche)) {
                    // L'hébergement a été trouvé, on peut faire quelque chose avec
                    $reservation->setReservation($hebergement);
                    break; // On sort de la boucle car on a trouvé l'hébergement cherché
                }
            } 

            $entityManager = $doctrine->getManager();
            $entityManager->persist($reservation);
            $entityManager->flush();
            
            return $this->redirectToRoute('app_reservation');
        }
        
        return $this->render('reservation/add.html.twig', 
        [
            'form' => $form->createView()
        ]);
    }
   
    private function SendMail(?string $email, MailerInterface $mailer)
    {
        $mail = (new Email())
            ->from('devcompi2023@gmail.com')
            ->to($email)
            ->subject('Reservation effectuée')
            ->text("Hello,
            your reservation has been registred succesfully.

            Best regards,
            The Los Devos team"
);
        $mailer->send($mail);
    }

    
   
}
