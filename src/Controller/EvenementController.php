<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\EvenementType;
class EvenementController extends AbstractController
{
    #[Route('/evenement', name: 'app_evenement')]
    public function index(): Response
    {
        //$EvenementType = new EvenementType();
        $form = $this->createForm(EvenementType::class/*, $EvenementType*/);

       // $form->handleRequest($request);
        return $this->render('evenement/index.html.twig', [
            'controller_name' => 'EvenementController',
            'formEvt' => $form->createView(),
        ]);
    }
}
