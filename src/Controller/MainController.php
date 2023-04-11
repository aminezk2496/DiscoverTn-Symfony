<?php

namespace App\Controller;

use App\Entity\Publication;

use App\Repository\PublicationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @var PublicationRepository
     */
    private $repository;

    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(PublicationRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }


    /**
     * @Route("/publications", name="publication_list")
     */
    public function list(): Response
    {
        // Retrieve all publications from the database
        $publications = $this->repository->findAll();

        // Render the Twig template and pass the publications as a variable
        return $this->render('showpub.html.twig', [
            'publications' => $publications,
        ]);
    }
}
