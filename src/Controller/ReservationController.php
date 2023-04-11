<?php

namespace App\Controller;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Reservation;
use App\Form\ReservationType;
use DateTimeImmutable;

class ReservationController extends AbstractController
{
    #[Route('/reservation', name: 'app_reservation')]
    public function index(): Response
    {
        return $this->render('reservation/index.html.twig', [
            'controller_name' => 'ReservationController',
        ]);
    }

    #[Route('/reservation/success', name: 'win_reservation')]
    public function success(): Response
    {
        return $this->render('reservation/success.html.twig', [
        ]);
    }

    #[Route('/reservation/add', name: 'add_Reservation')]
    public function addReservation(Request $req,ManagerRegistry $doctrine ): Response
    {
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        
        $form->handleRequest($req);
        
        
        if($form->isSubmitted() && $form->isValid())
        {
            $dateReser = $form->get('dateReser')->getData(); // Récupération de l'objet DateTime soumis
           
            // $dateReserString = $dateReser->format('Y-m-d'); // Conversion de l'objet DateTime en chaîne de caractères au format "AAAA-MM-JJ "
        
            $reservation->setDateReser($dateReser);

            $entityManager = $doctrine->getManager();
            $entityManager->persist($reservation);
            $entityManager->flush();
            
            return $this->redirectToRoute('win_reservation');
        }
        
        return $this->render('reservation/add.html.twig', 
        [
            'form' => $form->createView()
        ]);
    }
}
