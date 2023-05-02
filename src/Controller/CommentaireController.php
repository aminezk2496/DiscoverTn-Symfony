<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Entity\Publication;
<<<<<<< HEAD
use App\Controller\UtilisateurController;

=======
>>>>>>> 499f550c8212ca9c975321ea5343cdd29a3f940b
use App\Form\CommentaireType;
use App\Repository\CommentaireRepository;
use App\Repository\PublicationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
<<<<<<< HEAD
use Symfony\Component\HttpFoundation\Session\SessionInterface;
=======
>>>>>>> 499f550c8212ca9c975321ea5343cdd29a3f940b
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
<<<<<<< HEAD
    public function new(Request $request, $id,SessionInterface $session, CommentaireRepository $commentaireRepository, PublicationRepository $publicationRepository): JsonResponse    {
        $com = new Commentaire();
        $utilisateurController = new UtilisateurController();
        $user=$utilisateurController->getDataUserConnected($session);
=======
    public function new(Request $request, $id, CommentaireRepository $commentaireRepository, PublicationRepository $publicationRepository): JsonResponse    {
        $com = new Commentaire();
>>>>>>> 499f550c8212ca9c975321ea5343cdd29a3f940b
        $form = $this->createForm(CommentaireType::class, $com);
        $form->handleRequest($request);
        $pub = $publicationRepository->find($id);

        if ($form->isSubmitted() && $form->isValid()) {
            $com->setContenu($this->badwords($com->getContenu()));
            $com->setPublication($pub);
<<<<<<< HEAD
            $com->setIduser($user->getLoginUtilisateur());            $commentaireRepository->save($com, true);
=======
            $com->setIduser('test123');
            $commentaireRepository->save($com, true);
>>>>>>> 499f550c8212ca9c975321ea5343cdd29a3f940b

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

<<<<<<< HEAD
    #[Route('/{id}/edit', name: 'edit_comment', methods: ['GET', 'POST'])]
=======
    #[Route('/{id}/edit', name: 'app_commentaire_edit', methods: ['GET', 'POST'])]
>>>>>>> 499f550c8212ca9c975321ea5343cdd29a3f940b
    public function edit(Request $request, Commentaire $commentaire, CommentaireRepository $commentaireRepository): JsonResponse
    {
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
<<<<<<< HEAD
            $commentaire->setIduser($commentaire->getIduser());
            $commentaire->setPublication($commentaire->getPublication());


=======
>>>>>>> 499f550c8212ca9c975321ea5343cdd29a3f940b
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
