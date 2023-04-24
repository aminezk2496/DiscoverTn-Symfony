<?php

namespace App\Controller;

use App\Entity\Camping;
use App\Entity\Rating;
use App\Form\RatingType;
use App\Repository\CampingRepository;
use App\Repository\RatingRepository;
use App\Entity\Participation;
use App\Form\ParticipationType;
use App\Repository\ParticipationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


#[Route('/participation')]
class ParticipationController extends AbstractController
{
    #[Route('/', name: 'app_participation_index', methods: ['GET'])]
    public function index(ParticipationRepository $participationRepository,CampingRepository $campingRepository): Response
    {
        return $this->render('participation/index.html.twig', [
            'participations' => $participationRepository->findAll(),
        ]);

       /* $entityManager = $this->getDoctrine()->getManager();
        $campings = $entityManager->getRepository(Camping::class)->findAll();

        return $this->render('participation/new.html.twig', [
            'campings' => $campings,
        ]);*/
    }
        
    
    #[Route('/liste', name: 'app_participation_liste', methods: ['GET'])]
    public function liste(Request $request,CampingRepository $campingRepository, RatingRepository $ratingRepository): Response
    {
        
        $rating = new Rating();
        $form = $this->createForm(RatingType::class, $rating);
        $form->handleRequest($request);
        $results = [];
    $campings = $campingRepository->findAll();
    foreach ($campings as $camping) {
        $ratings = $ratingRepository->findBy(['camping' => $camping]);
        $averageRating = count($ratings) > 0 ? array_sum($ratings) / count($ratings) : 0;
        $results[] = [
            'averageRating' => $averageRating
        ];
    }
        return $this->render('participation/new.html.twig', [
            'campings' => $campingRepository->findAll(),
            'averageRating' => $averageRating,
            'form' => $form->createView(),
        ]);

        
    }
    #[Route('/new/{id}', name: 'app_participation_new', methods: ['GET', 'POST'])]
    public function new($id,ParticipationRepository $participationRepository,CampingRepository $campingRepository): Response
    {
        $participation = new Participation();
        $camping = $campingRepository->find($id);
        $date = new \DateTime();
        if (!$camping) {
            throw $this->createNotFoundException('Le camping correspondant à cet ID n\'existe pas');
        }

// Appel de la méthode setDateParti() avec l'objet DateTime créé
        $participation->setDateParti($date);
        $participation->setNom($camping->getNom());
        $participation->setMontant($camping->getPrix());
        $participation->setEtat("En Attend");
        $participation->setRefp("PUser12023");
        $participation->setIdClient(00);
        //$participation->setIdCamp($id);
        $participation->setIdCamp($camping);
        //$participation->setIdRand('');
        $participation->setIdEvents(00);
        $participation->setNombre(00);
        
        
        $participationRepository->save($participation, true);

    return $this->redirectToRoute('app_participation_index');
    }

    #[Route('/{idParti}', name: 'app_participation_show', methods: ['GET'])]
    public function show(Participation $participation): Response
    {
        return $this->render('participation/show.html.twig', [
            'participation' => $participation,
        ]);
    }

    #[Route('/{idParti}/edit', name: 'app_participation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Participation $participation, ParticipationRepository $participationRepository): Response
    {
        $form = $this->createForm(ParticipationType::class, $participation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $participationRepository->save($participation, true);

            return $this->redirectToRoute('app_participation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('participation/edit.html.twig', [
            'participation' => $participation,
            'form' => $form,
        ]);
    }

    #[Route('/{idParti}', name: 'app_participation_delete', methods: ['POST'])]
    public function delete(Request $request, Participation $participation, ParticipationRepository $participationRepository): Response
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
