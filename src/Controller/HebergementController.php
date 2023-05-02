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
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use CMEN\GoogleChartsBundle\GoogleCharts\DataTable;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Controller\UtilisateurController;
use App\Entity\Utilisateur;
use App\Repository\ReclamationRepository;
use App\Repository\UtilisateurRepository;



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
    public function addHebergement(Request $req,SessionInterface $session, ManagerRegistry $doctrine): Response
    {
        $utilisateurController = new UtilisateurController();
        $user=$utilisateurController->getDataUserConnected($session);
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
        [  'user'=>$user,
            'form' => $form->createView()
        ]);
    }

    /////////////

    #[Route('/hebergement/stat', name: 'stat_heber')]
    public function statistiques(ManagerRegistry $doctrine,SessionInterface $session)
    {
        $utilisateurController = new UtilisateurController();
        $user=$utilisateurController->getDataUserConnected($session);
        $em = $doctrine->getManager();
$conn = $em->getConnection();
$sql = "SELECT localisation_heber, COUNT(*) as count FROM hebergement GROUP BY localisation_heber";
$stmt = $conn->query($sql);
//$stmt->execute();
$data = $stmt->fetchAll();

$table = [['Localisation','Nombre hébergements']];
//$table->addColumn('string', 'Localisation');
//$table->addColumn('number', 'Nombre d\'hébergements');
foreach ($data as $row) {
    $table[]=[$row['localisation_heber'], (int)$row['count']];
}

$chart = new PieChart();
$chart->getData()->setArrayToDataTable($table);
$chart->getOptions()->setTitle('Statistiques des hébergements par localisation');
$chart->getOptions()->setHeight(500);
$chart->getOptions()->setWidth(800);

return $this->render('hebergement/statistiques.html.twig', [  'user'=>$user,
    'chart' => $chart
]);
    }


    /////////////

}
