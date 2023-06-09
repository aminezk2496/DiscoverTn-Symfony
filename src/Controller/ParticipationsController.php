<?php

namespace App\Controller;

use App\Entity\Camping;
use App\Entity\Rating;
use App\Entity\Favorite;
use App\Form\RatingType;
use App\Repository\CampingRepository;
use App\Repository\RatingRepository;
use App\Repository\FavoriteRepository;
use App\Controller\CampingController;
use App\Entity\Participations;
use App\Form\ParticipationType;
use App\Repository\ParticipationsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


#[Route('/participations')]
class ParticipationsController extends AbstractController
{
    #[Route('/', name: 'app_participation_index', methods: ['GET'])]
    public function index(ParticipationsRepository $participationRepository,SessionInterface $session, CampingRepository $campingRepository): Response
    {$utilisateurController = new UtilisateurController();
        $user=$utilisateurController->getDataUserConnected($session);
        return $this->render('participations/index.html.twig', [
            'participations' => $participationRepository->findAll(),
            'user'=>$user,
        ]);

       /* $entityManager = $this->getDoctrine()->getManager();
        $campings = $entityManager->getRepository(Camping::class)->findAll();

        return $this->render('participation/new.html.twig', [
            'campings' => $campings,
        ]);*/
    }
        
    
    #[Route('/liste', name: 'app_participation_liste', methods: ['GET'])]
    public function liste(Request $request,SessionInterface $session,CampingRepository $campingRepository, RatingRepository $ratingRepository): Response
    {$utilisateurController = new UtilisateurController();
        $user=$utilisateurController->getDataUserConnected($session);
        
        $rating = new Rating();
    $form = $this->createForm(RatingType::class, $rating);
    $form->handleRequest($request);
    
    $results = [];
    $averageRatings = []; 
    
    $campings = $campingRepository->findAll();
    
    foreach ($campings as $camping) {
        $ratings = $ratingRepository->findBy(['camping' => $camping]);
        $sum = 0; // reset the sum of ratings for each camping
        
        if ($ratings) {
            foreach ($ratings as $rating){
                $rate=$rating->getRating();
                $count = count($ratings);
                $sum=($sum+$rate)/$count;
            }
            
            
            $averageRatings[$camping->getIdCamping()] = $sum; 
            
        } 
        $results[] = [
            'camping' => $camping,
            'averageRating' => $sum,
            'user'=>$user,
        ];
        
    }
    
    return $this->render('participations/new.html.twig', [
        'campings' => $campingRepository->findAll(),
        'averageRatings' => $averageRatings,
        'results'=>$results,
        'form' => $form->createView(),
        'user'=>$user,
    ]);
}
        
   

    #[Route('/new/{id}', name: 'app_participation_new', methods: ['GET', 'POST'])]
    public function new($id, CampingController $campingController,SessionInterface $session, ParticipationsRepository $participationRepository, CampingRepository $campingRepository, FavoriteRepository $favoriteRepository): Response
    {
        $favorite= new Favorite();
        $participation = new Participations();
        $camping = $campingRepository->find($id);
        $favorite = $favoriteRepository->findBy(['camping' => $camping]);
        foreach ($favorite as $favorites) {
        $favoriteRepository->remove($favorites, true);
        }
        $date = new \DateTime();
        if (!$camping) {
            throw $this->createNotFoundException('Le camping correspondant à cet ID n\'existe pas');
        }
        $nombre = intval($participationRepository->count([]));
// Appel de la méthode setDateParti() avec l'objet DateTime créé
        $participation->setDateParti($date);
        $participation->setNom($camping->getNom());
        $participation->setMontant($camping->getPrix());
        $participation->setEtat("En Attend");
        $participation->setRefp("PUser12023");
        $participation->setIdClient(12);
        $participation->setNombre($nombre);
        //$participation->setIdCamp($id);
        $participation->setIdCamp($camping);
        //$participation->setIdRand('');
        $participation->setIdEvents(00);
        $participation->setNombre(00);
        
        
        $participationRepository->save($participation, true);
        $places = $camping->getNbrPlace();
         $newPlaces = $places - 1;
        $camping->setNbrPlace($newPlaces);
        $campingRepository->save($camping, true);
        //$campingController->calculerNbrPlace($id);

    return $this->redirectToRoute('app_participation_index');
    }

    #[Route('/{idParti}', name: 'app_participation_show', methods: ['GET'])]
    public function show(Participations $participation,SessionInterface $session): Response
    {$utilisateurController = new UtilisateurController();
        $user=$utilisateurController->getDataUserConnected($session);
        return $this->render('participations/show.html.twig', [
            'participation' => $participation,
            'user'=>$user,
        ]);
    }

    #[Route('/{idParti}/edit', name: 'app_participation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request,SessionInterface $session, Participations $participation, ParticipationsRepository $participationRepository): Response
    {$utilisateurController = new UtilisateurController();
        $user=$utilisateurController->getDataUserConnected($session);
        $form = $this->createForm(ParticipationType::class, $participation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $participationRepository->save($participation, true);

            return $this->redirectToRoute('app_participation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('participations/edit.html.twig', [
            'participation' => $participation,
            'form' => $form,
        ]);
    }

    #[Route('/{idParti}', name: 'app_participation_delete', methods: ['POST'])]
    public function delete(Request $request, Participations $participation, ParticipationsRepository $participationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$participation->getIdParti(), $request->request->get('_token'))) {
            $participationRepository->remove($participation, true);
        }

        return $this->redirectToRoute('app_participation_index', [], Response::HTTP_SEE_OTHER);
    }

    public function showImage($id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $image = $entityManager->getRepository(Camping::class)->find($id);

        if (!$image) {
            throw $this->createNotFoundException('Image not found');
        }

        return $this->render('image.html.twig', [
            'Imagec' => $image->getImagec(),
        ]);
    }
}
