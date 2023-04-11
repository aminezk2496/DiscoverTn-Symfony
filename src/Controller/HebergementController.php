<?php

namespace App\Controller;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Hebergement;
use App\Form\HebergementType;


class HebergementController extends AbstractController
{
    #[Route('/hebergement/index', name: 'app_hebergement')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $hebergements = $doctrine->getRepository(Hebergement::class)->findAll();

        // Afficher la liste des hebergemnt dans la vue
        return $this->render('hebergement/view.html.twig', [
            'hebergements' => $hebergements,
        ]);
    }

    #[Route('/hebergement/success', name: 'win_hebergement')]
    public function success(): Response
    {
        return $this->redirectToRoute('win_reservation');
    }

    #[Route('/hebergement/add', name: 'add_Hebergement')]
    public function addHebergement(Request $req, ManagerRegistry $doctrine): Response
    {
        $hebergement = new Hebergement();
        $form = $this->createForm(HebergementType::class, $hebergement);
        
        $form->handleRequest($req);
        
        
        if($form->isSubmitted() && $form->isValid())
        {

            $entityManager = $doctrine->getManager();
            $entityManager->persist($hebergement);
            $entityManager->flush();
            
            return $this->redirectToRoute('win_hebergement');
        }
        
        return $this->render('hebergement/add.html.twig', 
        [
            'form' => $form->createView()
        ]);
    }

    #[Route('/hebergement/index', name: 'view_hebergement')]
    public function viewHebergement( ManagerRegistry $doctrine)
    {
       
    }
}
