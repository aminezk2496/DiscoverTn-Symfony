<?php

namespace App\Controller;

use App\Entity\Participation;
use App\Entity\Randonnee;
use App\Entity\Rating;
use App\Form\ParticipationType;
use App\Form\RatingType;
use App\Repository\ParticipationRepository;
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
    public function index(ParticipationRepository $participationRepository): Response
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
        $randonnees = $randonneeRepository->findAll();
    foreach ($randonnees as $randonnee) {
        $ratings = $ratingRepository->findBy(['randonnee' => $randonnee]);
        $averageRating = count($ratings) > 0 ? array_sum($ratings) / count($ratings) : 0;
        $results[] = [
            'averageRating' => $averageRating
        ];
    }
        return $this->render('participation_r/new.html.twig', [
            'randonnees' => $randonneeRepository->findAll(),
            'averageRating' => $averageRating,
            'form' => $form->createView(),
        ]);

        
    }
    #[Route('/new', name: 'app_participation_r_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ParticipationRepository $participationRepository,RandonneeRepository $randonneeRepository): Response
    {
        $participation = new Participation();
        $randonnee = $randonneeRepository->find($id);
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
    public function show(Participation $participation): Response
    {
        return $this->render('participation_r/show.html.twig', [
            'participation' => $participation,
        ]);
    }

    #[Route('/{idParti}/edit', name: 'app_participation_r_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Participation $participation, ParticipationRepository $participationRepository): Response
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
    public function delete(Request $request, Participation $participation, ParticipationRepository $participationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$participation->getIdParti(), $request->request->get('_token'))) {
            $participationRepository->remove($participation, true);
        }

        return $this->redirectToRoute('app_participation_r_index', [], Response::HTTP_SEE_OTHER);
    }
    
}
