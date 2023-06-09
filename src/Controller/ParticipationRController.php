<?php

namespace App\Controller;

use App\Entity\Participations;
use App\Entity\Randonnee;
use App\Entity\Rating;
use App\Form\ParticipationType;
use App\Form\RatingType;
use App\Repository\ParticipationsRepository;
use App\Repository\RandonneeRepository;
use App\Repository\RatingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/participation/r')]
class ParticipationRController extends AbstractController
{
    #[Route('/', name: 'app_participation_r_index', methods: ['GET'])]
    public function index(ParticipationsRepository $participationRepository): Response
    {
        return $this->render('participation_r/index.html.twig', [
            'participations' => $participationRepository->findAll(),
        ]);
    }
    #[Route('/liste', name: 'app_participation_r_liste', methods: ['GET'])]
    public function liste(Request $request,RandonneeRepository $randonneeRepository, RatingRepository $ratingRepository): Response
    {
        
        $rating = new Rating();
        $form = $this->createForm(RatingType::class, $rating);
        $form->handleRequest($request);
        $results = [];
        $averageRatings = [];     
        $randonnees = $randonneeRepository->findAll();
    foreach ($randonnees as $randonnee) {
        $ratings = $ratingRepository->findBy(['randonnee' => $randonnee]);
        $sum = 0; // reset the sum of ratings for each camping
        
        if ($ratings) {
            foreach ($ratings as $rating){
                $rate=$rating->getRating();
                $count = count($ratings);
                $sum=($sum+$rate)/$count;
            }
            
            
            $averageRatings[$randonnee->getIdRandonnee()] = $sum; 
            
        } 
        $results[] = [
            'randonnee' => $randonnee,
            'averageRating' => $sum,
        ];
        
    }
        return $this->render('participation_r/new.html.twig', [
            'randonnees' => $randonneeRepository->findAll(),
            'averageRatings' => $averageRatings,
            'results'=>$results,
            'form' => $form->createView(),
        ]);

        
    }
    #[Route('/new', name: 'app_participation_r_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ParticipationsRepository $participationRepository, RandonneeRepository $randonneeRepository): Response
    {
        $participation = new Participations();
        $randonnee = $randonneeRepository->find($id);
        $favorite = $favoriteRepository->findBy(['randonnee' => $randonnee]);
        foreach ($favorite as $favorites) {
        $favoriteRepository->remove($favorites, true);
        }
        $date = new \DateTime();
        if (!$randonnee) {
            throw $this->createNotFoundException('Le randonnee correspondant à cet ID n\'existe pas');
        }

// Appel de la méthode setDateParti() avec l'objet DateTime créé
        $participation->setDateParti($date);
        $participation->setNom($randonnee->getNom());
        $participation->setMontant($randonnee->getPrix());
        $participation->setEtat("En Attend");
        $participation->setRefp("PUser12023");
        $participation->setIdClient(00);
        //$participation->setIdCamp($id);
        //$participation->setIdCamp($camping);
        $participation->setIdRand($randonnee);
        $participation->setIdEvents(00);
        $participation->setNombre(00);
        
        
        $participationRepository->save($participation, true);
        return $this->redirectToRoute('app_participation_r_index');
        
        /*return $this->renderForm('participation_r/new.html.twig', [
            'participation' => $participation,
            'form' => $form,
        ]);*/
    }

    #[Route('/{idParti}', name: 'app_participation_r_show', methods: ['GET'])]
    public function show(Participations $participation): Response
    {
        return $this->render('participation_r/show.html.twig', [
            'participation' => $participation,
        ]);
    }

    #[Route('/{idParti}/edit', name: 'app_participation_r_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Participations $participation, ParticipationsRepository $participationRepository): Response
    {
        $form = $this->createForm(Participation1Type::class, $participation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $participationRepository->save($participation, true);

            return $this->redirectToRoute('app_participation_r_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('participation_r/edit.html.twig', [
            'participation' => $participation,
            'form' => $form,
        ]);
    }

    #[Route('/{idParti}', name: 'app_participation_r_delete', methods: ['POST'])]
    public function delete(Request $request, Participations $participation, ParticipationsRepository $participationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$participation->getIdParti(), $request->request->get('_token'))) {
            $participationRepository->remove($participation, true);
        }

        return $this->redirectToRoute('app_participation_r_index', [], Response::HTTP_SEE_OTHER);
    }
    
}
