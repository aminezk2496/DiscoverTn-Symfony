<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Reservation;
use App\Service\MailSendr;
use App\Form\ReservationType;
use App\Entity\Hebergement;
//use App\Controller\EntityManagerInterface;
use Doctrine\ORM\EntityManagerInterface;
use DateTimeImmutable;
use Mixpanel\Mixpanel;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Knp\Component\Pager\PaginatorInterface;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Controller\UtilisateurController;
use App\Entity\Utilisateur;
use App\Repository\ReclamationRepository;
use App\Repository\UtilisateurRepository;



class ReservationController extends AbstractController
{
    #[Route('/reservation/index', name: 'app_reservation')]
    public function index(ManagerRegistry $doctrine,SessionInterface $session, Request $request, PaginatorInterface $paginator): Response
    {
        $utilisateurController = new UtilisateurController();
        $user=$utilisateurController->getDataUserConnected($session);
        $reservations = $doctrine->getRepository(Reservation::class)->findAll();

        //pagination
        $reservations = $paginator->paginate(
            $reservations, // Les données à paginer
            $request->query->getInt('page', 1), // Le numéro de la page à afficher
            5 // Le nombre d'éléments par page
        );

        // Afficher la liste des reser dans la vue
        return $this->render('reservation/view.html.twig', [  'user'=>$user,
            'reservations' => $reservations,
            //'pagination' => $pagination,
        ]);
    }

    ////////////

    #[Route('/reservation/index2', name: 'app_reser')]
    public function pagination(Request $request){
                $resultsPerPage = 5;
                $queryBuilder = $this->getDoctrine()->getRepository(Reservation::class)->createQueryBuilder('r');
                $queryBuilder->orderBy('r.id', 'DESC');
                $query = $queryBuilder->getQuery();

        // Récupérer le numéro de page à partir de la requête
        $currentPage = $request->query->getInt('page', 1);

        // Calculer l'offset
        $offset = ($currentPage - 1) * $resultsPerPage;

        // Créer une instance du composant Paginator
        $paginator = new Paginator($query);

        // Définir l'offset et le nombre de résultats par page
        $paginator->getQuery()
            ->setFirstResult($offset)
            ->setMaxResults($resultsPerPage);

        // Récupérer les résultats paginés
        $results = $paginator->getIterator();

    }

    ////////////

    #[Route('/success', name: 'win_reservation')]
    public function success(): Response
    {
        return $this->render('reservation/success.html.twig', [
        ]);
    }
    
    
    ////////////

/*    private function SendMail(?string $email)
    {
        $mail = (new Email())
            ->from('giovannijbakone@gmail.com')
            ->to($email)
            ->subject('signaler publication')
            ->text("Hello,
We wanted to let you know that a publication has been reported and needs to be reviewed. Additional details are provided below:
Thank you for your attention to this matter.
Best regards,
The Los Devos team"
);
 $transport= new GmailSmtpTransport('giovannijbakone@gmail.com','rkxlltjrumnjlnmu');
        $mailer = new  Mailer($transport);

        $mailer->send($mail);
    }*/

    ///////////

    #[Route('/reservation/add', name: 'add_Reservation')]
    public function addReservation(Request $req,SessionInterface $session, ManagerRegistry $doctrine,MailSendr $mail): Response
    {
        $utilisateurController = new UtilisateurController();
        $user=$utilisateurController->getDataUserConnected($session);
        $reservation = new Reservation();
        $hebergements = new Hebergement();
        $admin='joyanaclet.bakonegiovanni@esprit.tn';
        $form = $this->createForm(ReservationType::class, $reservation);
        
        $form->handleRequest($req);
        
        
        if($form->isSubmitted() && $form->isValid())
        { 
            // $this->SendMail($admin,$mailer);
            $dateReser = $form->get('dateReser')->getData(); // Récupération de l'objet DateTime soumis
            
            //envois du mail 
            $mail->sendEmail($admin);

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
            
            $this->addFlash('success', 'Reservation effectuée');
            return $this->redirectToRoute('app_reservation');
        }
        
        return $this->render('reservation/add.html.twig', 
        [  'user'=>$user,
            'form' => $form->createView()
        ]);
    }
    

    
   
}
