<?php

namespace App\Controller;

use App\Entity\Favorite;
use App\Form\FavoriteType;
use App\Repository\FavoriteRepository;
use App\Repository\CampingRepository;
use App\Repository\RandonneeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/favorite')]
class FavoriteController extends AbstractController
{
    #[Route('/', name: 'app_favorite_index', methods: ['GET'])]
    public function index(FavoriteRepository $favoriteRepository, CampingRepository $campingRepository, RandonneeRepository $randonneeRepository): Response
    {   
        
        $favorites = $favoriteRepository->findAll();
    $campings = [];
    $randonnees = [];

    foreach ($favorites as $favorite) {
        if ($favorite->getCamping() !== null) {
            $camping = $campingRepository->find($favorite->getCamping());
            if ($camping) {
                $campings[] = $camping;
            }
        } else {
            $randonnee = $randonneeRepository->find($favorite->getRandonnee());
            if ($randonnee) {
                $randonnees[] = $randonnee;
            }
        }
    }

    return $this->render('favorite/index.html.twig', [
        'favorites' => $favorites,
        'campings' => $campings,
        'randonnees' => $randonnees,
    ]);
    }

    #[Route('/new', name: 'app_favorite_new', methods: ['GET', 'POST'])]
    public function new(Request $request, FavoriteRepository $favoriteRepository): Response
    {
        $favorite = new Favorite();
        $form = $this->createForm(FavoriteType::class, $favorite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $favoriteRepository->save($favorite, true);

            return $this->redirectToRoute('app_favorite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('favorite/new.html.twig', [
            'favorite' => $favorite,
            'form' => $form,
        ]);
    }

    #[Route('/{idF}', name: 'app_favorite_show', methods: ['GET'])]
    public function show(Favorite $favorite, CampingRepository $campingRepository, RandonneeRepository $randonneeRepository): Response
    {
        if ($favorite->getCamping() !== null) {
            $camping = $campingRepository->find($favorite->getCamping());
            if ($camping) {
                $nom = $camping->getNom();
                $date = $camping->getDateDebut();
            }
        } 
        if($favorite->getRandonnee() !== null) {
            $randonnee = $randonneeRepository->find($favorite->getRandonnee());
            if ($randonnee) {
                $nom = $randonnee->getNom();
                $date = $randonnee->getDateRand();
               
            }
        }
    
        return $this->render('favorite/show.html.twig', [
            'favorite' => $favorite,
            'nom' => $nom,
            'date' => $date,
        ]);
        
    }

    #[Route('/{idF}/edit', name: 'app_favorite_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Favorite $favorite, FavoriteRepository $favoriteRepository): Response
    {
        $form = $this->createForm(FavoriteType::class, $favorite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $favoriteRepository->save($favorite, true);

            return $this->redirectToRoute('app_favorite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('favorite/edit.html.twig', [
            'favorite' => $favorite,
            'form' => $form,
        ]);
    }

    #[Route('/{idF}', name: 'app_favorite_delete', methods: ['POST'])]
    public function delete(Request $request, Favorite $favorite, FavoriteRepository $favoriteRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$favorite->getIdF(), $request->request->get('_token'))) {
            $favoriteRepository->remove($favorite, true);
        }

        return $this->redirectToRoute('app_favorite_index', [], Response::HTTP_SEE_OTHER);
    }
}
