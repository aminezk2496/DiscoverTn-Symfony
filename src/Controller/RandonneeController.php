<?php

namespace App\Controller;

use App\Entity\Randonnee;
use App\Form\RandonneeType;
use App\Entity\Favorite;
use App\Repository\RandonneeRepository;
use App\Repository\FavoriteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/randonnee')]
class RandonneeController extends AbstractController
{
    #[Route('/', name: 'app_randonnee_index', methods: ['GET'])]
    public function index(RandonneeRepository $randonneeRepository): Response
    {
        return $this->render('randonnee/index.html.twig', [
            'randonnees' => $randonneeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_randonnee_new', methods: ['GET', 'POST'])]
    public function new(Request $request, RandonneeRepository $randonneeRepository): Response
    {
        $randonnee = new Randonnee();
        $form = $this->createForm(RandonneeType::class, $randonnee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('imagesr')->getData();
            $fileName = $file->getClientOriginalName();
            $path = '/Rand/' . $fileName;
        $file->move($this->getParameter('images_directory'), $fileName);
        //$file->move($this->getParameter('uploads_directory'), $fileName);

        $randonnee->setImagesr($path);
            $randonneeRepository->save($randonnee, true);

            return $this->redirectToRoute('app_randonnee_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('randonnee/new.html.twig', [
            'randonnee' => $randonnee,
            'form' => $form,
        ]);
    }

    #[Route('/{idRandonnee}', name: 'app_randonnee_show', methods: ['GET'])]
    public function show(Randonnee $randonnee): Response
    {
        return $this->render('randonnee/show.html.twig', [
            'randonnee' => $randonnee,
        ]);
    }

    #[Route('/{idRandonnee}/edit', name: 'app_randonnee_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Randonnee $randonnee, RandonneeRepository $randonneeRepository): Response
    {
        $form = $this->createForm(RandonneeType::class, $randonnee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $randonneeRepository->save($randonnee, true);

            return $this->redirectToRoute('app_randonnee_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('randonnee/edit.html.twig', [
            'randonnee' => $randonnee,
            'form' => $form,
        ]);
    }

    #[Route('/{idRandonnee}', name: 'app_randonnee_delete', methods: ['POST'])]
    public function delete(Request $request, Randonnee $randonnee, RandonneeRepository $randonneeRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$randonnee->getIdRandonnee(), $request->request->get('_token'))) {
            $randonneeRepository->remove($randonnee, true);
        }

        return $this->redirectToRoute('app_randonnee_index', [], Response::HTTP_SEE_OTHER);
    }

    public function favoriteR(Request $request, Randonnee $randonnee ,FavoriteRepository $favoritesRepository)
    {

    $userId = 12;

    // Check if the user has already favorited this article
    $existingFavorite = $favoritesRepository->findOneBy(['user' => $userId, 'randonnee' => $randonnee]);
    $date = new \DateTime();
    if (!$existingFavorite) {
        // Create a new favorites entity for the user and article
        $favorites = new Favorite();
        $favorites->setUser($userId);
        $favorites->setRandonnee($randonnee);
        $favorites->setCreatedAt($date);
        $favoritesRepository->save($favorites, true);
        
     }   

        // Redirect back to the article page
        return $this->redirectToRoute('app_participation_r_liste');
    
}
}
