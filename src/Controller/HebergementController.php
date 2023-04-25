<?php

namespace App\Controller;
//require_once __DIR__.'/vendor/autoload.php';

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Hebergement;
use App\Form\HebergementType;
use Mixpanel\Mixpanel;


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

    #[Route('/hebergement/stat', name: 'stat_heber')]
    public function statistiques()
    {
        $mixpanel = Mixpanel::getInstance("e973aae2e2e2891aad5d0d38ca66b880");
        $localisation1 = 'Tunis';
        $localisation2 = 'Sousse';
        $localisation3 = 'Nabeul';

        $query = [
            'event' => 'Visite hébergement',
            'where' => 'properties.localisation == "'.$localisation1.'" || properties.localisation == "'.$localisation2.'" || properties.localisation == "'.$localisation3.'"',
            'type' => 'general',
            'unit' => 'day',
            'interval' => 30,
            'from_date' => '2022-01-01',
            'to_date' => '2022-12-31',
        ];

        $data = $mixpanel->request(['export'], $query);
        $processedData = array();
    
        foreach ($data as $item) {
        $processedData[] = array(
            'localisation' => $item['localisation'],
            'pourcentage' => round($item['nombre'] / $item['total'] * 100, 2)
        );
    }
    
    // Envoi des données au template
    return $this->render('stats.html.twig', array(
        'data' => $processedData
    ));
    }

}
