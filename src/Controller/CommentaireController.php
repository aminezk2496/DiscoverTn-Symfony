<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Entity\Publication;
use App\Controller\UtilisateurController;

use App\Form\CommentaireType;
use App\Repository\CommentaireRepository;
use App\Repository\PublicationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('/commentaire')]
class CommentaireController extends AbstractController
{
    #[Route('/', name: 'app_commentaire_index', methods: ['GET'])]
    public function index(CommentaireRepository $commentaireRepository): Response
    {
        return $this->render('commentaire/index.html.twig', [
            'commentaires' => $commentaireRepository->findAll(),
        ]);
    }
    function badwords($message){
        $badwords = array("test","table","badword");
        $filter = array("****","*****","*******");
        $message = str_replace($badwords,$filter,$message);
        return $message;
    }

    #[Route('/{id}/new', name: 'app_commentaire_new', methods: ['GET', 'POST'])]
    public function new(Request $request, $id,SessionInterface $session, CommentaireRepository $commentaireRepository, PublicationRepository $publicationRepository): JsonResponse    {
        $com = new Commentaire();
        $utilisateurController = new UtilisateurController();
        $user=$utilisateurController->getDataUserConnected($session);
        $form = $this->createForm(CommentaireType::class, $com);
        $form->handleRequest($request);
        $pub = $publicationRepository->find($id);

        if ($form->isSubmitted() && $form->isValid()) {
            $com->setContenu($this->badwords($com->getContenu()));
            $com->setPublication($pub);
            $com->setIduser($user->getLoginUtilisateur());            $commentaireRepository->save($com, true);

            // Return a JSON response indicating success
            return new JsonResponse(['success' => true]);
        }

        // Return a JSON response indicating errors
        $errors = $this->getFormErrors($form);
        return new JsonResponse(['success' => false, 'errors' => $errors]);
    }

    private function getFormErrors(FormInterface $form): array
    {
        $errors = [];

        foreach ($form->getErrors() as $error) {
            $errors[] = $error->getMessage();
        }

        foreach ($form->all() as $childForm) {
            if (!$childForm->isValid()) {
                $errors[$childForm->getName()] = $this->getFormErrors($childForm);
            }
        }

        return $errors;
    }



    #[Route('/{id}', name: 'app_commentaire_show', methods: ['GET'])]
    public function show(Commentaire $commentaire): Response
    {
        return $this->render('commentaire/show.html.twig', [
            'commentaire' => $commentaire,
        ]);
    }

    #[Route('/{id}/edit', name: 'edit_comment', methods: ['GET', 'POST'])]
    public function edit(Request $request, Commentaire $commentaire, CommentaireRepository $commentaireRepository): JsonResponse
    {
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commentaire->setIduser($commentaire->getIduser());
            $commentaire->setPublication($commentaire->getPublication());


            $commentaireRepository->save($commentaire, true);

            return new JsonResponse(['success' => true]);
        }
          // Return a JSON response indicating errors
        $errors = $this->getFormErrors($form);
        return new JsonResponse(['success' => false, 'errors' => $errors]);

    }
    /**
     * @Route("/commentaire/delete/{id}", name="app_commentaire_delete_ajax", methods={"DELETE"})
     */
    public function deleteCommentaireAjax(Request $request, Commentaire $commentaire): JsonResponse
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($commentaire);
        $entityManager->flush();

        return new JsonResponse(['success' => true]);
    }

}
