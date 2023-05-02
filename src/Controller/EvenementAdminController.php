<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Entity\Evenement AS et;

use App\Form\EvenementType;
use App\Repository\EvenementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/admin/evenement')]
class EvenementAdminController extends AbstractController
{
    #[Route('/', name: 'app_evenement_admin_index', methods: ['GET'])]
    public function index(EvenementRepository $evenementRepository,SessionInterface $session): Response
    {$utilisateurController = new UtilisateurController();
        $user=$utilisateurController->getDataUserConnected($session);

        return $this->render('evenement_admin/index.html.twig', [
            'evenements' => $evenementRepository->findAll(),
            'user'=>$user,

        ]);
    }

    #[Route('/new', name: 'app_evenement_admin_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EvenementRepository $evenementRepository,SessionInterface $session): Response
    {
        $utilisateurController = new UtilisateurController();
        $user=$utilisateurController->getDataUserConnected($session);
        $evenement = new Evenement();
        
        
        $form = $this->createForm(EvenementType::class, $evenement);
       /* $data = $request->request->get('evenement');
        $data["idEvenementType"] = (int)$data["idEvenementType"];
        $evenement->setIdEvenementType((int)$data["idEvenementType"]);
        $request->request->set('evenement',$data);*/
        //dump($request);die();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            
            $image= $form->get('imageEvent')->getData();
            $fichier = md5(uniqid()).'.'.$image->guessExtension();
            $image->move($this->getParameter('kernel.project_dir').'/public/uploads',$fichier);
            
            $evenement->setImageEvent('/public/uploads/'.$fichier);
           
            $evenementRepository->save($evenement, true);

            return $this->redirectToRoute('app_evenement_admin_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('evenement_admin/new.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
            'user'=>$user,
        ]);
    }

    #[Route('/{idEvent}', name: 'app_evenement_admin_show', methods: ['GET'])]
    public function show(Evenement $evenement,SessionInterface $session): Response
    {$utilisateurController = new UtilisateurController();
        $user=$utilisateurController->getDataUserConnected($session);
        return $this->render('evenement_admin/show.html.twig', [
            'evenement' => $evenement,
            'user'=>$user,
        ]);
    }

    #[Route('/{idEvent}/edit', name: 'app_evenement_admin_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Evenement $evenement,SessionInterface $session, EvenementRepository $evenementRepository): Response
    {$utilisateurController = new UtilisateurController();
        $user=$utilisateurController->getDataUserConnected($session);
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $evenementRepository->save($evenement, true);

            return $this->redirectToRoute('app_evenement_admin_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('evenement_admin/edit.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
            'user'=>$user,
        ]);
    }

    #[Route('/{idEvent}', name: 'app_evenement_admin_delete', methods: ['POST'])]
    public function delete(Request $request, Evenement $evenement, EvenementRepository $evenementRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evenement->getIdEvent(), $request->request->get('_token'))) {
            $evenementRepository->remove($evenement, true);
        }

        return $this->redirectToRoute('app_evenement_admin_index', [], Response::HTTP_SEE_OTHER);
    }
}
