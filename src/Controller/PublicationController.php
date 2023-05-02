<?php

namespace App\Controller;
use App\Controller\UtilisateurController;
use App\Entity\Utilisateur;

use App\Repository\ReclamationRepository;
use App\Repository\UtilisateurRepository;

use App\Entity\Publication;
use App\Entity\Commentaire;
use App\Form\CommentaireType;
use App\Form\Publication1Type;
use App\Repository\PublicationRepository;
use App\Repository\CommentaireRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use DateTime;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/publication')]
class PublicationController extends AbstractController
{
    #[Route('/', name: 'app_publication_index', methods: ['GET'])]
    public function index(Request $request,PaginatorInterface $paginator,SessionInterface $session,PublicationRepository $publicationRepository): Response
    {
        $utilisateurController = new UtilisateurController();
        $user=$utilisateurController->getDataUserConnected($session);
        $data =$publicationRepository->findAll();
        $publications = $paginator->paginate(
            $data,
            $request->query->getInt('page',1),
            6
        );
        return $this->render('publication/index.html.twig', [
            'publications' =>$publications, 'user'=>$user,
        ]);
    }
    #[Route('/{id}/signaler', name: 'app_publication_signaler', methods: ['GET'])]
    public function signaler(Request $request,$id,PublicationRepository $repository, MailerInterface $mailer): Response
    {

        $admin="yahya.fhima@esprit.tn";
        $pub=$repository->find($id);
        $desc="l'utulisateur".$pub->getIduser()."a signaler la publication avec id ".$pub->getId(). "\n";
        $this->SendSignalMail($admin,$mailer,$desc);



        // Redirect to the publication page
        return $this->redirectToRoute('app_publication_show1',[], Response::HTTP_SEE_OTHER);
    }
    private function SendSignalMail(?string $email, MailerInterface $mailer, ?string $desc)
    {
        $mail = (new Email())
            ->from('devcompi2023@gmail.com')
            ->to($email)
            ->subject('signaler publication')
            ->text("Hello,

We wanted to let you know that a publication has been reported and needs to be reviewed. Additional details are provided below:

{$desc}

Thank you for your attention to this matter.

Best regards,
The Los Devos team"
);
        $mailer->send($mail);
    }
    #[Route('/{id}/community', name: 'app_publication_community', methods: ['GET'])]
    public function community(PublicationRepository $publicationRepository,UtilisateurRepository $utilisateurRepository,$id,Request $request,SessionInterface $session ,CommentaireRepository $commentaireRepository): Response
    {     $com = new Commentaire();
        $utilisateurController = new UtilisateurController();
        $user=$utilisateurController->getDataUserConnected($session);

        $form = $this->createForm(CommentaireType::class, $com);
        $form->handleRequest($request);
        return $this->render('publication/community.html.twig', [
            'publication' => $publicationRepository->find($id),
            'commentaires' =>$commentaireRepository->findAll(),
            'users' =>$utilisateurRepository->findAll(),
            'user'=>$user,
            'form'=>$form->createView()
        ]);
    }

    #[Route('/show1', name: 'app_publication_show1', methods: ['GET'])]
    public function showFront(PublicationRepository $publicationRepository,UtilisateurRepository $utilisateurRepository,SessionInterface $session): Response
    {
        $utilisateurController = new UtilisateurController();
        $user=$utilisateurController->getDataUserConnected($session);

        return $this->render('publication/showfront.html.twig', [
            'publications' => $publicationRepository->findAll(),'user'=>$user,
            'users' =>$utilisateurRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_publication_new', methods: ['GET', 'POST'])]
    public function new(Request $request,PublicationRepository $publicationRepository,SessionInterface $session): Response
    {
        $utilisateurController = new UtilisateurController();
        $user=$utilisateurController->getDataUserConnected($session);

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
                $pub->setIduser($user->getLoginUtilisateur());

            }

            $publicationRepository->save($pub, true);



            return $this->redirectToRoute('app_publication_show1', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render("publication/new.html.twig", [
            "publication" => $pub,
            'user'=>$user,
            "form" => $form->createView()

        ]);
    }


    #[Route('/{id}', name: 'app_publication_show', methods: ['GET'])]
    public function show(Publication $publication,Request $request,UtilisateurRepository $utilisateurRepository, $id,SessionInterface $session, CommentaireRepository $commentaireRepository): Response
    {
        $utilisateurController = new UtilisateurController();
        $user=$utilisateurController->getDataUserConnected($session);
        // Get the publication ID
        $id = $publication->getId();
        $com = new Commentaire();
        $form = $this->createForm(CommentaireType::class, $com);
        $form->handleRequest($request);
        // Define criteria to filter the commentaires
        $criteria = ['publication' => $id];
        $orderBy = ['id' => 'DESC'];
        $limit = 100;
        $offset = 0;
        return $this->render('publication/show.html.twig', [
            'publication' => $publication,
            'commentaires' => $commentaireRepository->findBy($criteria, $orderBy, $limit, $offset),
            'user'=>$user,
            'users' =>$utilisateurRepository->findAll(),

            'form'=>$form->createView()
        ]);
    }

    #[Route('/{id}/edit', name: 'app_publication_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Publication $pub,SessionInterface $session, PublicationRepository $publicationRepository): Response
    {
        $utilisateurController = new UtilisateurController();
        $user=$utilisateurController->getDataUserConnected($session);
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



            return $this->redirectToRoute('app_publication_show1', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render("publication/edit.html.twig", [
            "publication" => $pub,
            'user'=>$user,
            "form" => $form->createView()

        ]);
    }

    #[Route('/{id}/delete', name: 'app_publication_delete', methods: ['POST'])]
    public function delete(Request $request, Publication $publication, PublicationRepository $publicationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $publication->getId(), $request->request->get('_token'))) {
            $publicationRepository->remove($publication, true);
        }

        return $this->redirectToRoute('app_publication_index', [], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/publication/delete/{id}", name="app_publication_delete_ajax", methods={"DELETE"})
     */
    public function deletePublicationAjax(Request $request, Publication $publication): JsonResponse
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($publication);
        $entityManager->flush();

        return new JsonResponse(['success' => true]);
    }
}
