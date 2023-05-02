<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Entity\Utilisateur;

use App\Entity\Participation;
use App\Form\Evenement1Type;
use App\Controller\MailingController;
use App\Repository\EvenementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use Knp\Component\Pager\PaginatorInterface;



#[Route('/evenement')]
class EvenementClientController extends AbstractController
{
    


    #[Route('/', name: 'app_evenement_client_index', methods: ['GET'])]
    public function index(EvenementRepository $evenementRepository, PaginatorInterface $paginator, Request $request): Response
    {     
        $query = $this->getDoctrine()->getRepository(Evenement::class)->findAll();
    
        $evenement = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1), // current page number
            10 // number of items per page
        );
    
        return $this->render('evenement_client/index.html.twig', [
            'pagination' => $evenement
        ]);
    }
    
    #[Route('/new', name: 'app_evenement_client_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EvenementRepository $evenementRepository): Response
    {
        $evenement = new Evenement();
        $form = $this->createForm(Evenement1Type::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $evenementRepository->save($evenement, true);

            return $this->redirectToRoute('app_evenement_client_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('evenement_client/new.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }

    #[Route('/{idEvent}', name: 'app_evenement_client_show', methods: ['GET'])]
    public function show(Evenement $evenement): Response
    {
        return $this->render('evenement_client/show.html.twig', [
            'evenement' => $evenement,
        ]);
    }

    #[Route('/{idEvent}/edit', name: 'app_evenement_client_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Evenement $evenement, EvenementRepository $evenementRepository): Response
    {
        $form = $this->createForm(Evenement1Type::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $evenementRepository->save($evenement, true);

            return $this->redirectToRoute('app_evenement_client_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('evenement_client/edit.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }

    #[Route('/{idEvent}', name: 'app_evenement_client_delete', methods: ['POST'])]
    public function delete(Request $request, Evenement $evenement, EvenementRepository $evenementRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evenement->getIdEvent(), $request->request->get('_token'))) {
            $evenementRepository->remove($evenement, true);
        }

        return $this->redirectToRoute('app_evenement_client_index' , [''], Response::HTTP_SEE_OTHER);
    }
   
    #[Route('/participer/{idEvent}', name: 'app_evenement_client_participer', methods: ['GET'])]
    public function participer(Request $request, Evenement $evenement, EntityManagerInterface $entityManager, int $idEvent,MailerInterface $mailer,MailingController $mailing): Response
    {  
        
        //get params user session
        $sessionUser = $entityManager->getRepository(Utilisateur::class)->find(1);
        $email = "ammaramal51@gmail.com";
        //end session


        $Participation = new Participation();
        $Participation->setNombre(1);
        $Participation->setDateParti(\DateTime::createFromFormat('Y-m-d',date("Y-m-d")));
        $Participation->setIdEvenement($evenement);
        $Participation->setMontant($evenement->getPrixEvent());
        $Participation->setEtat(0);
        //session id user
        $Participation->setIdUtilisateur($sessionUser);
        $Participation->setStatus(0);
        
        $entityManager->persist($Participation);
        $entityManager->flush();

        

        //send mail
        //https://mailtrap.io/blog/send-emails-in-symfony/

// Create a Transport object

   

    $html = '<!doctype html>
    <html>
      <head>
        
        <style>
    
          body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%; 
          }
    
          table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%; }
            table td {
              font-family: sans-serif;
              font-size: 14px;
              vertical-align: top; 
          }
    
          /* -------------------------------------
              BODY & CONTAINER
          ------------------------------------- */
    
          .body {
            background-color: #f6f6f6;
            width: 100%; 
          }
    
          /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
          .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px; 
          }
    
          /* This should also be a block element, so that it will fill 100% of the .container */
          .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px; 
          }
    
          /* -------------------------------------
              HEADER, FOOTER, MAIN
          ------------------------------------- */
          .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%; 
          }
    
          .wrapper {
            box-sizing: border-box;
            padding: 20px; 
          }
    
          .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
          }
    
          .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%; 
          }
            .footer td,
            .footer p,
            .footer span,
            .footer a {
              color: #999999;
              font-size: 12px;
              text-align: center; 
          }
        </style>
      </head>
      <body>
        <span class="preheader"></span>
        <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
          <tr>
            <td>&nbsp;</td>
            <td class="container">
              <div class="content">
                <table role="presentation" class="main">
                  <tr>
                    <td class="wrapper">
                      <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td>
                            
                            <p>Un second mail sera envoyer lors de la confirmation ou annulation de votre participation </p>
    
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
                
              </div>
            </td>
            <td>&nbsp;</td>
          </tr>
        </table>
      </body>
    </html>';

    
    $mailing->send($email,"Participation bien reçu", $html);
    $this->addFlash('msg', 'Vous avez reçu un email avec plus de détails');
    return $this->redirectToRoute('app_evenement_client_index', [], Response::HTTP_SEE_OTHER);
    
    
}
}