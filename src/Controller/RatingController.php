<?php

namespace App\Controller;

use App\Entity\Camping;
use App\Entity\Randonnee;
use App\Entity\Rating;
use App\Form\RatingType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Form\FormInterface;
use App\Repository\RatingRepository;




class RatingController extends AbstractController
{
    #[Route('/rating', name: 'app_rating')]
    public function index(): Response
    {
        return $this->render('rating/index.html.twig', [
            'controller_name' => 'RatingController',
        ]);
    }

    
    /**
     * @Route("/participation/{id}/rating", name="camping_rating", methods={"POST"})
     */
    #[Route('/participation/{id}/rating', name: 'app_Rating_rate', methods: ['GET', 'POST'])]
    public function rate2(Request $request, Camping $camping,RatingRepository $ratingRepository): Response
    {
        $user = 21;

    // Check if the user has already favorited this article
        $ratingfind = $ratingRepository->findOneBy(['userId' => $user, 'camping' => $camping]);
        if ($ratingfind) {
            $this->addFlash('error', 'Vous avez déjà noté cet élément.');
            return $this->redirectToRoute('app_participation_liste');

        }else{
            $rating = new Rating();
        $form = $this->createForm(RatingType::class, $rating);
        $form->handleRequest($request);
    }

        
        $date = new \DateTime();
        
        if ($form->isSubmitted() && $form->isValid()) {
            $rating->setCamping($camping);
            
            //$rating->setUser($this->getUser());
            $rating->setUserId(21);
            $rating->setCreatedAt($date);
            $ratingRepository->save($rating, true);
            return $this->redirectToRoute('app_participation_liste');
            //$averageRating = $ratingRepository->getAverageRating($camping);
           // $response = ['success' => true, 'averageRating' => $averageRating];
        } else {
            $response = ['success' => false, 'errors' => $this->getErrorsFromForm($form)];
        }
        return $this->renderForm('rating/new.html.twig', [
            'camping' => $camping,
            'form' => $form,
        ]);
       // return $this->redirectToRoute('app_participation_liste');
    }
    #[Route('/participationR/{id}/rating', name: 'app_Rating_ratera', methods: ['GET', 'POST'])]
    public function raterand(Request $request, Randonnee $randonnee,RatingRepository $ratingRepository): Response
    {
        $user = 21;

    // Check if the user has already favorited this article
        $ratingfind = $ratingRepository->findOneBy(['userId' => $user, 'randonnee' => $randonnee]);
        if ($ratingfind) {
            $this->addFlash('error', 'Vous avez déjà noté cet élément.');
            return $this->redirectToRoute('app_participation_liste');

        }else{
            $rating = new Rating();
        $form = $this->createForm(RatingType::class, $rating);
        $form->handleRequest($request);
    }

        
        $date = new \DateTime();
        
        if ($form->isSubmitted() && $form->isValid()) {
            $rating->setRandonnee($randonnee);
            
            //$rating->setUser($this->getUser());
            $rating->setUserId(21);
            $rating->setCreatedAt($date);
            $ratingRepository->save($rating, true);
            return $this->redirectToRoute('app_participation_r_liste');
            //$averageRating = $ratingRepository->getAverageRating($camping);
           // $response = ['success' => true, 'averageRating' => $averageRating];
        } else {
            $response = ['success' => false, 'errors' => $this->getErrorsFromForm($form)];
        }
        return $this->renderForm('rating/new.html.twig', [
            'randonnee' => $randonnee,
            'form' => $form,
        ]);
       // return $this->redirectToRoute('app_participation_liste');
    }
    private function getErrorsFromForm(FormInterface $form): array
    {
        $errors = [];
        foreach ($form->getErrors() as $error) {
            $errors[] = $error->getMessage();
        }
        foreach ($form->all() as $childForm) {
            if ($childForm instanceof FormInterface) {
                $childErrors = $this->getErrorsFromForm($childForm);
                if ($childErrors) {
                    $errors[$childForm->getName()] = $childErrors;
                }
            }
        }
        return $errors;
    }
    /*private function getErrorsFromForm(FormInterface $form): array
    {
        $errors = [];
        foreach ($form->getErrors(true) as $error) {
            $errors[] = $error->getMessage();
        }
        foreach ($form->all() as $childForm) {
            if ($childForm instanceof FormInterface) {
                if ($childErrors = $this->getErrorsFromForm($childForm)) {
                    $errors[$childForm->getName()] = $childErrors;
                }
            }
        }
        return $errors;
    }*/
}
