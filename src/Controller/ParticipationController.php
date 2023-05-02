<?php

namespace App\Controller;
use App\Entity\Participation;
use App\Entity\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\ParticipationRepository;
use Knp\Component\Pager\PaginatorInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Mailer\MailerInterface;
class ParticipationController extends AbstractController
{
    #[Route('/participation', name: 'app_participation')]
    public function index(ParticipationRepository $participationRepository,PaginatorInterface $paginator, Request $request): Response
    {

        
        {
            $participation = $participationRepository->findAll();
//dump($participation);die();
            $pagination = $paginator->paginate(
                $participation,
                $request->query->getInt('page', 1), // current page number
                10 // number of items per page
            );
            
        
            return $this->render('participation/index.html.twig', [
                'pagination' => $pagination,
            ]);
        }
       
    }
    #[Route('/status/{idPart}/{status}', name: 'app_participation_client_status', methods: ['GET'])]
    public function StatusChange(Request $request,  EntityManagerInterface $entityManager, int $idPart,int $status,MailerInterface $mailer,MailingController $mailing): Response
    {  
        
        $Participation = $entityManager->getRepository(Participation::class)->find($idPart);
       
        if (!$Participation) {
            throw $this->createNotFoundException('Unable to find Participation entity.');
        }
        $Participation->setStatus($status);
        $entityManager->persist($Participation);
        $entityManager->flush();

        //mail
        $utilisateur = $Participation->getIdUtilisateur();
        $evenement = $Participation->getidEvenement();

        $emailUser = $utilisateur->getEmailUtilisateur();
        $eventNom = $evenement->getTitreEvent();
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
                               <p>
                               
                               </p>
                                
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
        if($status == 1){
             $subject = 'Voter participation à'. $eventNom . 'a été accepté';
        }else{
             $subject = 'Voter participation à'. $eventNom . 'a été annulé';
        }
       
        $mailing->send($emailUser, $subject, $html);



        //$this->addFlash('msg', 'Votre participation effectué avec success ✌️');
        return $this->redirectToRoute('app_participation', [], Response::HTTP_SEE_OTHER);
    }
}
