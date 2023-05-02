<?php

namespace App\Controller;

use App\Entity\Camping;
use App\Entity\Favorite;
use App\Form\CampingType;
use App\Repository\CampingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\User\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormError;
use App\Repository\FavoriteRepository;

#[Route('/camping')]
class CampingController extends AbstractController
{
    #[Route('/', name: 'app_camping_index', methods: ['GET'])]
    public function index(CampingRepository $campingRepository,SessionInterface $session): Response
    {$utilisateurController = new UtilisateurController();
        $user=$utilisateurController->getDataUserConnected($session);
        return $this->render('camping/index.html.twig', [
            'campings' => $campingRepository->findAll(),
            'user'=>$user,
        ]);
    }

    #[Route('/new', name: 'app_camping_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CampingRepository $campingRepository,SessionInterface $session): Response
    {$utilisateurController = new UtilisateurController();
        $user=$utilisateurController->getDataUserConnected($session);
        $camping = new Camping();
        $form = $this->createForm(CampingType::class, $camping);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
           $startDate = $form->get('dateDebut')->getData();
        $endDate = $form->get('dateFin')->getData();
        
        if ($endDate < $startDate) {
            $this->addFlash('error', 'La date de fin doit être supérieure ou égale à la date de début.');
            $form->addError(new FormError('La date de fin doit être supérieure ou égale à la date de début.'));
    
            // Retourner le formulaire non validé
            return $this->render('camping/new.html.twig', [
                'form' => $form->createView(),
                'user'=>$user,

            ]);
}

            $file = $form->get('imagec')->getData();
            $fileName = $file->getClientOriginalName();
            $path = '/Camp/' . $fileName;
        $file->move($this->getParameter('images_directory'), $fileName);
        //$file->move($this->getParameter('uploads_directory'), $fileName);

        $camping->setImagec($path);
            $campingRepository->save($camping, true);

            return $this->redirectToRoute('app_camping_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('camping/new.html.twig', [
            'camping' => $camping,
            'form' => $form,
            'user'=>$user,

        ]);
    }

    #[Route('/{idCamping}', name: 'app_camping_show', methods: ['GET'])]
    public function show(Camping $camping,SessionInterface $session): Response
    {$utilisateurController = new UtilisateurController();
        $user=$utilisateurController->getDataUserConnected($session);
        return $this->render('camping/show.html.twig', [
            'camping' => $camping,
            'user'=>$user,

        ]);
    }

    #[Route('/{idCamping}/edit', name: 'app_camping_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request,SessionInterface $session, Camping $camping, CampingRepository $campingRepository): Response
    {$utilisateurController = new UtilisateurController();
        $user=$utilisateurController->getDataUserConnected($session);
        $form = $this->createForm(CampingType::class, $camping);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('imagec')->getData();
            $fileName = $file->getClientOriginalName();
            $path = '/Camp/' . $fileName;
        $file->move($this->getParameter('images_directory'), $fileName);
        //$file->move($this->getParameter('uploads_directory'), $fileName);

        $camping->setImagec($path);
            $campingRepository->save($camping, true);

            return $this->redirectToRoute('app_camping_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('camping/edit.html.twig', [
            'camping' => $camping,
            'form' => $form,
            'user'=>$user,

        ]);
    }

    #[Route('/{idCamping}', name: 'app_camping_delete', methods: ['POST'])]
    public function delete(Request $request, Camping $camping, CampingRepository $campingRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$camping->getIdCamping(), $request->request->get('_token'))) {
            $campingRepository->remove($camping, true);
        }

        return $this->redirectToRoute('app_camping_index', [], Response::HTTP_SEE_OTHER);
    }


    
    public function favorite(Request $request, Camping $camping ,FavoriteRepository $favoritesRepository)
    {

    $userId = 12;

    // Check if the user has already favorited this article
    $existingFavorite = $favoritesRepository->findOneBy(['user' => $userId, 'camping' => $camping]);
    $date = new \DateTime();
    if (!$existingFavorite) {
        // Create a new favorites entity for the user and article
        $favorites = new Favorite();
        $favorites->setUser($userId);
        $favorites->setCamping($camping);
        $favorites->setCreatedAt($date);
        $favoritesRepository->save($favorites, true);
        
     }   

        // Redirect back to the article page
        return $this->redirectToRoute('app_participation_liste');
    
}
public function calculerNbrPlace($id) {
    //$campingRepository = new CampingRepository();
    //$camping =  $campings = $campingRepository->find($id);
    $entityManager = $this->getDoctrine()->getManager();
    $camping = $this->entityManager->getRepository(Camping::class)->find($id);
    /*if (!$camping) {
        throw $this->createNotFoundException('Le camping avec l\'ID '.$id.' n\'existe pas.');
    }*/
    $places = $camping->getNbrPlace();
    $newPlaces = $places - 1;
    $camping->setNbrPlace($newPlaces);
    $entityManager->flush();

    // Optionnellement, vous pouvez retourner un message de confirmation ou rediriger l'utilisateur vers une autre page.
    return "Le nombre de places du camping avec l'ID ".$id." a été diminué de 1.";
}
private $entityManager;

public function __construct(EntityManagerInterface $entityManager)
{
    $this->entityManager = $entityManager;
}
}
