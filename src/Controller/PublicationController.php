<?php

namespace App\Controller;

use App\Entity\Publication;
use App\Entity\Commentaire;
use App\Form\Publication1Type;
use App\Repository\PublicationRepository;
use App\Repository\CommentaireRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

#[Route('/publication')]
class PublicationController extends AbstractController
{
    #[Route('/', name: 'app_publication_index', methods: ['GET'])]
    public function index(PublicationRepository $publicationRepository): Response
    {
        return $this->render('publication/index.html.twig', [
            'publications' => $publicationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_publication_new', methods: ['GET', 'POST'])]
    public function new(Request $request, PublicationRepository $publicationRepository): Response
    {
        $pub = new Publication();
        $form = $this->createForm(Publication1Type::class, $pub);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {


            $file = $request->files->get('publication1')['urlimage'];
            if (isset($file)) {
                $filename = md5(uniqid()) . '.' . $file->guessExtension();
                $file->move(
                    'C:/xampp/htdocs/devcomimgupload/',
                    $filename
                );
                $pub->setUrlimage('C:/xampp/htdocs/devcomimgupload/' . $filename);
                $pub->setDatePublication(new DateTime());
                $pub->setIduser(26);
            }

            $publicationRepository->save($pub, true);



            return $this->redirectToRoute('app_publication_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render("publication/new.html.twig", [
            "publication" => $pub,
            "form" => $form->createView()

        ]);
    }

    #[Route('/{id}', name: 'app_publication_show', methods: ['GET'])]
    public function show(Publication $publication, $id, CommentaireRepository $commentaireRepository): Response
    {
        // Get the publication ID
        $id = $publication->getId();

        // Define criteria to filter the commentaires
        $criteria = ['idpub' => $id];
        $orderBy = ['id' => 'DESC'];
        $limit = 100;
        $offset = 0;
        return $this->render('publication/show.html.twig', [
            'publication' => $publication,
            'commentaires' => $commentaireRepository->findBy($criteria, $orderBy, $limit, $offset),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_publication_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Publication $pub, PublicationRepository $publicationRepository): Response
    {
        $form = $this->createForm(Publication1Type::class, $pub);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {


            $file = $request->files->get('publication1')['urlimage'];
            if (isset($file)) {
                $filename = md5(uniqid()) . '.' . $file->guessExtension();
                $file->move(
                    'C:/xampp/htdocs/devcomimgupload/',
                    $filename
                );
                $pub->setUrlimage('C:/xampp/htdocs/devcomimgupload/' . $filename);
                $pub->setDatePublication($pub->getDatePublication());
                $pub->setIduser($pub->getIduser());
            }

            $publicationRepository->save($pub, true);



            return $this->redirectToRoute('app_publication_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render("publication/edit.html.twig", [
            "publication" => $pub,
            "form" => $form->createView()

        ]);
    }

    #[Route('/{id}', name: 'app_publication_delete', methods: ['POST'])]
    public function delete(Request $request, Publication $publication, PublicationRepository $publicationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $publication->getId(), $request->request->get('_token'))) {
            $publicationRepository->remove($publication, true);
        }

        return $this->redirectToRoute('app_publication_index', [], Response::HTTP_SEE_OTHER);
    }
}
